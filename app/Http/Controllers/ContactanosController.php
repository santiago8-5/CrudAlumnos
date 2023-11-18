<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContacto;
use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    //

    public function index(){

        return view('contactanos.index');

    }

    public function store(StoreContacto $request){
        $correo = new ContactanosMailable($request->all());
        Mail::to('7561131662z@gmail.com')->send($correo);
        return redirect()->route('contactanos.index')->with('info', 'Mensaje enviado');
    }


}
