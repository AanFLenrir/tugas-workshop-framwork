<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $primaryKey = 'idbuku';
    protected $table = 'buku';
    
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'idkategori');
    }

}
