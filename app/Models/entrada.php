<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entrada extends Model
{
    use HasFactory;

    protected $table ="entradas";

    function proveedors(){
        return $this->belongsTo(proveedor::class);
    }

    function materials(){
        return $this->belongsToMany(material::class,"entrada_materials","material_id","entrada_id");
    }

}
