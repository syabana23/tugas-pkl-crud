<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class M_Sepatu extends Model
{
    use softDeletes;
    protected $table = "sepatu";
    protected $fillable = [
        'nama', 
        'harga_jual', 
        'harga_beli',
    ];
    protected $hidden;
}


