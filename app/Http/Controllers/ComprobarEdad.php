<?php

namespace App\Http\Controllers;

use App\Http\Middleware\MayorEdad;
use App\User;
use Illuminate\Http\Request;

class ComprobarEdad extends Controller
{
    function __construct()
    {

        $this->middleware('tamara');
    }

    function comprobarEdad(Request $request){

        $user = new User;

        $user -> name = $request->name;
        $user -> edad = $request->edad;

        $user -> save();

        return (view('mayor'));
    }
}
