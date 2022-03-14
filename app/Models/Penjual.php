<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Penjual extends Model
{

    use HasFactory;
    protected $table = 'penjual';

    protected $fillable = [
        'id',
        'namapenjual',
        'notelp',
        'updated_at',
        'created_at'
    ];
    // protected $guarded = ['id'];
}
