<?php

namespace App\Http\Controllers;

use App\Http\Middleware\MayorEdad;

//tamara le añadimos el modelo User
use App\User;
use Illuminate\Http\Request;


//controlador tamara

class ComprobarEdad extends Controller
{
    //tamara
    function __construct()
    {

        $this->middleware('tamara');
    }
//tamara >añadimos usuario y le pasamos los datos
    function comprobarEdad(Request $request){

        $user = new User;

        $user -> name = $request->name;
        $user -> edad = $request->edad;

        $user -> save();

        return (view('mayor'));
    }
}
