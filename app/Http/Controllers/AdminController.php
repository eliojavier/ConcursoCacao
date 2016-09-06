<?php

namespace App\Http\Controllers;

use App\Lugar;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    public function index()
    {
        return view ('admin/index');
    }

    public function participantes()
    {
        $participantes = User::all();
//        foreach ($participantes as $participante) {
//            echo ($participante->lugar->nombre);
//            echo ($participante->academia->nombre);
//        }

        return view ('admin/usuarios/participantes', compact('participantes'));
    }
}
