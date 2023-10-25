<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoria;

class CategoriaController extends Controller
{

    public function index(Request $request)
    {
        $criterios=$request->criterio;
        $buscar=$request->buscar;
        if($buscar==''){
            $categorias=categoria::all(); 
        }
        else{
            $categorias = categoria::where( $criterios , 'like', '%' . $buscar . '%')->get();
        }
       
        return view('categoria.index',compact('categorias'));
    }

    public function store(Request $request)
    {
        $categorias=new categoria;
        $categorias->nombre=$request->input('nombre');
        $categorias->save();
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
        $categorias=categoria::find($id);
        $categorias->nombre=$request->input('nombre');
        $categorias->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $categorias=categoria::find($id);
        $categorias->delete();
        return redirect()->back();
    }
}
