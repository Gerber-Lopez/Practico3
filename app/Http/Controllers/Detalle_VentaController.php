<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\venta;
use App\Models\producto;
use App\Models\detalle_venta;
use App\Models\cliente;

class Detalle_ventaController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detalle_ventas = Detalle_venta::all();
        $ventas = Venta::all();
        $productos = Producto::all();
        $clientes = cliente::all();

        return view('detalle_venta.index', compact('detalle_ventas', 'productos', 'ventas','clientes'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {          
        $validatedData = $request->validate([
            'id_venta' => 'required',
            'id_producto' => 'required',
            'cantidad' => 'required|numeric|between:1,10',
            'preciov' => 'required|numeric',
        ], [
            'id_venta.required' => 'El campo ID de venta es obligatorio.',
            'id_producto.required' => 'El campo ID de producto es obligatorio.',
            'cantidad.required' => 'El campo Cantidad es obligatorio.',
            'cantidad.between' => 'La cantidad debe ser un número del 1 al 10.',
            'cantidad.numeric' => 'La cantidad debe ser un valor numérico.',
            'preciov.required' => 'El campo Precio es obligatorio.',
            'preciov.numeric' => 'El precio debe ser un valor numérico.',
        ]);
    
        $detalle_ventas = new detalle_venta;
        $detalle_ventas->id_venta = $validatedData['id_venta'];
        $detalle_ventas->id_producto = $validatedData['id_producto'];
        $detalle_ventas->preciov = $validatedData['preciov'];
        $detalle_ventas->cantidad = $validatedData['cantidad'];
        $detalle_ventas->save();
    
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
    $request->validate([
        'id_venta' => 'required',
        'id_producto' => 'required',
        'preciov' => 'required|numeric',
        'cantidad' => 'required|integer|between:1,10',
    ], [
        'cantidad.between' => 'La cantidad debe ser un número entre 1 y 10.',
        'cantidad.integer' => 'La cantidad debe ser un número entero.',
        'preciov.numeric' => 'El precio debe ser un valor numérico.',
        'required' => 'El campo :attribute es requerido.',
    ]);

    $detalle_ventas = detalle_venta::find($id);
    $detalle_ventas->id_venta = $request->input('id_venta');
    $detalle_ventas->id_producto = $request->input('id_producto');
    $detalle_ventas->preciov = $request->input('preciov');
    $detalle_ventas->cantidad = $request->input('cantidad');
    $detalle_ventas->update();
    return redirect()->back();
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $detalle_ventas=detalle_venta::find($id);
        $detalle_ventas->delete();
        return redirect()->back();
    
    }
}
