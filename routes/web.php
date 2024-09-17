<?php


use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ResidentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisitController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.home');
});
Route::get('/gessi', function () {
    return view('index');
});


Route::get('/admin/residents', [DashboardController::class, 'residents'])->name('dashboard.residents');
Route::get('/admin/caregivers', [DashboardController::class, 'caregivers'])->name('admin.caregivers');
Route::get('/admin/volunteers', [DashboardController::class, 'volunteers'])->name('admin.volunteers');
Route::get('/admin/donations', [DashboardController::class, 'donations'])->name('admin.donations');
Route::get('/admin/activities', [DashboardController::class, 'activities'])->name('admin.activities');
Route::get('/admin/reports', [DashboardController::class, 'reports'])->name('admin.reports');
Route::get('/admin/default', [DashboardController::class, 'default'])->name('admin.default');
Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard.index');







Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Resident routes
Route::resource('residents', ResidentController::class);

// Visit routes
Route::resource('visits', VisitController::class);
