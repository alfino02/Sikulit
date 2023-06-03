<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HasilController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_admin');
    }
    function index(){
        return view("/hasil/hasil");
    }
}
