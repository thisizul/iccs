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

        $user_name = Auth::user()->id;

        $ngaji = Ngaji::orderByRaw("santri_id = ':id' ASC",)
            ->groupBy('santri_id')
            ->paginate(15);
        return view('santri.indexsantri', compact('ngaji'));
    }
}
