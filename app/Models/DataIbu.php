<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataIbu extends Model
{
    protected $table = 'data_ibu';

    // Primary key adalah foreign key
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'int';

    protected $fillable = [
        'id',
        'nama_ibu',
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
