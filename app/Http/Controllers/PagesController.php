<?php

namespace App\Http\Controllers;

use App\Models\Freelancer;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        
        return view('index');
    }

    public function table()
    {
        $freelancers = Freelancer::all();
        $freelancers = Freelancer::paginate(10);
        return view('crud.table', compact('freelancers'));
    }

    public function details($id)
    {
        $freelancer = Freelancer::find($id);
        return view('details', compact('freelancer'));
    }
}
