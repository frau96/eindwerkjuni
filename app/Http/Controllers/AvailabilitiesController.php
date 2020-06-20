<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Availability;
use App\Psycholoog;
use Carbon\Carbon;

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
            $var = Carbon::now();
            $availabilities = Availability::orderBy('date', 'asc')
                ->where('psych_id', $psycholoog->id)
                ->where('is_taken', 0)
                ->where('availabilities.date', '>=' , $var )
                ->get(); 
        }

        //$availabilities = Availability::orderBy('date', 'asc')->get();
        return view('availabilities.index')->with('availabilities', $availabilities);
    }

    public function indexClient($id)
    { 
        $var = Carbon::now();
        $availabilities = Availability::orderBy('date', 'asc')                          // Zelfde functie als index, maar dan enkel wat cliënt ziet
            ->where('psych_id', $id)                                                   // Haal alle availabilities op, van deze psycholoog
            ->where('is_taken', 0) 
            ->where('availabilities.date', '>=' , $var )                                                   // Enkel diegene die nog niet zijn ingenomen
            ->get(); 

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

        $psycholoog = Psycholoog::where('user_id', auth()->user()->id)->first();    // zoek de psycholoog op, waar de user_id is geverifiëerd met de authenticatie
                                                                                    // Zo worden enkel de availabilities van die psycholoog opgehaald

        // Add new availability
        $availability = new Availability;
        $availability->subject = $request->input('subject');
        $availability->date = $request->input('date');
        $availability->time = $request->input('time');
        $availability->psych_id = $psycholoog->id;              // de id van de psycholoog
        $availability->is_taken = 0;                            // is_taken 0, is nog niet ingenomen, dus nog altijd beschikbaar
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
        return redirect('/availabilities')->with('success', 'Beschikbaarheid verwijderd');
    }
}
