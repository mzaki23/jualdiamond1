<?php

namespace App\Http\Controllers;

use App\Models\Penjual;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;


class Controller extends BaseController
{
    public function index()
    {
        // \DB::connection()->getPdo();
        // $db_connected = \DB::connection()->getDatabaseName();
        // $penjual = Penjual::all();
        dd(Penjual::all());
        try {
            // \DB::connection()->getPdo();

            $db_connected = \DB::connection()->getDatabaseName();
            if (Schema::hasTable('penjual'))
                $penjual = Penjual::all();
            else
                $penjual = [];
        } catch (\Exception $e) {
            $db_connected = false;
            $penjual = [];
        }

        return view('test', compact('penjual', 'db_connected'));
    }
}
