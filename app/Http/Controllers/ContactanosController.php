<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMailable;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    
public function index(){
        return view("index");
    }
public function store(Request $request){
        $request->validate([
            "name1" => "required",
            "name2" => "required",
        ]);
    $correo = new ContactanosMailable($request->all());
    Mail::to("fhidalgo@iessonferrer.com")->send($correo);

    return redirect()->route("index")->with("info","Mensaje enviado");
    }
}
