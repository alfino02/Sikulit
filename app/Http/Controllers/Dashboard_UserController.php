<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard_UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_user');
    }
    function index(){
        return view("dashboard-user");
    }
}
