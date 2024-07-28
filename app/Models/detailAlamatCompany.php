<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailAlamatCompany extends Model
{
    use HasFactory;
    protected $table = 'detail_alamat_perusahaan';
    protected $primaryKey='id';

    protected $fillable = [
       'Alamat_detail',
       'provinsi',
       'kota_kabupaten',
       'kecamatan',
       'kelurahan',
       'kode_pos',
   
    ];
    

    public function usercompany(){
        return $this->belongsTo(userCompanyModels::class,'fkusercompany','id');
    }

}
