<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = Persona::all();
        return view('welcome',['personas'=>$personas]);
        // return view('administrador.usuarios.lista_usuarios',['usuarios'=>$usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('new_persona');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $persona = new Persona();
        $persona->nombre = $request->input("nombre");
        $persona->apellidoP = $request->input("apellidoP");
        $persona->apellidoM = $request->input("apellidoM");

        $persona->save();

        $personas = Persona::all();
        return view('welcome',['personas'=>$personas]);
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
        $persona = Persona::findOrFail($id);
        return view('update_persona',['persona'=>$persona]);
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
        $persona = Persona::findOrFail($id);
        $persona->nombre = $request->input("nombre");
        $persona->apellidoP = $request->input("apellidoP");
        $persona->apellidoM = $request->input("apellidoM");

        $persona->save();

        $personas = Persona::all();
        return view('welcome',['personas'=>$personas]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$persona = Persona::destroy($request->id);
        $persona = Persona::findOrFail($id);
        $persona->delete();

        $personas = Persona::all();
        return view('welcome',['personas'=>$personas]);
    }
}
