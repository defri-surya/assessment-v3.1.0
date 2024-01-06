<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\SoalHolland;
use SheetDB\SheetDB;
use Illuminate\Http\Request;

class soalHollandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = SoalHolland::paginate(10);
        return view('Superadmin.SoalHolland.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Superadmin.SoalHolland.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        SoalHolland::create($data);
        return redirect()->route('soalholland.index');
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
        $data = SoalHolland::find($id);
        return view('Superadmin.SoalHolland.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SoalHolland $soalholland)
    {
        $data = $request->all();
        $soalholland->update($data);
        return redirect()->route('soalholland.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($soalholland)
    {
        SoalHolland::where('id', $soalholland)->delete();
        return redirect()->route('soalholland.index');
    }
}
