<?php

namespace App\Http\Controllers;

use App\Models\Resident;
use App\Models\Visit;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $residents_count = Resident::count();
        $visits_count = Visit::count();
        $upcoming_visits = Visit::whereDate('scheduled_date', '>=', now())->orderBy('scheduled_date')->get();

        return view('dashboard.index', compact('residents_count', 'visits_count', 'upcoming_visits'));
    }
}
