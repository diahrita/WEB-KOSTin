<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKost extends Model
{
    protected $fillable = [
        'nama_kost', 'jenis_kost', 'deskripsi', 'tahun_kost_dibangun', 'peraturan_kost',
        'fasilitas_kost', 'ukuran_kamar', 'jumlah_semua_kamar', 'jumlah_kamar_tersedia', 'harga_per_bulan', 'alamat', 'photo'
    ];
    protected $table = 'data_kosts';
    protected $primarykey = 'id';
    public $timestamps = false;
    use HasFactory;
}
