<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'name', 'email', 'nama_kost', 'harga_per_bulan', 'photo', 'kost_id', 'user_id',
        'status_pembayaran'
    ];
    protected $table = 'bookings';
    protected $primarykey = 'id';
    public $timestamps = false;
    use HasFactory;
}
