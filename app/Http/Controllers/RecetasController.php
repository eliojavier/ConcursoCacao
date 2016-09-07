<?php

namespace App\Http\Controllers;

use App\Ingrediente;
use App\Receta;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class RecetasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recetas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nombre' => 'required',
            'modalidad' => 'required',
        ]);

        $lista_ingredientes = explode(".", $request->ingredientes);
        for ($i=0; $i<count($lista_ingredientes) - 1; $i++)
        {
            $ingrediente = new Ingrediente();
            $ingrediente->nombre = $lista_ingredientes[$i];
            $ingrediente->save();
            $lastInsertId = $ingrediente->id;
            
        }


//        $receta = new Receta();
//        $receta->nombre = $request->nombre;
//        $receta->modalidad = $request->modalidad;
//        $receta->user_id = Auth::user()->id;
//
//
//
//        $receta->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
