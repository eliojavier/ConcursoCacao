<?php

namespace App\Http\Controllers;

use App\Ingrediente;
use App\Receta;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'modalidad' => 'required',
        ]);

        $receta = new Receta();
        $receta->nombre = $request->nombre;
        $receta->modalidad = $request->modalidad;
        $receta->user_id = Auth::user()->id;
        $receta->save();
        $receta_id = $receta->id;

        $lista_ingredientes = explode(".", $request->ingredientes);
        for ($i = 0; $i < count($lista_ingredientes) - 1; $i++) {
            $ingrediente = new Ingrediente();
            $ingrediente->nombre = $lista_ingredientes[$i];
            $ingrediente->save();
            $ingrediente_id = $ingrediente->id;

            DB::table('ingrediente_receta')->insert(
                ['ingrediente_id' => $ingrediente_id,
                    'receta_id' => $receta_id]
            );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $receta = Receta::findOrFail($id);
        $lista_ingredientes = $receta->ingredientes;

        foreach ($lista_ingredientes as $ingrediente){
            
        }

        $ingredientes = $lista_ingredientes->nombre;
        echo $ingredientes;
        //return view ('recetas/edit', compact('receta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $receta = Receta::findOrFail($id);
        $receta->update($request->all());
        return redirect ('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
