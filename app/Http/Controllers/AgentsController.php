<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http; //Required
use Illuminate\Http\Request;


class AgentsController extends Controller
{
    public function index() {
        $agents = Http::get('https://valorant-api.com/v1/agents',[
            'isPlayableCharacter' => 'true'
        ])->json()['data'];

        // dump($agents);

        return view('listAgent',[
            'agents' => $agents
        ]);
    }

    public function getAgentById($id) {
        $agent = Http::get('https://valorant-api.com/v1/agents/'.$id)->json()['data'];
        
        // dump($agent);
        
        return view('agent',[
            'agent' => $agent
        ]);
    }
}
