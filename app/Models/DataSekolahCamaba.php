<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataSekolahCamaba extends Model
{
    protected $table = 'data_sekolah_camaba';

    // Primary key adalah foreign key
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'int';

    protected $fillable = [
        'id',
        'nama_sekolah',
        'jurusan',
        'no_ijazah',
        'alamat_sekolah',
        'nomor_telepon'
    ];

    // Relationship ke User model
    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
