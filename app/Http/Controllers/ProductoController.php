<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProducto;
use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{

    public function index(){

        $productos = Producto::orderBy('id', 'desc')->paginate(5);
        return view('productos.index', compact('productos'));
    }

    
    public function indexdos(){

        $productos = Producto::orderBy('id', 'desc')->paginate(5);
        return view('productos.index2', compact('productos'));
    }
    



    public function create(){
        return view('productos.create');
    }


    public function store(StoreProducto $request){

        $producto = new Producto();

        $producto->name = $request->name;
        $producto->costo = $request->costo;
        $producto->color = $request->color;
        $producto->save();

        return redirect()->route('productos.show', $producto->id);
    }



    public function show($id){

        $producto = Producto::find($id);

        return view('productos.show', compact('producto'));
    }


    public function edit(Producto $producto){

     return view('productos.edit', compact('producto'));

    }


    public function update(Request $request, Producto $producto){

        $producto->update($request->all());
        return redirect()->route('productos.show', $producto->id);


    }


    public function destroy(Producto $producto){


       $producto->delete();

        return redirect()->route('productos.index');


    }
 
}
