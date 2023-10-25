<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cliente;

class ClienteController extends Controller
{

    public function index(Request $request)
    {
        $criterios=$request->criterio;
        $buscar=$request->buscar;
        if($buscar==''){
        $clientes=cliente::all();
    }
    else{
        $clientes = cliente::where( $criterios , 'like', '%' . $buscar . '%')->get();
    }
        return view('cliente.index',compact('clientes'));
    }

    public function store(Request $request)
    {
        $clientes=new cliente;
        $clientes->nombre=$request->input('nombre');
        $clientes->apellidos=$request->input('apellidos');
        $clientes->empresa=$request->input('empresa');
        $clientes->telefono=$request->input('telefono');
        $clientes->direccion=$request->input('direccion');
        $clientes->save();
        return redirect()->back();
    }


    public function show(string $id)
    {
        //
    }

  
    public function edit($id)
    {
  
    }


    public function update(Request $request, $id)
    {
        $clientes=cliente::find($id);
        $clientes->nombre=$request->input('nombre');
        $clientes->apellidos=$request->input('apellidos');
        $clientes->empresa=$request->input('empresa');
        $clientes->telefono=$request->input('telefono');
        $clientes->direccion=$request->input('direccion');
        $clientes->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $clientes=cliente::find($id);
        $clientes->delete();
        return redirect()->back();
    }
}
