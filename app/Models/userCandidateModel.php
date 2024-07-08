<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class userCandidateModel extends Model
{
    use HasFactory;
    protected $table = 'usercandidate';
    protected $primaryKey='id';
    protected $fillable = [
        'fotoProfilCandidate',
        'tanggal_lahir',
        'nomor_handphone',
        'alamat',
        'gender',
        'universitas',
        'gelar',
        'deskripsi',
        'cv',
        'portofolio'
    ];

    public function users(){
        return $this->belongsTo(User::class,'fkidusercandidate','id');
    }
    public function detailLowongan():HasMany{
        return $this->hasMany(detail_lowongan::class,'fkusercandidate','id');
    }

}
