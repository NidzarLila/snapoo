<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $fillable = ['code_transaksi', 'total_qty', 'total_harga', 'nama_customer', 'alamat', 'no_tlp', 'status'];

    
    
}
