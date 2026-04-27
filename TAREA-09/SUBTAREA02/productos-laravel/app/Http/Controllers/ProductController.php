<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Muestra el listado de productos (solo ADMIN).
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Vista pública para CLIENTES (solo lectura).
     */
    public function publicIndex()
    {
        $products = Product::paginate(10);
        return view('products.public', compact('products'));
    }

    /**
     * Muestra el formulario para crear un nuevo producto (ADMIN).
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Guarda un nuevo producto en la base de datos (ADMIN).
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:200',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
        ]);

        Product::create($request->all());

        return redirect()->route('products.index')
                         ->with('success', 'Producto creado correctamente.');
    }

    /**
     * Muestra los detalles de un producto (ADMIN).
     */
    public function show(Product $product)
    {
        return view('products.show', ['product' => $product]);
    }

    /**
     * Muestra el formulario para editar un producto (ADMIN).
     */
    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }

    /**
     * Actualiza un producto existente (ADMIN).
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'nombre' => 'required|string|max:200',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')
                         ->with('success', 'Producto actualizado correctamente.');
    }

    /**
     * Elimina un producto de la base de datos (ADMIN).
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
                         ->with('success', 'Producto eliminado correctamente.');
    }
}
