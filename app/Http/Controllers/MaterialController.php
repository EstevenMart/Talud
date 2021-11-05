<?php

namespace App\Http\Controllers;

use App\Models\marca;
use App\Models\material;
use App\Models\tipo_material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    /* function __construct()
    {
        $this->middleware('auth');
    } */

    function show(){
        $materialList = material::all();
        return view('material/list',['list'=>$materialList]);
    }

    function delete($id){
        //material::destroy($id);

        $material = material::findOrFail($id);
        $material->delete();
        return redirect('/materials')->with('message' , 'El material fue borrado');
    }

    function form ($id = null){
        $material = new material();
        $tipo_materials = tipo_material::orderBY('nombreMaterial')->get();
        $marcas = marca::orderBY('nombreMarca')->get();
        $parte_cuerpo = ParteCuerpo::all()->pluck('denominacionParteCuerpo', 'id');



        if ($id != null ) {
            $material = material::findOrFail($id);
        }
        return view('material/form', ['material' => $material ,'tipo_materials' => $tipo_materials ,'marcas' => $marcas ]);
    }

    function save(Request $request){

        $request->validate([
            'peso' => 'required|max:50',
            'tamano' => 'required|max:50',
            'cantidad' => 'required|numeric',
            'estado' => 'required|max:50',
            'tipo_material_id' => 'required|max:50',
            'marca_id' => 'required|max:50'


        ]);

        $material = new material();
        $message = 'Se ha creado un nuevo material';

        if (intval($request->id)>0){
            $material = material::findOrFail($request->id);
            $message = 'Se ha Editado un material';
        }

        $material->peso = $request->peso;
        $material->tamano = $request->tamano;
        $material->cantidad = $request->cantidad;
        $material->estado = $request->estado;
        $material->tipo_material_id = $request->nombreMaterial;
        $material->marca_id = $request->nombreMarca;

        $material->save();

        $parte_cuerpo = $request -> input("denominacionParteCuerpo", []);
        $accidente->partes_cuerpo()->sync($parte_cuerpo);

        return redirect('/materials')->with('messa' , $message);

    }
}
