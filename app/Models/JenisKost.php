<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisKost extends Model
{
    protected $fillable = [
        'jenis_kost'
    ];
    protected $table = 'jenis_kosts';
    protected $primarykey = 'id';
    public $timestamps = false;
    use HasFactory;
}
