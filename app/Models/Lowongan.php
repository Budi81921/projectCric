<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lowongan extends Model
{
    protected $table = 'lowongankerja';
    protected $primaryKey = 'id';
    protected $fillable=[
        'title_lowongan',
        'deskripsiPerusahaan',
        'tipePekerjaan',
        'fkKategoriPekerjaan',
        'kualifikasi',
        'minimal_gaji',
        'maximal_gaji',
        'lokasi',
        'pendidikan',
        'pengalaman'
    ];

    public function detailLowongan(): HasMany {
        return $this->hasMany(detail_lowongan::class, 'fklowongankerja', 'id');
    }

    public function company()
    {
        return $this->belongsTo(userCompanyModels::class,'fkusercompany','id');
    }
    
    public function kategoripekerjaan(){
        return $this->belongsTo(kategoriPekeerjaanmodels::class,'fkKategoriPekerjaan','id');
    }
}
