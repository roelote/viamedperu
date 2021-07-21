<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{

    public function index()
    {
            return view('contact');
    }

    public function store(Request $request)
    {
        $request->validate([
                'Nombre' => 'required',
                'Email' => 'required|email',
                'Mensaje' => 'required',
            ]
        );

        $correo = new ContactanosMailable($request->all());

        Mail::to('reserve@viamedperu.com')->send($correo);

        return redirect()->route('contactanos')->with('info','Mensaje Enivado');
    }

}
