<?php

namespace App\Http\Controllers;

use App\Models\aturan;
use App\Http\Requests\StoreaturanRequest;
use App\Http\Requests\UpdateaturanRequest;

class AturanController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_dokter');
    }
    public function index()
    {
        return view("aturan.aturan");
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreaturanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreaturanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\aturan  $aturan
     * @return \Illuminate\Http\Response
     */
    public function show(aturan $aturan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\aturan  $aturan
     * @return \Illuminate\Http\Response
     */
    public function edit(aturan $aturan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateaturanRequest  $request
     * @param  \App\Models\aturan  $aturan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateaturanRequest $request, aturan $aturan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\aturan  $aturan
     * @return \Illuminate\Http\Response
     */
    public function destroy(aturan $aturan)
    {
        //
    }
}
