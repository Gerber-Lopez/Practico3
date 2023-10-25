<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto;
use App\Models\categoria;


class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $buscar=$request->buscar;
        if($buscar==''){
    $productos = Producto::all();
    $categorias = Categoria::all();
    }else{
        $productos=producto::where( 'descripcion' , 'like', '%' . $buscar . '%')->get();
        $categorias = Categoria::all();
        
    }
    return view('producto.index', compact('productos', 'categorias'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {          
        $productos=new producto;
        $productos->id_categoria=$request->input('id_categoria');
        $productos->descripcion=$request->input('descripcion');
        $productos->precio=$request->input('precio');
        $productos->save();
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
        $productos=producto::find($id);
        $productos->id_categoria=$request->input('id_categoria');
        $productos->descripcion=$request->input('descripcion');
        $productos->precio=$request->input('precio');
        $productos->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $productos=producto::find($id);
        $productos->delete();
        return redirect()->back();
    
    }
}
