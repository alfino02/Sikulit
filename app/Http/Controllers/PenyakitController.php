<?php

namespace App\Http\Controllers;

use App\Models\obat;
use App\Models\Penyakit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PenyakitController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_dokter');
    }
    public function index()
    {
        $penyakit = Penyakit::all();
        $array = [
            'penyakit' => $penyakit        
        ];

        return view("penyakit.penyakit",$array);
    }
    public function create()
    {
        $obat = obat::all();   
        return view("penyakit.create", ['obat' => $obat]);

    }

    public function store(Request $request)
    {
        
        $image_file = $request->file('foto');
        $image_extension = $image_file->extension();
        $image_name = date('ymdhis') . "." . $image_extension;
        $image_file->move(public_path('image'), $image_name);
        
        $penyakit = new penyakit([
            'nama_penyakit' => $request->namapenyakit,
        'foto_penyakit' => $image_name,
        'deskripsi_penyakit' => $request->deskripsi,
        'id_obat' => $request->obat,]);
        // $penyakit->create([
        //     'nama_penyakit' => $request->namapenyakit,
        //     'foto_penyakit' => $image_name,
        //     'deskripsi_penyakit' => $request->deskripsi,
        //     'id_obat' => $request->obat,
        // ]);
        $penyakit->save();
        return redirect()->route('penyakit');
    }
    public function edit($id)
    {
        $penyakit = penyakit::find($id);
        $obat = obat::all();   
        $array = [
            'penyakit' => $penyakit,
            'obat' => $obat,
        ];
        return view("penyakit.edit", $array);
    }
    public function update(Request $request, $id)
    {
        $penyakit = penyakit::find($id);
        if ($request->hasFile('foto')) {
            $image_file = $request->file('foto');
            $image_extension = $image_file->extension();
            $image_name = date('ymdhis') . "." . $image_extension;
            $image_file->move(public_path('image'), $image_name);

            $data_image = penyakit::where('id', $id)->first();
            File::delete(public_path('image') . '/' . $data_image->foto);
        }
        penyakit::where("id", $id)->update([
            "nama_penyakit" => $request->namapenyakit,
            'foto_penyakit' => $request->foto ? $image_name : $penyakit->foto_penyakit,
            'deskripsi_penyakit' => $request->deskripsi,
            'id_obat' => $request->obat,
        ]);
        return redirect()->route ("penyakit");
    }
    public function destroy($id)
    {
        penyakit::where("id", $id)->delete();
        return redirect()->route ("penyakit");
    }
}

