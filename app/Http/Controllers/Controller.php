<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Tienda;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function viewRegisterData()
    {
        $tiendas = Tienda::select('nombre', 'id')->get();
        return view('home.homeRegister', compact('tiendas'));
    }

    

}
