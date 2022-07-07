<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; //Required

class DashboardController extends Controller
{
    public function index() {
        $agents = Http::get('https://valorant-api.com/v1/agents',[
            'isPlayableCharacter' => 'true'
        ])->json()['data'];

        $maps = Http::get('https://valorant-api.com/v1/maps')
            ->json()['data'];

        $weapons = Http::get('https://valorant-api.com/v1/weapons')
            ->json()['data'];

        $bundles = Http::get('https://valorant-api.com/v1/bundles')
            ->json()['data'];
        
        // dump($bundles);

        return view('dashboard', [
            'agents' => $agents,
            'maps' => $maps,
            'weapons' => $weapons,
            'bundles' => $bundles
        ]);
    }
}
