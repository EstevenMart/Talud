<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class material extends Model
{
    use HasFactory;

    protected $table ="materials";

    function entradas(){
        return $this->belongsToMany(entrada::class,"entrada_materials","entrada_id","material_id");
    }

    function marcas(){
        return $this->belongsTo(marca::class);
    }
    function tipo_materials(){
        return $this->belongsTo(tipo_material::class);
    }

    function salidas(){
        return $this->belongsToMany(salida::class,"salida_materials","salida_id","material_id");
    }

    function proveedors(){
        return $this->belongsToMany(proveedor::class,"material_proveedors","proveedores_id","material_id");
    }


}
