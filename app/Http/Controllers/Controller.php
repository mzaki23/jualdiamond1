<?php

namespace App\Http\Controllers;

use App\Models\Penjual;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{

    public function index()
    {
        return view('pilihmerchant', [
            "data" => Penjual::all()
        ]);
    }

    public function qrcode($id)
    {

        $qrcode = Penjual::findorfail($id);
        $notelp = collect(['https://jualdiamond1.vercel.app', $qrcode->notelp])->join('/');
        // dd("$notelp");
        return view('qrcodenya', [
            "link" => $notelp,
            "nama" => $qrcode->nama
        ]);
    }


    public function show(Penjual $id)
    {
        return view('home', [
            "data" => $id
        ]);
    }
}
