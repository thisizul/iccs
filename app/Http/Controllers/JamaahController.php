<?php

namespace App\Http\Controllers;

use App\Models\Jamaah;
use Illuminate\Http\Request;

class JamaahController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $jamaah = Jamaah::where('nama_kk', 'like', '%' . $request->cari . '%')->latest()->paginate(10);
        } else {
            $jamaah = Jamaah::latest()->paginate(10);
        }
        return view('jamaah.indexjamaah', compact('jamaah'));
    }
    public function indexedit($id)
    {
        $jamaah = Jamaah::find($id);
        return view('jamaah.in.editjamaah', compact('jamaah'));
    }
    public function indexeditmustahik($id)
    {
        $jamaah = Jamaah::find($id);
        return view('jamaah.mustahik.editmustahik', compact('jamaah'));
    }
    public function mustahik(Request $request)
    {
        if ($request->has('cari')) {
            $jamaah = Jamaah::where('nama_kk', 'like', '%' . $request->cari . '%')
                ->where('golongan', '=', 'kurang mampu')
                ->paginate(10);
        } else {
            $jamaah = Jamaah::where('golongan', '=', 'kurang mampu')
                ->groupby('nama_kk')
                ->paginate(10);
        }


        return view('jamaah.mustahik', compact('jamaah'));
    }
    public function indexcreate()
    {
        return view('jamaah.in.createjamaah');
    }
    public function storejamaah(Request $request)
    {
        Jamaah::create([
            'nama_kk' => $request->nama_kk,
            'alamat' => $request->alamat,
            'jumlahjiwa' => $request->jumlahjiwa,
            'golongan' => $request->golongan,
            'tanggal' => $request->tanggal,
        ]);
        return redirect('/jamaah')->with('success', 'berhasil menambahkan data');
    }
    public function simpaneditjamaah($id, Request $request)
    {
        $jamaah = Jamaah::find($id);
        $jamaah->update($request->all());
        // return redirect('indexjamaah')->with('success', 'berhasil megubah data');
        return redirect('jamaah')->with('success', 'berhasil megubah data');
    }
    public function simpanmustahik($id, Request $request)
    {
        $jamaah = Jamaah::find($id);
        $jamaah->update($request->all());
        return redirect('mustahik')->with('success', 'berhasil megubah data');
    }
    public function destroy($id)
    {
        $jamaah = Jamaah::find($id);
        $jamaah->delete();
        return back()->with('info', 'berhasil menghapus data');;
    }
}
