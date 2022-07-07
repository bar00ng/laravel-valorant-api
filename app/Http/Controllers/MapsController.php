<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; //Required

class MapsController extends Controller
{
    public function index() {
        $maps = Http::get('https://valorant-api.com/v1/maps')
            ->json()['data'];
        
        // dump($maps);

        return view('listMap',[
            'maps' => $maps
        ]);
    }

    public function getMapById($id) {
        $map = Http::get('https://valorant-api.com/v1/maps/'.$id)
            ->json()['data'];
        
        dump($map);

        return view('map',[
            'map' => $map
        ]);
    }
}
