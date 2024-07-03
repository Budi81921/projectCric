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
    public function users(){
        return $this->belongsTo(User::class,'fkidusercandidate','id');
    }
    public function lowongan():HasMany{
        return $this->hasMany(Lowongan::class,'fkidusercompany','id');
    }
    public function detailalamat():HasOne{
        return $this->hasOne(Lowongan::class,'fkidusercandidate','id');
    }

}
