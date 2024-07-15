<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class userCompanyModels extends Model
{
    use HasFactory;
    protected $table = 'usercompany';
    protected $primaryKey='id';
    protected $fillable = [
        'foto_profil_company',
        'deskripsi_perusahaan',
        'nomor_telepon',
        'tahun_berdiri',
        'url'
    ];
    public function user(){
        return $this->belongsTo(User::class,'fkusercompany','id');
    }
    public function lowongan():HasMany{
        return $this->hasMany(Lowongan::class,'fkusercompany','id');
    }
    public function detailalamat():HasOne{
        return $this->hasOne(detailAlamatCompany::class,'fkusercompany','id');
    }

}
