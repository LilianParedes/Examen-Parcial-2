<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;

class ProductoController extends Controller // Asegúrate de extender de la clase Controller
{
    public function index($categoriaId)
{
    // Obtener la categoría
    $categoria = Categoria::findOrFail($categoriaId);

    // Obtener los productos de la categoría
    $productos = Producto::where('categoria_id', $categoria->id)->get();

    // Pasar las variables a la vista
    return view('productos.index', compact('categoria', 'productos'));
}


    public function show($id)
{
    // Obtener el producto por ID, esto lanzará una excepción si no se encuentra
    $producto = Producto::findOrFail($id);
    
    // Pasar el producto a la vista
    return view('productos.show', compact('producto'));
}


}
