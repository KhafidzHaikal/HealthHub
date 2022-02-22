<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosa extends Model
{
    use HasFactory;

    protected $table = 'diagnosa';
    protected $guarded = ['id'];

    
    public function kategori(){
        return $this->belongsTo(kategori::class);
    }
}
