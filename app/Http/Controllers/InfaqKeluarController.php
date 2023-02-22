<?php

namespace App\Http\Controllers;

use App\Models\Infaq;
use Illuminate\Http\Request;

class InfaqKeluarController extends Controller
{
    public function indexinfaqkeluar(Request $request)
    {
        if ($request->has('cari')) {
            $kas = Infaq::where('tanggal', 'like', '%' . $request->cari . '%')->latest()->paginate(15);
            $count = Infaq::where('tanggal', 'like', '%' . $request->cari . '%')->sum('keluar');
            $z1 = Infaq::where('tanggal', 'like', '%' . $request->cari . '%')->where('tipe', '=', 'Infaq Jumat')->sum('keluar');
            $z2 = Infaq::where('tanggal', 'like', '%' . $request->cari . '%')->where('tipe', '=', 'Donatur')->sum('keluar');
            $z3 = Infaq::where('tanggal', 'like', '%' . $request->cari . '%')->where('tipe', '=', 'Infaq Harian')->sum('keluar');
        } else {
            $kas = Infaq::latest()->Paginate(10);
            $count = Infaq::sum('keluar');
            $z1 = Infaq::where('tipe', '=', 'Infaq Jumat')->sum('keluar');
            $z2 = Infaq::where('tipe', '=', 'Donatur')->sum('keluar');
            $z3 = Infaq::where('tipe', '=', 'Infaq Harian')->sum('keluar');
        }
        return view('infaq.indexkeluar', compact('kas', 'count', 'z1', 'z2', 'z3'));
    }
    public function createinfaqkeluar()
    {
        return view('infaq.keluar.createinfaq');
    }
    public function storeinfaqkeluar(Request $request)
    {
        Infaq::create([
            'tanggal' => $request->tanggal,
            'uraian' => $request->uraian,
            'keluar' => str_replace('.', '', $request->keluar),
            'tipe' => $request->tipe,
            'jenis' => 'keluar',
        ]);
        return redirect('/infaqkeluar')->with('success', 'berhasil menambahkan data');
    }
    public function ediinfaqkeluar($id)
    {
        $kas = Infaq::find($id);
        return view('infaq.keluar.updateinfaq', compact('kas'));
    }
    public function updateinfaqkeluar($id, Request $request)
    {
        $kas = Infaq::find($id);
        $kas->update($request->all());
        return redirect('/infaqkeluar')->with('success', 'berhasil megubah data');
    }
    public function destroy($id)
    {
        $kas = Infaq::find($id);
        $kas->delete();
        return back()->with('info', 'berhasil menghapus data');;
    }
}
