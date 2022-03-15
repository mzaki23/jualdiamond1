<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penjual extends Model
{

    // use HasFactory;

    protected $table = 'penjual';

    // private static $penjuall = [
    //     [
    //         "id" => "1",
    //         "nama" => "ibnu",
    //         "notelp" => "0812111"
    //     ],
    //     [
    //         "id" => "2",
    //         "nama" => "reza",
    //         "notelp" => "0812123"
    //     ],
    //     [
    //         "id" => "3",
    //         "nama" => "ibnu",
    //         "notelp" => "0812145"
    //     ],
    // ];

    // public static function all()
    // {
    //     return self::$penjuall;
    // }

    protected $fillable = ['id', 'nama', 'notelp'];
    // protected $guarded = ['id'];
}
