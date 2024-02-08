<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index() {
        return view('contactanos.index');
  }

  public function store(Request $request) {


        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'correo' => ['required', 'string', 'email', 'max:255'],
            'mensaje' => ['required', 'string']
        ],[
          // mensajes personalizados
        ]);
        
        Mail::to('victor.aranaf92@gmail.com')
        ->send(new ContactanosMailable($request->all()));


        return redirect()->route("contactanos.index")->with( "info", "Tu mensaje ha sido enviado correctamente");
    }
}