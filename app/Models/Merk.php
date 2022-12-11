<?php

namespace App\Models;

use App\Models\Produk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Merk extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function produks(){
        return $this->hasMany(Produk::class);
    }
}
