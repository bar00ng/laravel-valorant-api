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

        $weapons = Http::get('https://valorant-api.com/v1/weapons')
            ->json()['data'];

        $tiers = Http::get('https://valorant-api.com/v1/competitivetiers/03621f52-342b-cf4e-4f86-9350a49c6d04')
            ->json()['data']['tiers'];
        
        // dump($tiers);

        return view('dashboard', [
            'agents' => $agents,
            'weapons' => $weapons,
            'tiers' => $tiers
        ]);
    }
}
