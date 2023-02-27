<?php

namespace App\Http\Controllers;

use App\Models\Zakatmal;
use Illuminate\Http\Request;

class ZakatmalController extends Controller
{
    public function index()
    {
        $a = Zakatmal::select('masuk')->sum('masuk');
        $zakatmal = Zakatmal::latest()->paginate(10);
        return view('zakat.maal.index', compact('zakatmal', 'a'));
    }
    public function add()
    {
        return view('zakat.maal.masuk.createmaal');
    }
    public function storeadd(Request $request)
    {
        Zakatmal::create([
            'tanggal' => $request->tanggal,
            'uraian' => $request->muzakki,
            'masuk' => $request->masuk,
            'jenis' => 'masuk',
        ]);
        return redirect('/zakatmalmasuk')->with('success', 'berhasil menambahkan data');
    }
    public function editzakatmal($id)
    {
        $zakatmal = Zakatmal::find($id);
        return view('zakat.maal.masuk.updatemaal', compact('zakatmal'));
    }
    public function updatezakatmal($id, Request $request)
    {
        $kas = Zakatmal::find($id);
        $kas->update($request->all());
        return redirect('/zakatmalmasuk')->with('success', 'berhasil megubah data');
    }
    public function hapusmal($id)
    {
        $kas = Zakatmal::find($id);
        $kas->delete();
        return back()->with('info', 'berhasil menghapus data');;
    }
}
