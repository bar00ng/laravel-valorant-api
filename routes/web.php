<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AgentsController;
use App\Http\Controllers\WeaponsController;

Route::get('/', [DashboardController::class, 'index'])->name('index');
Route::get('/agents', [AgentsController::class, 'index'])->name('agents');
Route::get('/agent-info/{id}', [AgentsController::class, 'getAgentById'])->name('agent.info');
Route::get('/weapons', [WeaponsController::class, 'index'])->name('weapons');
Route::get('/weapons-info/{id}', [WeaponsController::class, 'getWeaponById'])->name('weapon.info');
// Route::view('/','parent');
