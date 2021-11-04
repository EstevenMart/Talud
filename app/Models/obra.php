<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class obra extends Model
{
    use HasFactory;

    protected $table ="obras";

    function users(){
        return $this->belongsTo(User::class);
    }
    function categorias(){
        return $this->belongsTo(categoria::class);
    }
    function clientes(){
        return $this->belongsTo(cliente::class);
    }

    function salidas(){
        return $this->hasMany(salida::class);
    }


}
