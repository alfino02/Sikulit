<?php

namespace App\Http\Controllers;

use App\Models\konsultasi;
use App\Models\gejala;
use App\Models\hasil;
use App\Models\gejala_penyakit;
use App\Models\penyakit;
use Carbon\Carbon;
use Illuminate\Http\Request;

class KonsultasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_user');
    }
    public function index()
    {
        $gejala = gejala::all();
        return view("konsultasi/konsultasi", ['gejala' => $gejala]);
    }

    public function create()
    {
        
    }


    public function store(Request $request)
    {
        $results = new hasil();
        $DataRegulation = gejala_penyakit::all();
        $selectedIndication= $request->gejala;
        $regulation = [];
        foreach ($DataRegulation as $item){
            if(!isset($regulation[$item->penyakit_id])){
                $regulation[$item->penyakit_id] = [];
            }
            array_push($regulation[$item->penyakit_id], $item->gejala_id);
        }
        $result = [];
        foreach($regulation as $key => $rules){
            foreach ($selectedIndication as $select){ 
                if(in_array($select, $rules)){
                    if(!isset($result[$key])){
                        $result[$key] = 1;
                    }else{
                        $result[$key] = $result[$key] + 1;
                    }
                }
            }
        }
        if (count($result) > 0){
            $max_keys = array_keys($result, max($result));
            // $sickness = penyakit::where('id', '=', $max_keys[0])->get();
            // $indications = gejala::all();
            // $arrayShow = [
            //     'result' => $sickness,
            //     'indications' => $indications,
            //     'found' =>'Your Sickness Diagnosis Has Been Found'
            // ];
            //$myTime = Carbon::now();
            $results = hasil::Create([
                // 'datetime' => $myTime->toDateTimeString(),
                'id_penyakit' =>  $max_keys[0],
                'id_user' => auth()->user()->id,
            ]);
            // $results->indication()->attach($request->indication);
            $results->save();
            return redirect()->route('hasilpasien');
        }else{
            return redirect()->back()->with('failed-diagnosis', "Sickness wasn't found");
        }
    }

    public function show(konsultasi $konsultasi)
    {
        //
    }


    public function edit(konsultasi $konsultasi)
    {
        //
    }


    public function update(Request $request, konsultasi $konsultasi)
    {
        //
    }

    public function destroy(konsultasi $konsultasi)
    {
        //
    }
}
