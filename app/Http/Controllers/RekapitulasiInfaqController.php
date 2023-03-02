<?php

namespace App\Http\Controllers;

use App\Models\Infaq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RekapitulasiInfaqController extends Controller
{
    public function indexrekap()
    {
        $kas = Infaq::latest()->Paginate(4);
        $a = Infaq::select('masuk')->sum('masuk');
        $b = Infaq::select('keluar')->sum('keluar');
        $jumlah = ($a - $b);
        $total_masuk = Infaq::select(DB::raw("CAST(SUM(masuk)as double)as total_masuk"))
            ->groupBy(DB::raw("year(tanggal)"))
            ->Pluck('total_masuk');
        $total_keluar = Infaq::select(DB::raw("CAST(SUM(keluar)as double)as total_keluar"))
            ->groupBy(DB::raw("year(tanggal)"))
            ->Pluck('total_keluar');
        $bulan = Infaq::select(DB::raw("year (tanggal) as bulan"))
            ->groupBy(DB::raw("year(tanggal) "))
            ->pluck('bulan');
        // dd($bulan);



        return view('rekapitulasi.infaq', compact('kas', 'jumlah', 'total_masuk', 'total_keluar', 'bulan'));
    }
    public function cetaksemuainfaq()
    {
        $cetak = Infaq::paginate(10000);
        return view('rekapitulasi.cetakinfaq', compact('cetak'));
    }
    public function cetakinfaq($awal, $akhir)
    {
        // $cetak = Zakatmal::whereBetween('tanggal', [$awal, $akhir])->get();
        $cetak = Infaq::select("*")
            ->whereBetween('tanggal', [$awal, $akhir])->paginate(100);

        // dd("Tahun awal:" . $awal, "Tahun akhir" . $akhir);
        // dd($cetak);
        return view('rekapitulasi.cetakinfaq', compact('cetak'));
    }
}
