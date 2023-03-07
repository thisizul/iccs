<?php

namespace App\Http\Controllers;

use App\Http\Middleware\UserAccess;
use App\Models\Ngaji;
use App\Models\Santri;
use App\Models\User;
use Illuminate\Http\Request;

class NgajiController extends Controller
{
    public function index()
    {
        $santri = User::all();
        return view('ngaji.indexngaji', compact('santri'));
    }
    public function store(Request $request)
    {
        Ngaji::create($request->except(['_token', 'sumbit']));
        return redirect('/indexngaji');
    }
    public function create($santri_id)
    {
        $santris = Ngaji::find($santri_id);
        return view('ngaji.createngaji', compact('santris'));
        // return redirect('pengurus.ngaji.createngaji');
    }
    public function detail($id)
    {
        $ngaji = Ngaji::all();
        $user = User::find($id);
        return view('ngaji.indexdetail', compact('ngaji', 'user'));
        // dd($ngaji);
    }
}
