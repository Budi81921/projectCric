<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lowongan extends Model
{
    protected $table = 'lowongankerja';
    protected $primaryKey = 'id';
    public function detailLowongan():HasMany{
        return $this->hasMany(detail_lowongan::class,'fklowongankerja','id');
    }
    public function company()
    {
        return $this->belongsTo(userCompanyModels::class);
    }
}
