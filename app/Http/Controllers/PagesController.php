<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Freelancer;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function table()
    {
        $freelancers = Freelancer::all();
        return view('crud.table', compact('freelancers'));
    }

    public function details($id)
    {
        $freelancer = Freelancer::find($id);
        return view('details.index', compact('freelancer'));
    }
}
