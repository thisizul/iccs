<?php

namespace App\Http\Controllers;

use App\Models\Fitrahmasuk;
use App\Models\Zakatmal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RekapitulasiZakatController extends Controller
{
    public function indexrekap()
    {
        $fitrah = Fitrahmasuk::with(['hargaberas'])->paginate(25);
        $mall = Zakatmal::paginate(5);
        $fitrahmasukuang = Fitrahmasuk::select(DB::raw("CAST(SUM(jumlahuang)as double)as total_masuk"))
            ->groupBy(DB::raw("year(tanggal)"))
            ->Pluck('total_masuk');
        $x = Fitrahmasuk::select(DB::raw("CAST(SUM(jumlahberas)as double)as total_masuk"))
            ->groupBy(DB::raw("year(tanggal)"))
            ->Pluck('total_masuk');
        $mallmasuk = Zakatmal::select(DB::raw("CAST(SUM(masuk)as double)as total_masuk"))
            ->groupBy(DB::raw("year(tanggal)"))
            ->Pluck('total_masuk');
        $bulan = Fitrahmasuk::select(DB::raw("year (tanggal) as bulan"))
            ->groupBy(DB::raw("year(tanggal) "))
            ->pluck('bulan');
        // dd($mallmasuk);
        return view('rekapitulasi.zakat', compact('fitrahmasukuang', 'x', 'bulan', 'fitrah', 'mall', 'mallmasuk'));
    }

    public function indexmaal()
    {
        $mall = Zakatmal::paginate(5);
        $mallmasuk = Zakatmal::select(DB::raw("CAST(SUM(masuk)as double)as total_masuk"))
            ->groupBy(DB::raw("year(tanggal)"))
            ->Pluck('total_masuk');
        $bulan = Fitrahmasuk::select(DB::raw("year (tanggal) as bulan"))
            ->groupBy(DB::raw("year(tanggal) "))
            ->pluck('bulan');
        // dd($mallmasuk);
        return view('rekapitulasi.zakatmaal', compact('bulan',  'mall', 'mallmasuk'));
    }
    public function cetak($awal, $akhir)
    {
        // $cetak = Zakatmal::whereBetween('tanggal', [$awal, $akhir])->get();
        $cetak = Fitrahmasuk::select("*")
            ->whereBetween('tanggal', [$awal, $akhir])->paginate(100);

        // dd("Tahun awal:" . $awal, "Tahun akhir" . $akhir);
        // dd($cetak);
        return view('rekapitulasi.cetakzakatfitrah', compact('cetak'));
    }
    public function cetaksemua()
    {
        $cetak = Fitrahmasuk::paginate(10000);
        return view('rekapitulasi.cetakzakatfitrah', compact('cetak'));
    }
    public function cetakmaal($awal, $akhir)
    {
        // $cetak = Zakatmal::whereBetween('tanggal', [$awal, $akhir])->get();
        $cetak = Zakatmal::select("*")
            ->whereBetween('tanggal', [$awal, $akhir])->paginate(100);

        // dd("Tahun awal:" . $awal, "Tahun akhir" . $akhir);
        // dd($cetak);
        return view('rekapitulasi.cetakzakatmaal', compact('cetak'));
    }
    public function cetaksemuamaal()
    {
        $cetak = Zakatmal::paginate(10000);
        return view('rekapitulasi.cetakzakatmaal', compact('cetak'));
    }
}
