<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function submit(Request $request){
        $input = $request->all();

        $this->validate($request, [

            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            if (auth()->user()->id_role == 1) {
                return redirect()->route('dashboard');
            } 
        } else {
            return redirect()->route('login');
        }

        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            if (auth()->user()->id_role == 2) {
                return redirect()->route('dashboarddokter');
            }
        } else {
            return redirect()->route('login');
        }

        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            if (auth()->user()->id_role == 3) {
                return redirect()->route('dashboarduser');
            }
        } else {
            return redirect()->route('login');
        }
    }
    public function register()
    {
        return view('register');
    }
    public function store(Request $request)
    {
        $register = new User();
        $register = User::create([
            "nama_user" => $request->nama,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "id_role" => 3,
        ]);
        $register->save();
        return redirect()->route("login");
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
