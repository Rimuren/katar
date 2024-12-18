<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    use HasFactory;

    protected $table = 'penjualan';

    protected $fillable = [
        'idtransaksi', 'idbarang', 'quantity', 'totalHarga'
    ];

    public function transaksi()
    {
        return $this->belongsTo(transaksi::class, 'idtransaksi');
    }

    public function barang()
    {
        return $this->belongsTo(barang::class, 'idbarang');
    }
}
