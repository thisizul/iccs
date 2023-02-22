<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fitrahmasuk;
use App\Models\Hargaberas;

class FitrahController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $fitrah = Fitrahmasuk::whereYear('tanggal', 'like', '%' . $request->cari . '%')->latest()->paginate(25);
        } else {
            $fitrah = Fitrahmasuk::with(['hargaberas'])->latest()->paginate(25);
        }
        $beras = Hargaberas::all();
        $a = Fitrahmasuk::select('jumlahberas')->sum('jumlahberas');
        $b = Fitrahmasuk::select('jumlahuang')->sum('jumlahuang');
        return view('zakat.fitrah.index', compact('fitrah', 'beras', 'a', 'b',));
    }
    public function editfitrah($id)
    {
        $beras = Hargaberas::all();
        $fitrah = Fitrahmasuk::find($id);
        return view('zakat.fitrah.masuk.updatefitrah', compact('fitrah', 'beras'));
    }
    public function update(Request $request, $id)
    {
        $fitrah = Fitrahmasuk::find($id);
        if (($request->jenis == '1')) {
            $fitrah->jumlahberas = $request->jumlahjiwa * '2.5';
            $fitrah->jumlahuang = "0";
        } else {
            $fitrah->jumlahuang = $request->jumlahjiwa * $request->beras;
            $fitrah->jumlahberas = "0";
        }
        $fitrah->tanggal = $request->tanggal;
        $fitrah->jumlahjiwa = $request->jumlahjiwa;
        $fitrah->nama = $request->nama;
        $fitrah->save();
        return redirect('zakatfitrahmasuk');
    }
    public function addinfitrah()
    {
        $beras = Hargaberas::all();
        return view('zakat.fitrah.masuk.createfitrah', compact('beras'));
    }
    public function store(Request $request)
    {
        if ($request->jenis == '1') {
            Fitrahmasuk::create([
                'tanggal' => $request->tanggal,
                'nama' => $request->nama,
                'jumlahjiwa' => $request->jumlahjiwa,
                'jenis' => $request->jenis,
                'setberas' => '2.5',
                'setuang' => '25000',
                'hargaberas_id' => '2',
                'jumlahberas' => $request->jumlahjiwa * '2.5',
            ]);
        } else {
            Fitrahmasuk::create([
                'tanggal' => $request->tanggal,
                'nama' => $request->nama,
                'jumlahjiwa' => $request->jumlahjiwa,
                'jenis' => $request->jenis,
                'setberas' => '2.5',
                'setuang' => '25000',
                'hargaberas_id' => '1',
                'jumlahberas' => '0',
                'jumlahuang' => $request->jumlahjiwa * $request->beras,
            ]);
        }
        return redirect('/zakatfitrahmasuk')->with('success', 'berhasil menambahkan data');
    }
    public function destroy($id)
    {
        $fitrah = Fitrahmasuk::find($id);
        $fitrah->delete();
        return back();
    }
}
