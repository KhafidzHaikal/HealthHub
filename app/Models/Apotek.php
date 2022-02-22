<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apotek extends Model
{
    use HasFactory;

    protected $table = 'apotek';

    protected $fillable = [
        'nama_apotek', 'alamat_apotek', 'no_telp_apotek', 'obat', 'kategori', 'harga'
    ];

    protected $guarded = ['id'];

}
