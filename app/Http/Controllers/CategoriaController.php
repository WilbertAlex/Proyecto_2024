<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoriaController extends Controller
{
    use ApiResponser;

    public function index()
    {
        $categorias = categoria::all();
        return $this->successResponse($categorias);
    }

    public function store(Request $request)
    {
        // Reglas de validación sin caracteres especiales
        $rules = [
            'nombre' => 'required|max:100',
            'descripción' => 'required|max:250' // Usa 'descripcion' sin tilde
        ];

        // Validar la solicitud
        $validatedData = $request->validate($rules);

        // Crear una nueva categoría usando los datos validados
        $categoria = categoria::create($validatedData);

        // Devolver una respuesta de éxito con la nueva categoría y el código de estado HTTP 201 (CREATED)
        return response()->json([
            'success' => true,
            'data' => $categoria
        ], Response::HTTP_CREATED);
    }


    public function update(Request $request, $categoriaId)
    {
        $rules = [
            'nombre' => 'required|max:100',
            'descripción' => 'required|max:250'
        ];
        $validatedData = $request->validate($rules);
        $categoria = categoria::findOrFail($categoriaId);
        $categoria->fill($validatedData);
        if ($categoria->isClean()) {
            return response()->json([
                'success' => false,
                'message' => 'Al menos un campo debe cambiar'
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        $categoria->save();
        return response()->json([
            'success' => true,
            'data' => $categoria
        ], Response::HTTP_OK);
    }

    public function destroy($categoria)
    {
        $category = categoria::findOrFail($categoria);
        $category->delete();
        return $this->successResponse($categoria);
    }
}
