<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AgentsController;
use App\Http\Controllers\MapsController;
use App\Http\Controllers\WeaponsController;
use App\Http\Controllers\BundlesController;

Route::get('/', [DashboardController::class, 'index'])->name('index');
Route::get('/agents', [AgentsController::class, 'index'])->name('agents');
Route::get('/agent-info/{id}', [AgentsController::class, 'getAgentById'])->name('agent.info');
Route::get('/maps', [MapsController::class, 'index'])->name('maps');
Route::get('/maps-info/{id}', [MapsController::class, 'getMapById'])->name('map.info');
Route::get('/weapons', [WeaponsController::class, 'index'])->name('weapons');
Route::get('/weapons-info/{id}', [WeaponsController::class, 'getWeaponById'])->name('weapon.info');
Route::get('/bundles', [BundlesController::class, 'index'])->name('bundles');
Route::get('/budnles-info/{id}', [BundlesController::class, 'getBundleById'])->name('bundles.info');
// Route::view('/','parent');
