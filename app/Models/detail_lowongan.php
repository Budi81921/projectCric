<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_lowongan extends Model
{
    use HasFactory;
    protected $table='detail_lowongan';
    protected $primaryKey='id';

    protected $fillable = [
        'status'
    ];

    public function userCandidate(){
        return $this->belongsTo(userCandidateModel::class,'fkusercandidate','id');
    }
    public function lowongan(){
        return $this->belongsTo(Lowongan::class,'fklowongankerja','id');
    }
}
