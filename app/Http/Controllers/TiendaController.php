<?php

namespace App\Http\Controllers;

use App\Models\Tienda;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class TiendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //OBTENDREMOS TODOS LOS DATOS PARA UTILIZARLO EN EL FETCH DE JS Y CONSUMIRLOS.
        $tiendas = Tienda::get();

        return json_encode($tiendas);
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
        $fechaRegex = '/^\d{2}\/\d{2}\/\d{2}$/';

        if (!preg_match($fechaRegex, $request->fecha_apertura)) {
            // La validación ha fallado para el campo "fecha_apertura"
            $errors = "El campo 'fecha_apertura' debe tener el formato dd/mm/YYYY.";
            return redirect('/')->with('errors', $errors);
        }

        // La validación ha sido exitosa
        $data = $request->except(['_token', '_method']);
        Tienda::insert($data);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Tienda $tienda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tienda $tienda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tienda $tienda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tienda $tienda)
    {
        //
    }
}
