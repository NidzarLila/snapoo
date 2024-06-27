<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    protected $table = "shift";
    protected $fillable = ['id_shift','nama'];
    protected $primaryKey = 'id_shift';
    use HasFactory;

}
