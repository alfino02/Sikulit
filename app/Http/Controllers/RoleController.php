<?php

namespace App\Http\Controllers;

use App\Models\role;
use App\Http\Requests\StoreroleRequest;
use App\Http\Requests\UpdateroleRequest;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_admin');
    }
    public function index()
    {
        $roles = new role;
        $roles = $roles->get();

        return view('role.role', ['roles' => $roles]);
    }

    public function create()
    {
        return view('role.create');
    }

    public function store(Request $request)
    {
        $role = new role;
        $role->role = $request->role;
        $role->save();

        return redirect()->route('role')->with('message', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $role = role::find($id);
        return view('role.edit', ['role' => $role]);
    }

    public function update(Request $request, $id)
    {
        $role = role::find($id);
        $role->role = isset($request->role) ? $request->role : $role->role;
        $role->save();
        return redirect()->route('role')->with('message', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        $role = role::find($id);
        $role->delete();
        return redirect()->route('role')->with('message', 'Data berhasil dihapus');
    }
}
