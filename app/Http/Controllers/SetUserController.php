<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SetUserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:akses set user']);
        $this->middleware(['permission:tambah set user'])->only('tambahSetUser');
        $this->middleware(['permission:edit set user'])->only('editSetUser');
        $this->middleware(['permission:delete set user'])->only('deleteSetUser');
    }

    public function index()
    {
        return view('pages.perusahaan.pegawai.set-user', [
            'title' => "perusahaan",
            'users' => User::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
            'roles' => Role::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
            'pegawais' => Pegawai::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
        ]);
    }

    public function tambahUser(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->id_perusahaan = Auth::user()->id_perusahaan;
        $user->password = Hash::make($request->password);
        $user->assignRole($request->role);
        $user->status = $request->status == 'on' ? '1' : '0';

        $user->save();

        return back()->with('success', 'User added successfully');
    }

    public function editUser(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->assignRole($request->role);
        $user->status = $request->status == 'on' ? '1' : '0';

        $user->save();

        return back()->with('success', 'User edit successfully');
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        if ($user->status != 'main') {
            $user->delete();
        }

        return back()->with('success', 'User delete successfully');
    }
}