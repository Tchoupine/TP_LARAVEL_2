<?php

namespace App\Http\Controllers;

use App\Http\Requests\FreelancerRequest;
use App\Models\Freelancer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FreelancerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $freelancers = Freelancer::all();
        return view('crud.table', compact('freelancers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud.store');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FreelancerRequest $request)
    {
        Log::info($request->all());
        try {
            $data = $request->validated();

           
            Freelancer::create($data);

            return redirect()->route('freelancers.index')->with('success', 'Freelancer created successfully.');
        } catch (\Exception $e) {
            log::error('Error creating freelancer: '.$e->getMessage());
            return back()->with('error', 'There was an error creating the freelancer.');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('crud.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
