<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;

    public function grupoPromotorias()
    {
        return $this->hasMany(GrupoPromotoria::class);
    }
}
