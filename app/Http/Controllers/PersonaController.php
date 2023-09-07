<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    public function index(){

        $personas = Persona::orderBy('id', 'desc')->paginate(); 
        return view('personas.index', compact('personas'));

    }



    public function create(){
        return view('productos.create');
    }



    public function show(){
        return view('productos.show');
    }
}
