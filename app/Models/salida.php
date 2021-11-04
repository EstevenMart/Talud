<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class salida extends Model
{
    use HasFactory;

    protected $table ="materials";

    function materials(){
        return $this->belongsToMany(material::class,"salida_materials","material_id","salida_id");
    }

    function obras(){
        return $this->belongsTo(obra::class);
    }


}
