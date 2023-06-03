<?php

namespace App\Http\Controllers;

use App\Models\gejala;
use Illuminate\Http\Request;
// use App\Http\Requests\StoregejalaRequest;
// use App\Http\Requests\UpdategejalaRequest;

class GejalaController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_dokter');
    }
    public function index()
    {
        $gejala = gejala::all();
        $array = [
            'gejala' => $gejala        
        ];
        return view("gejala.gejala", $array);
    }

    public function create()
    {
        return view("gejala.create");
    }
    public function store(Request $request)
    {
        $gejala = new gejala();
        $gejala = gejala::create([
            "kode_gejala" => $request->kodegejala,
            "gejala" => $request->namagejala,
        ]);
        $gejala->save();
        return redirect()->route("gejala");
    }

    public function edit($id)
    {
        $gejala = gejala::find($id);
        return view("gejala.edit",["gejala"=>$gejala]);
    }

    public function update(Request $request, $id)
    {
        gejala::where("id", $id)->update([
            "kode_gejala" => $request->kodegejala,
            "gejala" => $request->namagejala,

        ]);
        return redirect()->route ("gejala");
    }
    public function destroy($id)
    {
        gejala::where("id", $id)->delete();
        return redirect()->route ("gejala");
    }
}

