<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        
        return view('index');
    }

    public function table(){
        
        return view('crud.table');
    }

    public function details(){
        
        return view('details.index');
    }
}
