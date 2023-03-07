<?php

namespace App\Http\Controllers;

use App\Models\Ngaji;
use App\Models\Santri;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SantriController extends Controller
{
    public function indexngajisantri()
    {
        $ngaji = Ngaji::all();



        return view('santri.indexsantri', compact('ngaji'));
    }
}
