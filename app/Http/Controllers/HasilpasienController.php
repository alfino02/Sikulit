<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hasil;
use Barryvdh\DomPDF\Facade\Pdf;

class HasilpasienController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_user');
    }
    public function index()
    {
        $hasilpasien = hasil::all();
        return view("hasilpasien/hasilpasien",[
            'hasilpasien'=>$hasilpasien,
        ]);
    }
    public function report()
    {
        $hasilpasien = hasil::all();
        $pdf = Pdf::loadView('hasilpasien/report',[
            'hasilpasien'=>$hasilpasien
        
        ]);
        return $pdf->download('eksporthasilpasien.pdf');

    }
}
