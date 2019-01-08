<?php

namespace ProMantenedor\Http\Controllers;

use Illuminate\Http\Request;

class CreadorController extends Controller
{
    //

    public function index(){
        $creadores = Creador::all();
        return view('index', compact('creadores'));
    }
}
