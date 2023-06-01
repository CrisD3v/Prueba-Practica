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
        //
        $validator = Validator::make(
            $request->all(),
            [
                'fecha_apertura' => 'date_format:d/m/Y'
            ]
        );

        if ($validator->fails()) {
            // La validación ha fallado
            dd($request);
            $errors = $validator->errors();
        } else {
            $data = $request->except(['_token', '_method']);
            Tienda::insert($data);
        }



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
