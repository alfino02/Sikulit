<?php

namespace App\Http\Controllers;

use App\Models\aturan;
use App\Models\Penyakit;
use App\Models\gejala;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class AturanController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_dokter');
    }
    public function index()
    {
        $penyakit = penyakit::all();
        return view("aturan.aturan", ['penyakit' => $penyakit]);
    }

    public function create()
    {
        return view("aturan.create");
    }

    public function edit(aturan $aturan, $id)
    {
        $gejala = gejala::all();
        $penyakit = penyakit::find($id);
        return view('aturan.edit', ['aturan' => $penyakit, 'gejala'=> $gejala]);
    }
    public function update(Request $request,$id)
    {
        $penyakit = penyakit::find($id);
        penyakit::where('id', $id)->update([
            'nama_penyakit' => $request->namapenyakit,
        ]);
        $penyakit->gejala()->sync($request->idpilih);
        return redirect()->route('aturan');
    }

    public function destroy($id)
    {
        Penyakit::where("id", $id)->delete();
        return redirect()->route ("aturan");
    }
    public function report()
    {
        $aturan = penyakit::all();
        $pdf = Pdf::loadView('aturan/report',[
            'aturan'=>$aturan
        
        ]);
        return $pdf->download('eksportaturan.pdf');

    }
}
