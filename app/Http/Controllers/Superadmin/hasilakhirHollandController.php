<?php

namespace App\Http\Controllers\Superadmin;

use App\DeskHolland;
use App\HasilakhirHolland;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class hasilakhirHollandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = HasilakhirHolland::when($request->cari, function ($query) use ($request) {
            return $query->where('nama', 'LIKE', "%" . $request->cari . "%")
                ->orWhere('nisn', 'LIKE', "%" . $request->cari . "%")
                ->orWhere('namasekolah', 'LIKE', "%" . $request->cari . "%");
        })->paginate(8);
        return view('Superadmin.HasilHolland.index', compact('data'));
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
    public function show($hasilsemua)
    {
        $data = HasilakhirHolland::where('id', $hasilsemua)->first();

        $values = [
            $data->total_R,
            $data->total_I,
            $data->total_A,
            $data->total_S,
            $data->total_E,
            $data->total_C,
        ];

        arsort($values);

        // Mengambil tiga nilai tertinggi
        $threeLargest = array_slice($values, 0, 3);

        // Menyimpan entitas DeskHolland yang cocok ke dalam array
        $deskEntities = [];
        foreach ($threeLargest as $nilai) {
            switch ($nilai) {
                case $data->total_R:
                    $deskEntities[] = DeskHolland::where('id', 1)->first();
                    break;
                case $data->total_I:
                    $deskEntities[] = DeskHolland::where('id', 2)->first();
                    break;
                case $data->total_A:
                    $deskEntities[] = DeskHolland::where('id', 3)->first();
                    break;
                case $data->total_S:
                    $deskEntities[] = DeskHolland::where('id', 4)->first();
                    break;
                case $data->total_E:
                    $deskEntities[] = DeskHolland::where('id', 5)->first();
                    break;
                case $data->total_C:
                    $deskEntities[] = DeskHolland::where('id', 6)->first();
                    break;
                default:
                    break;
            }
        }
        // dd($deskEntities[1]);

        return view('Superadmin.HasilHolland.show', compact('data', 'threeLargest', 'deskEntities'));
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
