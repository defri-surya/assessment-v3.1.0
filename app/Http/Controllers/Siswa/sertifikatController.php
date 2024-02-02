<?php

namespace App\Http\Controllers\Siswa;

use App\hasilakhir;
use App\HasilakhirHolland;
use App\Http\Controllers\Controller;
use App\sekolah;
use App\User;
use Illuminate\Http\Request;
use PDF;

class sertifikatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexDISC()
    {
        $hasilDisc = hasilakhir::where('userid', auth()->user()->id)->exists();

        if ($hasilDisc) {
            $discResult = hasilakhir::where('userid', auth()->user()->id)->first();

            return view('Siswa.Sertifikat.indexDisc', compact('discResult'));
        } else {
            alert()->warning('Anda Belum Mengerjakan Exam DISC !');
            return redirect()->back();
        }
    }

    public function indexHOLLAND()
    {
        $hasilHolland = HasilakhirHolland::where('userid', auth()->user()->id)->exists();

        if ($hasilHolland) {
            $hollandResult = HasilakhirHolland::where('userid', auth()->user()->id)->first();
            $user = User::where('id', $hollandResult->userid)->first();

            return view('Siswa.Sertifikat.indexHolland', compact('user', 'hollandResult'));
        } else {
            alert()->warning('Anda Belum Mengerjakan Exam HOLLAND !');
            return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
