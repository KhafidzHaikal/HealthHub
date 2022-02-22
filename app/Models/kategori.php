<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;

    public $table = 'kategori';

    public function diagnosa(){
        return $this->hasMany(Diagnosa::class);
    }

    public function Apotek(){
        return $this->hasMany(Apotek::class);
    }
}
