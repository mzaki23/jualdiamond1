<?php

namespace App\Http\Controllers;

use App\Models\Penjual;
use Illuminate\Routing\Controller as BaseController;


class Controller extends BaseController
{

    public function index()
    {
        return view('welcome');
    }
    public function show(Penjual $id)
    {
        return view('home', [
            "data" => $id
        ]);
    }
}
