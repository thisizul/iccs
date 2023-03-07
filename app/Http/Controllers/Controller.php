<?php

namespace App\Http\Controllers;

use App\Models\Infaq;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function infoinfaq()
    {
        $kas = Infaq::latest()->Paginate(10);
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
        return view('infaq', compact('kas', 'jumlah', 'total_masuk', 'total_keluar', 'bulan'));
    }
    public function infozakat()
    {
        return view('zakat');
    }
    public function indexview()
    {
        $count = Infaq::select('masuk')->sum('masuk');
        $z1 = Infaq::where('tipe', '=', 'Infaq Jumat')->sum('keluar');
        $z2 = Infaq::where('tipe', '=', 'Donatur')->sum('keluar');
        $z3 = Infaq::where('tipe', '=', 'Infaq Harian')->sum('keluar');
        $a1 = Infaq::where('tipe', '=', 'Infaq Jumat')->sum('masuk');
        $a2 = Infaq::where('tipe', '=', 'Infaq Harian')->sum('masuk');
        $a3 = Infaq::where('tipe', '=', 'Donatur')->sum('masuk');
        $countx = ($a1 - $z1);
        $county = ($a2 - $z3);
        $countz = ($a3 - $z2);
        $count1 = Infaq::select('keluar')->sum('keluar');
        $a = Infaq::select('masuk')->sum('masuk');
        $b = Infaq::select('keluar')->sum('keluar');
        $count2 = ($a - $b);
        return view('index', compact('count', 'count1', 'count2', 'countx', 'county', 'countz', 'z1', 'z2', 'z3', 'a1', 'a2', 'a3'));
    }
}
