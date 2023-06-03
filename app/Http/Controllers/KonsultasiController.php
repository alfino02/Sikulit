<?php

namespace App\Http\Controllers;

use App\Models\konsultasi;
use App\Http\Requests\StorekonsultasiRequest;
use App\Http\Requests\UpdatekonsultasiRequest;

class KonsultasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_user');
    }
    public function index()
    {
        return view("konsultasi/konsultasi");
        
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
     * @param  \App\Http\Requests\StorekonsultasiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorekonsultasiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\konsultasi  $konsultasi
     * @return \Illuminate\Http\Response
     */
    public function show(konsultasi $konsultasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\konsultasi  $konsultasi
     * @return \Illuminate\Http\Response
     */
    public function edit(konsultasi $konsultasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatekonsultasiRequest  $request
     * @param  \App\Models\konsultasi  $konsultasi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatekonsultasiRequest $request, konsultasi $konsultasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\konsultasi  $konsultasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(konsultasi $konsultasi)
    {
        //
    }
}
