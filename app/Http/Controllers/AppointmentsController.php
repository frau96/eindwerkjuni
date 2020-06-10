<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Appointment;
use App\Availability;

class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('appointments.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    public function createAppointment($id) 
    {
        //dump($id);
        //dd('test');
        //dd($availability);

        $availability = Availability::leftJoin('psycholoogs', 'availabilities.psych_id', '=' , 'psycholoogs.id')
        ->select('availabilities.id', 'availabilities.time', 'availabilities.date', 'availabilities.psych_id', 'psycholoogs.firstname', 'psycholoogs.lastname')
        ->where('availabilities.id', $id)->firstOrFail(); // Gaat de availability zoeken
        
        return view('appointments.create')->with('availability', $availability);


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
            'client_firstname'=>'required',
            'client_lastname'=>'required',
            'client_email'=>'required',
        ]);

        //dd($request);
        $availability_id = $request->input('availability_id');

        $appointment = new Appointment;
        $appointment->client_firstname = $request->input('client_firstname');
        $appointment->client_lastname = $request->input('client_lastname');
        $appointment->client_email = $request->input('client_email');

        $appointment->psych_id = $request->input('psych_id');
        $appointment->availability_id = $request->input('availability_id');

        $appointment->save();

        $availability = Availability::find($availability_id);   // Nu wordt de availability gezocht
        $availability->is_taken = 1;                            // De availability is_taken is true
        $availability->save();

        //return redirect('/availabilities')->with('success', 'Beschikbaarheid aangemaakt');
        return view('appointments.thanks');

      /* 
        $validate = request()->validate([
            
        ]);

        Mail::send('mails.contact', $validate, function ($message) {
            $message->to(request('email'), request('firstname'));
            $message->subject('Vraag van: '. request('name'));
        });


        return view('appointments.thanks'); // Nadat een afspraak wordt bevestigd

        */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
