<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipo_material extends Model
{
    use HasFactory;

    protected $table ="tipo_materials";

    function materials(){
        return $this->hasMany(material::class);
    }



}
