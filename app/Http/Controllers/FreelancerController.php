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
    // public function store(FreelancerRequest $request)
    // {
    //     Log::info($request->all());
    //     try {
    //         $data = $request->validated();


    //         Freelancer::create($data);

    //         return redirect()->route('freelancers.index')->with('success', 'Freelancer created successfully.');
    //     } catch (\Exception $e) {
    //         log::error('Error creating freelancer: '.$e->getMessage());
    //         return back()->with('error', 'There was an error creating the freelancer.');
    //     }

    // }

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
    //function to create freelance
    public function store(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'email_address' => 'required|string|email|max:255|unique:freelancers',
            'country' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'profession' => 'required|string|max:255',
            'cv' => 'required|mimes:pdf,doc,docx|max:2048',
            'gender' => 'required|string|in:male,female',
        ]);

        // Gestion de l'upload de la photo
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
            $validatedData['photo'] = $photoPath;
        }

        // Gestion de l'upload du CV
        if ($request->hasFile('cv')) {
            $cvPath = $request->file('cv')->store('cvs', 'public');
            $validatedData['cv'] = $cvPath;
        }

        // Enregistrement des données
        Freelancer::create($validatedData);

        // Redirection après enregistrement
        return redirect()->back()->with('success', 'Freelancer created successfully.');
    }
}
