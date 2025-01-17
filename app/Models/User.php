<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';
    protected $primaryKey='id';

    protected $fillable = [
        'nama_lengkap',
        'email',
        'password',
        'role'
    ];
    public function candidate():HasOne{
        return $this->hasOne(userCandidateModel::class,"fkidusercandidate","id");
    }
    public function company():HasOne{
        return $this->hasOne(userCompanyModels::class,"fkusercompany","id");
    }
   
}
