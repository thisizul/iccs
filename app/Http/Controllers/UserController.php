<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use App\Models\User;
use App\Models\UserUmum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function indexuser()
    {
        $users = User::all();
        return view('user.indexuser', compact('users'));
    }
    public function indexsantri()
    {
        $users = User::all();

        // $users = User::where('type' == '4');
        return view('user.indexsantri', compact('users',));
        // dd($type);
    }
    public function adduserumum($id)
    {
        $users = User::find($id);
        // dd($users);
        return view('user.umum.adduser', compact('users'));
    }
    public function storeuserumum(Request $request)
    {
        Santri::create([
            'santri_id' => $request->user_id,
            'nama_santri' => $request->nama,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
        ]);
        return redirect('/indexsantri');
    }
    public function editrole($id)
    {
        $users = User::find($id);

        return view('user.edituser', compact('users'));
    }
    public function updaterole(Request $request, $id)
    {
        $users = User::find($id);
        // $users->update($request->except(['_token', 'sumbit']));
        $users->update($request->all());
        // dd($users);
        return redirect('indexuser')->with('success', 'berhasil megubah data');
    }
    public function hapususer($id)
    {
        $users = User::find($id);
        $users->delete();
        return back();
    }
}
