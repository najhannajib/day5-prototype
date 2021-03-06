<?php

namespace App\Http\Controllers;

use App\Models\Rfx;
use Illuminate\Http\Request;

class RfxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rfxes = Rfx::all();

        return view('rfxes.index',[
            'rfxes'=>$rfxes
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
        $rfx = new rfx;

        $rfx->jenis = $request->jenis;
        $rfx->kategori = $request->kategori;
        $rfx->tarikh = $request->tarikh;
        $rfx->status = $request->status;

        $rfx->save();
        return redirect('/rfxes/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rfx  $rfx
     * @return \Illuminate\Http\Response
     */
    public function show(Rfx $rfx)
    {
        //
        return view('rfxes.show',[
            'rfx'=>$rfx
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rfx  $rfx
     * @return \Illuminate\Http\Response
     */
    public function edit(Rfx $rfx)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rfx  $rfx
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rfx $rfx)
    {
        //
        $rfx->jenis = $request->jenis;
        $rfx->kategori = $request->kategori;
        $rfx->tarikh = $request->tarikh;
        $rfx->status = $request->status;

        $rfx->save();
        return redirect('/rfxes/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rfx  $rfx
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rfx $rfx)
    {
        //
    }
}
