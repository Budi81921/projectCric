<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class kategoriPekeerjaanmodels extends Model
{
    use HasFactory;
    protected $table="kategoripekerjaan";
    protected $primaryKey="id";

    public function lowongan(): HasMany{
        return $this->HasMany(Lowongan::class,'fkKategoriPekerjaan','id');
    }
}
