<?php

namespace App\Http\Controllers;

use App\Models\Ngaji;
use App\Models\Santri;
use Illuminate\Http\Request;

class NgajiController extends Controller
{
    public function index()
    {
        $santri = Santri::all();
        return view('ngaji.indexngaji', compact('santri'));
    }
    public function store(Request $request)
    {
        Ngaji::create($request->except(['_token', 'sumbit']));
        return redirect('/indexngaji');
    }
    public function create($id)
    {
        $santris = Santri::find($id);
        return view('ngaji.createngaji', compact('santris'));
        // return redirect('pengurus.ngaji.createngaji');
    }
}
