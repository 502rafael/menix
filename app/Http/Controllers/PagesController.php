<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public  function home(){
            return view('menix');
    }

    public  function login(){
        return view('login');
    }


    public  function index(){
        return view('inicio');
    }











}
