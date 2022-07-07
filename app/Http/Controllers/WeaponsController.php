<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http; //Required
use Illuminate\Http\Request;

class WeaponsController extends Controller
{
    public function index() {
        $weapons = Http::get('https://valorant-api.com/v1/weapons')
            ->json()['data'];
        
        // dump($weapons);

        return view('listWeapon',[
            'weapons' => $weapons
        ]);
    }

    public function getWeaponById($id){
        $weapon = Http::get('https://valorant-api.com/v1/weapons/'.$id)
            ->json()['data'];
        
        // dump($weapon);

        return view('weapon',[
            'weapon' => $weapon
        ]);
    }
}
