<?php

namespace App\Http\Controllers;

use App\Models\Resident;
use App\Http\Requests\StoreResidentRequest;
use App\Http\Requests\UpdateResidentRequest;
use Illuminate\Http\Request;

class ResidentController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function index()
     {
         $residents = Resident::all();
         return view('residents.index', compact('residents'));
     }
 
     public function create()
     {
         return view('residents.create');
     }
 
     public function store(Request $request)
     {
         $validated = $request->validate([
             'name' => 'required',
             'age' => 'required|integer',
             'gender' => 'required',
             'medical_history' => 'nullable',
             'status' => 'required'
         ]);
 
         Resident::create($validated);
 
         return redirect()->route('residents.index')->with('success', 'Resident added successfully.');
     }
 
     public function edit(Resident $resident)
     {
         return view('residents.edit', compact('resident'));
     }
 
     public function update(Request $request, Resident $resident)
     {
         $validated = $request->validate([
             'name' => 'required',
             'age' => 'required|integer',
             'gender' => 'required',
             'medical_history' => 'nullable',
             'status' => 'required'
         ]);
 
         $resident->update($validated);
 
         return redirect()->route('residents.index')->with('success', 'Resident updated successfully.');
     }
 
     public function destroy(Resident $resident)
     {
         $resident->delete();
 
         return redirect()->route('residents.index')->with('success', 'Resident deleted successfully.');
     }
}
