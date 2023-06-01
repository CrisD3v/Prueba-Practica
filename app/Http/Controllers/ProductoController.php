<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function listProductos($id){
        return view('Productos.Productos',compact('id'));
    }

    public function productoTienda($id)
    {
        $productos = Producto::where('tienda_id',$id)->get();
        return json_encode($productos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->except(['_token', '_method']);
        $validator = Validator::make(
            [
                'valor' => $request->valor
            ],
            [
                'valor' => 'numeric', // Validar que el campo "valor" sea numérico
            ]
        );
        if ($validator->fails()) {
            // La validación ha fallado
            $errors = $validator->errors();
        } else {
            if ($request->hasFile('imagen')) {
                $data['imagen'] = $request->file('imagen')->store('uploads', 'public');
            }
            Producto::insert($data);
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
