<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camaba extends Model
{
    use HasFactory;

    protected $table = 'camaba';
    
    // Primary key is the 'id' column which references users.id
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'int';
    
    protected $fillable = [
        'id',
        'no_pendaftaran',
        'nama_lengkap',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'agama',
        'alamat',
        'kelurahan',
        'kecamatan',
        'kabupaten_kota',
        'provinsi',
        'nomor_rumah',
        'nomor_telp_hp'
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
        'id' => 'integer'
    ];

    // Relationship ke User model
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relationship ke DataSekolahCamaba
    public function dataSekolah()
    {
        return $this->hasOne(DataSekolahCamaba::class, 'id', 'user_id');
    }

    // Relationship ke DataAyah
    public function dataAyah()
    {
        return $this->hasOne(DataAyah::class, 'id', 'user_id');
    }

    // Relationship ke DataIbu
    public function dataIbu()
    {
        return $this->hasOne(DataIbu::class, 'id', 'user_id');
    }

    // Accessor untuk jenis kelamin lengkap
    public function getJenisKelaminLengkapAttribute()
    {
        return $this->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan';
    }

    // Accessor untuk alamat lengkap
    public function getAlamatLengkapAttribute()
    {
        $alamat = $this->alamat;
        if ($this->nomor_rumah) {
            $alamat .= ' No. ' . $this->nomor_rumah;
        }
        $alamat .= ', ' . $this->kelurahan . ', ' . $this->kecamatan . ', ' . $this->kabupaten_kota . ', ' . $this->provinsi;
        
        return $alamat;
    }

    // Scope untuk pencarian
    public function scopeSearch($query, $keyword)
    {
        return $query->where('nama_lengkap', 'like', "%{$keyword}%")
                    ->orWhere('no_pendaftaran', $keyword)
                    ->orWhere('nomor_telp_hp', 'like', "%{$keyword}%")
                    ->orWhere('tempat_lahir', 'like', "%{$keyword}%");
    }
}