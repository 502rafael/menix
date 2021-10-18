<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class ControllerArticulos extends Controller
{
    public function index()
    {
        $data = App\Models\Articulo::all();
    
        return view('index',compact('data'));
    }

}