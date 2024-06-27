<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = 'pelanggan';
    protected $primaryKey = 'id_pelanggan';
    protected $fillable = ['id_pelanggan','nama','email','no_hp','alamat','tanggal','waktu','subtotal','nama_paket','status','reservasi_id','shift_id','tanggal','jam','nama','nama_paket','peerson','basic_frame','special_frame','instax','projextor','csutom_image','a4','pett','lover_flower','keterangan'];
}
