<?php

namespace App\Http\Controllers;

use App\Models\Hargaberas;
use Illuminate\Http\Request;

class HargaberasController extends Controller
{
    public function index1()
    {
        $beras = Hargaberas::all();
        return view('zakat.fitrah.index', compact('beras'));
    }
    public function hargaberas(Request $request, $id)
    {
        $beras = Hargaberas::find($id);
        $beras->update($request->all());
        return redirect('/zakatfitrahmasuk');
    }
}
