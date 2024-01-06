<?php

namespace App\Http\Controllers\Siswa;

use App\hasilakhir;
use App\HasilakhirHolland;
use App\Http\Controllers\Controller;
use App\kategori;
use App\setsoal;
use App\soaldisc;
use App\SoalHolland;
use Illuminate\Http\Request;
use Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;


class ujianController extends Controller
{
    public function index()
    {
        $cek = hasilakhir::where('userid', auth()->user()->id)->first();
        $cek2 = HasilakhirHolland::where('userid', auth()->user()->id)->first();

        $ceksoalDISC = setsoal::where('kategorisoalid', 1)->first();
        $cekKategoriDISC = $ceksoalDISC ? kategori::where('id', $ceksoalDISC->kategorisoalid)->exists() : false;

        $ceksoalHolland = setsoal::where('kategorisoalid', 2)->first();
        $cekKategoriHolland = $ceksoalHolland ? kategori::where('id', $ceksoalHolland->kategorisoalid)->exists() : false;

        $ceksoalAll = setsoal::where('kategorisoalid', 3)->first();
        $cekKategoriAll = $ceksoalAll ? kategori::where('id', $ceksoalAll->kategorisoalid)->exists() : false;

        return view('Siswa.Ujian.index', compact('cek', 'cek2', 'cekKategoriDISC', 'cekKategoriHolland', 'cekKategoriAll'));
    }

    public function ujianDisc()
    {
        $soal = soaldisc::get();
        return view('Siswa.Ujian.disc', compact('soal'));
    }

    public function petunjukujian($params)
    {
        $now = Carbon\Carbon::now();
        $cek = setsoal::where('sekolahid', auth()->user()->sekolahid)->first();
        if (empty($cek)) {
            Alert::warning('Belum Waktu Ujian', 'Silahkan Hubungi Guru BK');
            return redirect()->route('ujian.index');
        }
        if ($cek->status == 'aktif') {
            if ($now >= $cek->tanggalmulai && $now <= $cek->tanggalselesai) {
                if ($params == 'disc') {
                    return view('Siswa.Ujian.petunjukdisc');
                }
            }
            Alert::warning('Belum Waktu Ujian', 'Silahkan Hubungi Guru BK');
            return redirect()->route('ujian.index');
        }
    }

    public function storedisc(Request $request)
    {
        // hal 27
        $a = $request->except('_token');
        // dd($a);
        $id_peserta = auth()->user()->id;
        $id_sekolah = auth()->user()->sekolahid;
        $jumlah     = count($a);
        $D_MOST = 0;
        $I_MOST = 0;
        $S_MOST = 0;
        $C_MOST = 0;
        $bintang_MOST = 0;
        $D_LEST = 0;
        $I_LEST = 0;
        $S_LEST = 0;
        $C_LEST = 0;
        $bintang_LEST = 0;
        // dd($jumlah);
        $mulai = 9;
        for ($i = 1; $i <= $jumlah; $i++) {
            if ($i % 2 == 1) {
                // most
                // echo $a[$mulai .'M'];
                if ($a[$mulai . 'M'] == 'd') {
                    $D_MOST++;
                }
                if ($a[$mulai . 'M'] == 'i') {
                    $I_MOST++;
                }
                if ($a[$mulai . 'M'] == 's') {
                    $S_MOST++;
                }
                if ($a[$mulai . 'M'] == 'c') {
                    $C_MOST++;
                }
                if ($a[$mulai . 'M'] == '*') {
                    $bintang_MOST++;
                }
            } else {
                // lest
                // echo $a[$mulai . 'L'];
                if ($a[$mulai . 'L'] == 'd') {
                    $D_LEST++;
                }
                if ($a[$mulai . 'L'] == 'i') {
                    $I_LEST++;
                }
                if ($a[$mulai . 'L'] == 's') {
                    $S_LEST++;
                }
                if ($a[$mulai . 'L'] == 'c') {
                    $C_LEST++;
                }
                if ($a[$mulai . 'L'] == '*') {
                    $bintang_LEST++;
                }
                $mulai++;
            }
        }

        DB::beginTransaction();

        try {
            hasilakhir::create([
                'D_MOST' => $D_MOST,
                'I_MOST' => $I_MOST,
                'S_MOST' => $S_MOST,
                'C_MOST' => $C_MOST,
                'bintang_MOST' => $bintang_MOST,
                'D_LEST' => $D_LEST,
                'I_LEST' => $I_LEST,
                'S_LEST' => $S_LEST,
                'C_LEST' => $C_LEST,
                'bintang_LEST' => $bintang_LEST,
                'userid' => auth()->user()->id,
                'nama' => auth()->user()->nama,
                'namasekolah' => auth()->user()->sekolah['namasekolah'],
                'sekolahid' => auth()->user()->sekolahid,
                'afiliatorid' => auth()->user()->afiliatorid,
                'nisn' => auth()->user()->nisn,
                'jeniskelamin' => auth()->user()->jeniskelamin,
                'tanggallahir' => auth()->user()->tanggallahir,
            ]);

            DB::commit();
            Alert::success('Berhasil', 'Data Ujian Anda Telah Tersimpan');
            return redirect()->route('ujian.index');
        } catch (\Exception $e) {
            DB::rollback();
            Alert::warning('Ada Yang Salah', 'Silahkan Hubungi Guru BK');
            return redirect()->route('ujian.index');
        }
    }

    public function hasildisc()
    {
        $data = hasilakhir::where('userid', auth()->user()->id)->get();
        return view('Siswa.Ujian.hasildisc', compact('data'));
    }

    // HOLLAND START
    public function ujianHolland()
    {
        $R1 = SoalHolland::where('typesoal', 'R1')->get();
        $I1 = SoalHolland::where('typesoal', 'I1')->get();
        $A1 = SoalHolland::where('typesoal', 'A1')->get();
        $S1 = SoalHolland::where('typesoal', 'S1')->get();
        $E1 = SoalHolland::where('typesoal', 'E1')->get();
        $C1 = SoalHolland::where('typesoal', 'C1')->get();
        $R2 = SoalHolland::where('typesoal', 'R2')->get();
        $I2 = SoalHolland::where('typesoal', 'I2')->get();
        $A2 = SoalHolland::where('typesoal', 'A2')->get();
        $S2 = SoalHolland::where('typesoal', 'S2')->get();
        $E2 = SoalHolland::where('typesoal', 'E2')->get();
        $C2 = SoalHolland::where('typesoal', 'C2')->get();
        $R3 = SoalHolland::where('typesoal', 'R3')->get();
        $I3 = SoalHolland::where('typesoal', 'I3')->get();
        $A3 = SoalHolland::where('typesoal', 'A3')->get();
        $S3 = SoalHolland::where('typesoal', 'S3')->get();
        $E3 = SoalHolland::where('typesoal', 'E3')->get();
        $C3 = SoalHolland::where('typesoal', 'C3')->get();
        return view('Siswa.Ujian.Holland.holland', compact('R1', 'I1', 'A1', 'S1', 'E1', 'C1', 'R2', 'I2', 'A2', 'S2', 'E2', 'C2', 'R3', 'I3', 'A3', 'S3', 'E3', 'C3'));
    }

    public function petunjukujianholland($params)
    {
        $now = Carbon\Carbon::now();
        $cek = setsoal::where('sekolahid', auth()->user()->sekolahid)->first();
        if (empty($cek)) {
            Alert::warning('Belum Waktu Ujian', 'Silahkan Hubungi Guru BK');
            return redirect()->route('ujian.holland');
        }
        if ($cek->status == 'aktif') {
            if ($now >= $cek->tanggalmulai && $now <= $cek->tanggalselesai) {
                if ($params == 'holland') {
                    return view('Siswa.Ujian.Holland.petunjukholland');
                }
            }
            Alert::warning('Belum Waktu Ujian', 'Silahkan Hubungi Guru BK');
            return redirect()->route('ujian.holland');
        }
    }

    public function storeHolland(Request $request)
    {
        // hal 27
        $inputsR1 = $request->only(['r1_1', 'r1_2', 'r1_3', 'r1_4', 'r1_5', 'r1_6', 'r1_7', 'r1_8', 'r1_9', 'r1_10', 'r1_11']);
        $inputsI1 = $request->only(['i1_1', 'i1_2', 'i1_3', 'i1_4', 'i1_5', 'i1_6', 'i1_7', 'i1_8', 'i1_9', 'i1_10', 'i1_11']);
        $inputsA1 = $request->only(['a1_1', 'a1_2', 'a1_3', 'a1_4', 'a1_5', 'a1_6', 'a1_7', 'a1_8', 'a1_9', 'a1_10', 'a1_11']);
        $inputsS1 = $request->only(['s1_1', 's1_2', 's1_3', 's1_4', 's1_5', 's1_6', 's1_7', 's1_8', 's1_9', 's1_10', 's1_11']);
        $inputsE1 = $request->only(['e1_1', 'e1_2', 'e1_3', 'e1_4', 'e1_5', 'e1_6', 'e1_7', 'e1_8', 'e1_9', 'e1_10', 'e1_11']);
        $inputsC1 = $request->only(['c1_1', 'c1_2', 'c1_3', 'c1_4', 'c1_5', 'c1_6', 'c1_7', 'c1_8', 'c1_9', 'c1_10', 'c1_11']);
        $inputsR2 = $request->only(['r2_1', 'r2_2', 'r2_3', 'r2_4', 'r2_5', 'r2_6', 'r2_7', 'r2_8', 'r2_9', 'r2_10', 'r2_11']);
        $inputsI2 = $request->only(['i2_1', 'i2_2', 'i2_3', 'i2_4', 'i2_5', 'i2_6', 'i2_7', 'i2_8', 'i2_9', 'i2_10', 'i2_11']);
        $inputsA2 = $request->only(['a2_1', 'a2_2', 'a2_3', 'a2_4', 'a2_5', 'a2_6', 'a2_7', 'a2_8', 'a2_9', 'a2_10', 'a2_11']);
        $inputsS2 = $request->only(['s2_1', 's2_2', 's2_3', 's2_4', 's2_5', 's2_6', 's2_7', 's2_8', 's2_9', 's2_10', 's2_11']);
        $inputsE2 = $request->only(['e2_1', 'e2_2', 'e2_3', 'e2_4', 'e2_5', 'e2_6', 'e2_7', 'e2_8', 'e2_9', 'e2_10', 'e2_11']);
        $inputsC2 = $request->only(['c2_1', 'c2_2', 'c2_3', 'c2_4', 'c2_5', 'c2_6', 'c2_7', 'c2_8', 'c2_9', 'c2_10', 'c2_11']);
        $inputsR3 = $request->only(['r3_1', 'r3_2', 'r3_3', 'r3_4', 'r3_5', 'r3_6', 'r3_7', 'r3_8', 'r3_9', 'r3_10', 'r3_11']);
        $inputsI3 = $request->only(['i3_1', 'i3_2', 'i3_3', 'i3_4', 'i3_5', 'i3_6', 'i3_7', 'i3_8', 'i3_9', 'i3_10', 'i3_11']);
        $inputsA3 = $request->only(['a3_1', 'a3_2', 'a3_3', 'a3_4', 'a3_5', 'a3_6', 'a3_7', 'a3_8', 'a3_9', 'a3_10', 'a3_11']);
        $inputsS3 = $request->only(['s3_1', 's3_2', 's3_3', 's3_4', 's3_5', 's3_6', 's3_7', 's3_8', 's3_9', 's3_10', 's3_11']);
        $inputsE3 = $request->only(['e3_1', 'e3_2', 'e3_3', 'e3_4', 'e3_5', 'e3_6', 'e3_7', 'e3_8', 'e3_9', 'e3_10', 'e3_11']);
        $inputsC3 = $request->only(['c3_1', 'c3_2', 'c3_3', 'c3_4', 'c3_5', 'c3_6', 'c3_7', 'c3_8', 'c3_9', 'c3_10', 'c3_11']);

        // Hitung total R1, I1, A1, S1, E1, C1
        $totalR1 = array_sum(array_map('intval', $inputsR1));
        $totalI1 = array_sum(array_map('intval', $inputsI1));
        $totalA1 = array_sum(array_map('intval', $inputsA1));
        $totalS1 = array_sum(array_map('intval', $inputsS1));
        $totalE1 = array_sum(array_map('intval', $inputsE1));
        $totalC1 = array_sum(array_map('intval', $inputsC1));

        // Hitung total R1, I2, A2, S2, E2, C2
        $totalR2 = array_sum(array_map('intval', $inputsR2));
        $totalI2 = array_sum(array_map('intval', $inputsI2));
        $totalA2 = array_sum(array_map('intval', $inputsA2));
        $totalS2 = array_sum(array_map('intval', $inputsS2));
        $totalE2 = array_sum(array_map('intval', $inputsE2));
        $totalC2 = array_sum(array_map('intval', $inputsC2));

        // Hitung total R3, I3, A3, S3, E3, C3
        $totalR3 = array_sum(array_map('intval', $inputsR3));
        $totalI3 = array_sum(array_map('intval', $inputsI3));
        $totalA3 = array_sum(array_map('intval', $inputsA3));
        $totalS3 = array_sum(array_map('intval', $inputsS3));
        $totalE3 = array_sum(array_map('intval', $inputsE3));
        $totalC3 = array_sum(array_map('intval', $inputsC3));

        // Total keseluruhan
        $totalR = $totalR1 + $totalR2 + $totalR3;
        $totalI = $totalI1 + $totalI2 + $totalI3;
        $totalA = $totalA1 + $totalA2 + $totalA3;
        $totalS = $totalS1 + $totalS2 + $totalS3;
        $totalE = $totalE1 + $totalE2 + $totalE3;
        $totalC = $totalC1 + $totalC2 + $totalC3;

        DB::beginTransaction();

        try {
            HasilakhirHolland::create([
                'userid' => auth()->user()->id,
                'nama' => auth()->user()->nama,
                'namasekolah' => auth()->user()->sekolah['namasekolah'],
                'sekolahid' => auth()->user()->sekolahid,
                'afiliatorid' => auth()->user()->afiliatorid,
                'nisn' => auth()->user()->nisn,
                'jeniskelamin' => auth()->user()->jeniskelamin,
                'tanggallahir' => auth()->user()->tanggallahir,
                'total_R' => $totalR,
                'total_I' => $totalI,
                'total_A' => $totalA,
                'total_S' => $totalS,
                'total_E' => $totalE,
                'total_C' => $totalC,
            ]);

            DB::commit();
            Alert::success('Berhasil', 'Data Ujian Anda Telah Tersimpan');
            return redirect()->route('ujian.index');
        } catch (\Exception $e) {
            DB::rollback();
            Alert::warning('Ada Yang Salah', 'Silahkan Hubungi Guru BK');
            return redirect()->route('ujian.index');
        }
    }

    public function hasilHolland()
    {
        $dataholland = HasilakhirHolland::where('userid', auth()->user()->id)->get();
        return view('Siswa.Ujian.Holland.hasilholland', compact('dataholland'));
    }
}
