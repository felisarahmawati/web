<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananDetail extends Model
{
    public function barang()
    {
        return $this->belongs('App\Barang', 'barang_id', 'id');
    }
    public function pesanan()
    {
        return $this->belongs('App\Pesanan', 'pesanan_id', 'id');
    }
}
