<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataAyah extends Model
{
    protected $table = 'data_ayah';

    // Primary key adalah foreign key
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'int';

    protected $fillable = [
        'id',
        'nama_ayah',
        'pekerjaan',
        'agama',
        'alamat',
        'kecamatan',
        'desa',
        'nomor_rumah',
        'no_telp'
    ];

    // Relationship ke User model
    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
