<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HasilpasienController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_user');
    }
    public function index()
    {
        return view("/hasil/hasilpasien");
    }
}
