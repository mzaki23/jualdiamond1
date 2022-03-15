<?php

namespace App\Http\Controllers;

use App\Models\Penjual;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Schema;
use Illuminate\Routing\Controller as BaseController;


class Controller extends BaseController
{

    public function show($id)
    {
        $penjual = Penjual::findorfail($id);
        // dd($penjual);
        return view('home', [
            "data" => $penjual
        ]);
    }
}
