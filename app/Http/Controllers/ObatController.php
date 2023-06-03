<?php

namespace App\Http\Controllers;

use App\Models\obat;
use Illuminate\Http\Request;
// use App\Http\Requests\StoreobatRequest;
// use App\Http\Requests\UpdateobatRequest;

class ObatController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_dokter');
    }
    public function index()
    {
        $obat = obat::all();
        $array = [
            'obat' => $obat        
        ];
        return view("obat.obat", $array);
    }

    public function create()
    {
        return view("obat.create");
    }
    public function store(Request $request)
    {
        $obat = new obat();
        $obat = obat::create([
            "nama_obat" => $request->namaobat,
            "deskripsi_obat" => $request->deskripsiobat,
        ]);
        $obat->save();
        return redirect()->route("obat");
    }
    public function edit($id)
    {
        $obat = obat::find($id);
        return view("obat.edit",["obat"=>$obat]);
    }
    public function update(Request $request, $id)
    {
        obat::where("id", $id)->update([
            "nama_obat" => $request->namaobat,
            "deskripsi_obat" => $request->deskripsiobat,

        ]);
        return redirect()->route ("obat");
    }
    public function destroy($id)
    {
        obat::where("id", $id)->delete();
        return redirect()->route ("obat");
    }
}
