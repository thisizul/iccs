<?php

namespace App\Http\Controllers;

use App\Models\Jamaah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RekapitulasiJamaahController extends Controller
{
    public function indexrekap()
    {
        $jamaah = Jamaah::paginate(10);
        $a = Jamaah::all()->count();
        $b = Jamaah::select('jumlahjiwa')->sum('jumlahjiwa');
        $c = Jamaah::where("golongan", "mampu")->count();
        $d = Jamaah::where("golongan", "kurang mampu")->count();
        $xc = Jamaah::where("golongan", "mampu")->sum("jumlahjiwa");
        $xd = Jamaah::where("golongan", "Kurang Mampu")->sum("jumlahjiwa");

        // dd($x);


        return view('rekapitulasi.jamaah', compact('c', 'd', 'a', 'b', 'xc', 'xd', 'jamaah'));
    }
}
