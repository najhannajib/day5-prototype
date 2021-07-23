<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vendors = Vendor::all();

        return view('vendors.index',[
            'vendors'=>$vendors
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
        $vendor = new vendor;

        $vendor->idvendor = $request->idvendor;
        $vendor->syarikat = $request->syarikat;
        $vendor->kategori = $request->kategori;
        $vendor->skala = $request->skala;
        $vendor->pengalaman = $request->pengalaman;

        $vendor->save();
        return redirect('/vendors/');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function show(Vendor $vendor)
    {
        //
        return view('vendors.show',[
            'vendor'=>$vendor
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function edit(Vendor $vendor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vendor $vendor)
    {
        //
        $vendor->idvendor = $request->idvendor;
        $vendor->syarikat = $request->syarikat;
        $vendor->kategori = $request->kategori;
        $vendor->skala = $request->skala;
        $vendor->pengalaman = $request->pengalaman;

        $vendor->save();
        return redirect('/vendors/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vendor $vendor)
    {
        //
    }
}
