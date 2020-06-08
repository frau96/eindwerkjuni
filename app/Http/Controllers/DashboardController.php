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
        $user = User::find($user_id);

        $isPsycholoog = false;

        $psycholoog = Psycholoog::where('user_id', '=', $user_id)->first();
        //dump($psycholoog);
        //dump(auth()->user()->id);
        if (!empty($psycholoog)) {
            $isPsycholoog = true;
        }

        view()->share('isPsycholoog', $isPsycholoog);


        return view('dashboard')->with('user', $user);
    }
}
