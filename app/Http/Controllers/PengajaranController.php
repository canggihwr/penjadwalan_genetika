<?php

namespace App\Http\Controllers;

use App\Models\Pengajaran;
use App\Http\Requests\StorePengajaranRequest;
use App\Http\Requests\UpdatePengajaranRequest;

class PengajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorePengajaranRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePengajaranRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengajaran  $pengajaran
     * @return \Illuminate\Http\Response
     */
    public function show(Pengajaran $pengajaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengajaran  $pengajaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengajaran $pengajaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePengajaranRequest  $request
     * @param  \App\Models\Pengajaran  $pengajaran
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePengajaranRequest $request, Pengajaran $pengajaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengajaran  $pengajaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengajaran $pengajaran)
    {
        //
    }
}
