<?php

namespace App\Http\Controllers;

use App\Models\role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
        $user = new User([
        'nama_user' => $request->namauser,
        'email' => $request->email,
        'password' => $request->password,
        'role' => $request->role,]);
        // $penyakit->create([
        //     'nama_penyakit' => $request->namapenyakit,
        //     'foto_penyakit' => $image_name,
        //     'deskripsi_penyakit' => $request->deskripsi,
        //     'id_obat' => $request->obat,
        // ]);
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
}