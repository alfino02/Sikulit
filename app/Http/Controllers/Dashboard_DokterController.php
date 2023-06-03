<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard_DokterController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_dokter');
    }
    function index(){
        return view("dashboard-dokter");
    }
}
