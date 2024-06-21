<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoriaController extends Controller
{
    public function index(){
        $categorias=categoria::all();
        return response()->json($categorias,Response::HTTP_OK);
    }

    public function store(Request $request){
        $category=categoria::create($request->all());
        return response()->json([
            'message'=>"Registro creado satisfactoriamente",
            'category'=>$category
        ],Response::HTTP_CREATED);
    }


    public function update(Request $request,$category){
        $category=categoria::find($category);
        $category->update($request->only('nombre','descripción'));
        return response()->json([
            'message'=>"Registro actualizado satisfactoriamente",
            'category'=>$category
        ],Response::HTTP_CREATED);
    }

    public function destroy($category){
        $category=categoria::find($category);
        $category->delete();
        return response()->json([
            'message'=>"Registro eliminado satisfactoriamente"
        ],Response::HTTP_OK);
    }
}
