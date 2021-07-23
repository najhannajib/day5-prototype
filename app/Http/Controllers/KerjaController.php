<?php

namespace App\Http\Controllers;

use App\Models\Kerja;
use Illuminate\Http\Request;

class KerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kerjas = Kerja::all();

        return view('kerjas.index',[
            'kerjas'=>$kerjas
        ]);
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
        $kerja = new kerja;

        $kerja->perkara = $request->perkara;
        $kerja->tarikh = $request->tarikh;
        $kerja->masa = $request->masa;

        $kerja->save();
        return redirect('/kerjas/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kerja  $kerja
     * @return \Illuminate\Http\Response
     */
    public function show(Kerja $kerja)
    {
        //
        return view('kerjas.show',[
            'kerja'=>$kerja
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kerja  $kerja
     * @return \Illuminate\Http\Response
     */
    public function edit(Kerja $kerja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kerja  $kerja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kerja $kerja)
    {
        //
        $kerja->perkara = $request->perkara;
        $kerja->tarikh = $request->tarikh;
        $kerja->masa = $request->masa;

        $kerja->save();
        return redirect('/kerjas/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kerja  $kerja
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kerja $kerja)
    {
        //
    }
}
