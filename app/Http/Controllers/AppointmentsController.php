<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Appointment;
use App\Availability;
use App\Psycholoog;
use Carbon\Carbon;

class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $psycholoog = Psycholoog::where('user_id', auth()->user()->id)->first();
        $appointments = '';
        if(!empty($psycholoog)){
            $var = Carbon::now();
            $appointments = Appointment::leftJoin('availabilities', 'appointments.availability_id', '=' , 'availabilities.id')
                ->select('appointments.id','appointments.client_firstname', 'appointments.client_lastname', 'appointments.client_email',  'availabilities.subject', 'availabilities.time', 'availabilities.date')
                ->where('appointments.psych_id', $psycholoog->id)
                ->where('availabilities.date', '>=' , $var )
                ->get();
        }
        return view('appointments.index')->with('appointments', $appointments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

// Aparte functie createAppointment maken: 

    public function createAppointment($id) 
    {
        //dump($id);
        //dd('test');
        //dd($availability);

        // Join doen van psycholoogs

        $availability = Availability::leftJoin('psycholoogs', 'availabilities.psych_id', '=' , 'psycholoogs.id')
        ->select('availabilities.id', 'availabilities.time', 'availabilities.date', 'availabilities.psych_id', 'psycholoogs.firstname', 'psycholoogs.lastname')
        ->where('availabilities.id', $id)->firstOrFail(); // Gaat de availability zoeken, er is er maar één. Fail als er geen is
        
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

        $availability = Availability::find($availability_id);               // Nu wordt de availability gezocht
        $availability->is_taken = 1;                                        // De availability is_taken is true: is niet meer beschikbaar als availability
        $availability->save();

        
        $a = Availability::leftJoin('psycholoogs', 'availabilities.psych_id', '=' , 'psycholoogs.id')
        ->select('availabilities.id', 'availabilities.date', 'availabilities.time', 'psycholoogs.firstname', 'psycholoogs.lastname')
        ->where('availabilities.id' , '=' , $availability_id)->first();

        $data = array(
            'date' => $a->date,
            'time' => $a->time,
            'psycholoog' => $a->firstname . ' ' . $a->lastname,
        );

            Mail::send('mail.contact', $data ,function($message){       // bij afspraak maken, wordt bevestiging gestuurd (contact.blade.php)
                $message->to(request('client_email'))                       // wordt verstuurd naar ingevoerde email van klant
                ->subject('Bevestiging van uw afspraak');                   // subject van de email
            });


        return view('appointments.thanks');                                 
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
        /*
        $appointment = Appointment::find($id);
        dd($appointment);
        //$appointment->delete();

        $this->validate($request, [
            'client_firstname'=>'required',
            'client_lastname'=>'required',
            'client_email'=>'required',
        ]);

        $availability_id = $request->input('availability_id');
        $availability = Availability::find($availability_id);               // Nu wordt de availability gezocht
        $availability->is_taken = 0;                                        // De availability is_taken is true: is niet meer beschikbaar als availability
        $availability->save();
*/
        return redirect('/appointments')->with('success', 'Afspraak verwijderd');
    }
}
