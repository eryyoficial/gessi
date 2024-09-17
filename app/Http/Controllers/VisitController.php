<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use App\Http\Requests\StoreVisitRequest;
use App\Http\Requests\UpdateVisitRequest;
use App\Models\Resident;
use Illuminate\Http\Request;

class VisitController extends Controller
{
    public function index()
    {
        $visits = Visit::with('resident')->get();
        return view('visits.index', compact('visits'));
    }

    public function create()
    {
        $residents = Resident::all();
        return view('visits.create', compact('residents'));
    }

    public function store(Request  $request)
    {
        $validated = $request->validate([
            'resident_id' => 'required|exists:residents,id',
            'visitor_name' => 'required',
            'scheduled_date' => 'required|date',
            'scheduled_time' => 'required',
        ]);

        Visit::create($validated);

        return redirect()->route('visits.index')->with('success', 'Visit scheduled successfully.');
    }

    public function edit(Visit $visit)
    {
        $residents = Resident::all();
        return view('visits.edit', compact('visit', 'residents'));
    }

    public function update(Request $request, Visit $visit)
    {
        $validated = $request->validate([
            'resident_id' => 'required|exists:residents,id',
            'visitor_name' => 'required',
            'scheduled_date' => 'required|date',
            'scheduled_time' => 'required',
        ]);

        $visit->update($validated);

        return redirect()->route('visits.index')->with('success', 'Visit updated successfully.');
    }

    public function destroy(Visit $visit)
    {
        $visit->delete();

        return redirect()->route('visits.index')->with('success', 'Visit deleted successfully.');
    }
}
