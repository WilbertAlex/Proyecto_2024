<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        // Aquí puedes agregar la lógica para la búsqueda o simplemente retornar la vista.
        return view('components.outline.search');
    }
}
