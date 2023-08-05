<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    //
    public function getDatos() {

       
        $USUARIOS = Usuario::paginate();
        return response()->json($USUARIOS->items());
    }

}
