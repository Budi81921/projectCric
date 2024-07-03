<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailAlamatCompany extends Model
{
    use HasFactory;
    protected $table = 'detail_alamat_perusahaan';
    protected $primaryKey='id';

    public function users(){
        return $this->belongsTo(User::class,'fkidusercompany','id');
    }

}
