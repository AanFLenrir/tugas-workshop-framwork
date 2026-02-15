<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $primaryKey = 'idkategori';
    protected $table = 'kategori';
    
    public function buku()
    {
        return $this->hasMany(Buku::class, 'idkategori');
    }

}
