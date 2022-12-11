<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemilik extends Model
{
    protected $fillable = [
        'nama', 'alamat', 'jenis_kelamin', 'no_telepon'
    ];
    protected $table = 'pemiliks';
    protected $primarykey = 'id';
    public $timestamps = false;
    use HasFactory;
}
