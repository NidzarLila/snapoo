<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;
    protected $table = 'reservasi';
    protected $fillable = ['id_reservasi','user_id','order_id','nama','email','no_hp','alamat','tanggal','username','waktu','subtotal','nama_paket','status'];
    protected $primaryKey = "id_reservasi";

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
