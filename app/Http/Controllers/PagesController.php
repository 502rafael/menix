<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class PagesController extends Controller
{
    public  function home(){
            return view('menix');
    }

    public  function login(){
        return view('login');
    }


    public  function index(){

        $data = App\Models\Articulo::all();
    
        return view('inicio',compact('data'));
    }











}
