<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Availability;
use App\Psycholoog;

class AvailabilitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $psycholoog = Psycholoog::where('user_id', auth()->user()->id)->first();
        $availabilities = '';
        if(!empty($psycholoog)){
            $availabilities = Availability::orderBy('date', 'asc')
                ->where('psych_id', $psycholoog->id)
                ->get(); 
        }

        //$availabilities = Availability::orderBy('date', 'asc')->get();
        return view('availabilities.index')->with('availabilities', $availabilities);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('availabilities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'subject'=>'required',
            'date'=>'required',
            'time'=>'required',
        ]);

        $psycholoog = Psycholoog::where('user_id', auth()->user()->id)->first();

        // Add new availability
        $availability = new Availability;
        $availability->subject = $request->input('subject');
        $availability->date = $request->input('date');
        $availability->time = $request->input('time');
        $availability->psych_id = $psycholoog->id;
        $availability->save();

        return redirect('/availabilities')->with('success', 'Beschikbaarheid aangemaakt');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $availability = Availability::find($id);
        return view('availabilities.show')->with('availability', $availability);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $availability = Availability::find($id);
        return view('availabilities.edit')->with('availability', $availability);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'subject'=>'required',
            'date'=>'required',
            'time'=>'required',
        ]);

        // Add new availability
        $availability = Availability::find($id);
        $availability->subject = $request->input('subject');
        $availability->date = $request->input('date');
        $availability->time = $request->input('time');
        $availability->save();

        return redirect('/availabilities')->with('success', 'Beschikbaarheid aangepast');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $availability = Availability::find($id);
        $availability->delete();
        return redirect('/availabilities')->with('success', 'Post successfully removed');

    /*
        //Check for correct user
        if(auth()->user()->id !==$availability->user_id){
            return redirect('/availabilities')->with('error', 'Unauthorised page');
        }

        $availability->delete();

        return redirect('/availabilities')->with('success', 'Post successfully removed');
    */

    }
}
