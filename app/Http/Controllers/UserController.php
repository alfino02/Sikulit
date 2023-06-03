<?php

namespace App\Http\Controllers;

use App\Models\role;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_admin');
    }
    public function index()
    {
        $user = User::all();
        $array = [
            'user' => $user        
        ];

        return view("user.user",$array);
    }
    public function create()
    {
        $role = role::all();   
        return view("user.create", ['role' => $role]);

    }
    public function store(Request $request)
    {
        $user = new User();
        $user = User::create([
            'nama_user' => $request->namauser,
            'email' => $request->email,
            'password' => hash::make($request->password),
            'id_role' => $request->role,
        ]);
        $user->save();
        return redirect()->route('user');
    }
    public function edit($id)
    {
        $user= User::find($id);
        $role = role::all();   
        $array = [
            'user' => $user,
            'role' => $role,
        ];
        return view("user.edit", $array);
    }
    public function update(Request $request, $id)
    {
     User::where("id", $id)->update([
            "nama_user" => $request->namauser,
            'email' => $request->email,
            'role' => $request->role,
        ]);
        return redirect()->route ("user");
    }
    public function destroy($id)
    {
        User::where("id", $id)->delete();
        return redirect()->route ("user");
    }
    public function report()
    {
        $user = user::all();
        $pdf = Pdf::loadView('user/report',[
            'user'=>$user
        
        ]);
        return $pdf->download('eksportuser.pdf');

    }
}