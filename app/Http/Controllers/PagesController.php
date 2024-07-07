<?php

namespace App\Http\Controllers;

use App\Models\Freelancer;
use Illuminate\Http\Request;
use App\Models\Freelancer;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function table(){
        
        return view('crud.table');
    }

    public function details(){
        
        return view('details.index');
    }
}
