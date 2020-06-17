<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Psycholoog;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);                                           // toon het dashboard enkel

        $isPsycholoog = false;                                                 // automatisch op false: want nog niet zeker of gegevens er al in staan

        $psycholoog = Psycholoog::where('user_id', '=', $user_id)->first();
        //dump($psycholoog);
        //dump(auth()->user()->id);
        if (!empty($psycholoog)) {
            $isPsycholoog = true;                                     // profiel is al aangemaakt, dus true. Wordt gelinkt an if else in dashboard view
        }

        view()->share('isPsycholoog', $isPsycholoog);
        
        view()->share('psycholoog', $psycholoog);

        return view('dashboard')->with('user', $user);
    }
}
