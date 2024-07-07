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
        $freelancers = Freelancer::paginate(10);
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
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $freelancer = Freelancer::findOrFail($id);
        return view('crud.edit', compact('freelancer'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'first_name' => 'required',
        'last_name' => 'required',
        'phone_number' => 'required',
        'email_address' => 'required|email',
        'address' => 'required',
        'country' => 'required',
        'city' => 'required',
        'profession' => 'required|string|max:255',
        'cv' => 'required|mimes:pdf,doc,docx|max:2048',
        'gender' => 'required|string|in:male,female',
    ]);

    $freelancer = Freelancer::find($id);

    if ($request->hasFile('photo')) {
        $profilePath = $request->file('photo')->store('photos', 'public');
        $freelancer->photo = $profilePath;
    }

    if ($request->hasFile('cv')) {
        $cvPath = $request->file('cv')->store('cvs', 'public');
        $freelancer->cv = $cvPath;
    }

    $freelancer->update($request->all());

    return redirect()->route('freelancers.index')
                    ->with('success', 'Freelancer updated successfully.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Freelancer $freelancer)
    {
        $freelancer->delete();
        
        return redirect()->route('freelancers.index')
                         ->with('success', 'Freelancer deleted successfully.');

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
        return redirect()->route('freelancers.index')
                         ->with('success', 'Freelancer created successfully.');
    }
    
}
