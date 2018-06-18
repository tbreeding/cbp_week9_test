<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hero;
use App\Emergency;
use Auth;

class HeroController extends Controller
{
    //
    public function show($hero_slug)
    {
        $hero = \App\Hero::where('slug', $hero_slug)->first();

        if (!$hero) {
            abort(404, 'Hero not found');
        }

        $view = view('hero/show');
        $view->hero = $hero;
        return $view;
    }
    public function index() {
        $view = view('hero/index');
        
        $heros = Hero::orderBy('name', 'asc')->get();
        $view->heros = $heros;
        
        return $view;
    }
    public function emergency(request $request, $id) {
        
        $newEmergency['hero_id'] = $request['hero_id'];
        $newEmergency['user_id'] = Auth::id();
        $newEmergency['subject'] = $request['subject'];
        $newEmergency['description'] = $request['description'];
        $num = Emergency::where('hero_id', '=', $newEmergency['hero_id'])->count();

        Emergency::create($newEmergency);
        return ("A hero will be on the way shortly, there are {$num} victims ahead of you in line.");

    }
}
