<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
    use HasFactory;

    protected $table ="proveedors";

    function entradas(){
        return $this->hasMany(entrada::class);
    }

    function materials(){
        return $this->belongsToMany(material::class,"material_proveedors","material_id","proveedores_id");
    }

}
