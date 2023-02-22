<?php

namespace App\Http\Controllers;

use App\Models\Infaq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InfaqMasukController extends Controller
{
    public function indexinfaqmasuk(Request $request)
    {
        if ($request->has('cari')) {
            $kas = Infaq::where('tanggal', 'like', '%' . $request->cari . '%')->latest()->paginate(10);
            $count = Infaq::where('tanggal', 'like', '%' . $request->cari . '%')->sum('masuk');
            $a1 = Infaq::where('tanggal', 'like', '%' . $request->cari . '%')->where('tipe', '=', 'Infaq Jumat')->sum('masuk');
            $a2 = Infaq::where('tanggal', 'like', '%' . $request->cari . '%')->where('tipe', '=', 'Infaq Harian')->sum('masuk');
            $a3 = Infaq::where('tanggal', 'like', '%' . $request->cari . '%')->where('tipe', '=', 'Donatur')->sum('masuk');
        } else {
            $kas = Infaq::latest()->Paginate(10);
            $count = Infaq::where('tanggal', 'like', '%' . $request->cari . '%')->sum('masuk');
            $a1 = Infaq::where('tipe', '=', 'Infaq Jumat')->sum('masuk');
            $a2 = Infaq::where('tipe', '=', 'Infaq Harian')->sum('masuk');
            $a3 = Infaq::where('tipe', '=', 'Donatur')->sum('masuk');
        }
        return view('infaq.indexmasuk', compact('kas', 'count', 'a1', 'a2', 'a3'));
    }
    public function storekasmasjid(Request $request)
    {
        Infaq::create([
            'tanggal' => $request->tanggal,
            'uraian' => $request->uraian,
            'masuk' => str_replace('.', '', $request->masuk),
            'tipe' => $request->tipe,
            'jenis' => 'masuk',
        ]);
        return redirect('/infaqmasuk')->with('success', 'berhasil menambahkan data');
    }
    public function updateinfaqmasuk($id, Request $request)
    {
        $kas = Infaq::find($id);
        $rules = [
            'tipe' => 'required',
        ];
        $message = [
            'tipe.required'  => 'kritik dan saran masih kosong.',
        ];
        $validator = Validator::make($request->all(), $rules, $message);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        $kas->update([
            'tanggal' => $request->tanggal,
            'uraian' => $request->uraian,
            'masuk' => str_replace('.', '', $request->masuk),
            'tipe' => $request->input('tipe'),
            'jenis' => 'masuk',
        ]);

        return redirect('/infaqmasuk')->with('success', 'berhasil megubah data');
    }
    function rupiah($masuk)
    {
        $kas = Infaq::latest()->Paginate(4);
        $kas = "Rp " . number_format($masuk, 0, ',', '.');
        return view('infaq.indexmasuk', compact('kas'));
    }
    public function editinfaqmasuk($id)
    {
        $kas = Infaq::find($id);
        return view('infaq.masuk.updateinfaq', compact('kas'));
    }
    public function addkasmasjid()
    {
        return view('infaq.masuk.createinfaq');
    }
    public function destroyinfaqmasuk($id)
    {
        $kas = Infaq::find($id);
        $kas->delete();
        return back()->with('info', 'berhasil menghapus data');;
    }
}
