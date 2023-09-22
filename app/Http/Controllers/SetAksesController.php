<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class SetAksesController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:akses set akses']);
        $this->middleware(['permission:tambah set akses'])->only('tambahSetAkses');
        $this->middleware(['permission:edit set akses'])->only('editSetAkses');
        $this->middleware(['permission:delete set akses'])->only('deleteSetAkses');
    }

    public function index()
    {
        return view('pages.perusahaan.pegawai.set-akses', [
            'title' => "perusahaan",
            'roles' => Role::where("id_perusahaan", Auth::user()->id_perusahaan)->get()
        ]);
    }

    public function tambahSetAkses(Request $request)
    {
        $role = Role::create(['name' => $request->role, 'id_perusahaan' => Auth::user()->id_perusahaan]);

        $getPermission = $request->except('role', '_token');

        $permission = array_values($getPermission);

        $role->givePermissionTo($permission);

        return back()->with('success', 'Set Akses added successfully');
    }

    public function editSetAkses(Request $request, $id)
    {
        $role = Role::find($id);
        $role->name = $request->role;
        $role->save();

        $getPermission = $request->except('role', '_token');

        $permissions = array_values($getPermission);

        $role->syncPermissions($permissions);

        return redirect()->back()->with('success', 'Perubahan izin berhasil disimpan.');
    }

    public function deleteSetAkses($id)
    {
        $role = Role::find($id);

        if ($role) {
            $role->delete();
            return redirect()->back()->with('success', 'Role delete successfully');
        }

        return redirect()->back()->with('error', 'Role not found.');
    }
}