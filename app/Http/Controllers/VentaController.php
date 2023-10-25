<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\venta;
use App\Models\cliente;


class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ventas=venta::all();
        $clientes=cliente::all();
        return view('venta.index',compact('ventas', 'clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
{
    $request->validate([
        'fecha' => 'required|date',
    ]);

    $ventas = new Venta;
    $ventas->id_cliente = $request->input('id_cliente');
    $ventas->fecha = $request->input('fecha');
    $ventas->save();
    return redirect()->back();
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $ventas=venta::find($id);
        $ventas->id_cliente=$request->input('id_cliente');
        $ventas->fecha=$request->input('fecha');
        $ventas->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ventas=venta::find($id);
        $ventas->delete();
        return redirect()->back();
    
    }
}
