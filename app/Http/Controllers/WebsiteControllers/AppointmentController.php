<?php

namespace App\Http\Controllers\WebsiteControllers;

use App\Appointment;
use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

const Appointment_PAGINATION = 10;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = Appointment::paginate(Appointment_PAGINATION);
        return view('website.Appointment.index',
            ['appointments'=>$appointments
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services=Service::all();
        return view('website.Appointment.create',['services'=>$services]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $state=$request->validate($this->rules(),$this->messages());
//        dd($state);
        $appointment=new Appointment();
        $serviceid=DB::table('services')->where('title', $request->services)->value('id');
        $userid=DB::table('users')->where('email', $request->email)->value('id');
        $appointment->user_id=$userid;
        $appointment->service_id=$serviceid;
        $appointment->date=$request->date;
        $appointment->Description=$request->description;
        $appointment->save();
        return redirect()->back()->with('success', 'Appointment added successfully!');

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
    private function rules()
    {
        $rules = [
            'name' => 'required',
            'email' => 'required',
            'services' => 'required',
            'date' => 'required',
            'description' => 'required',
        ];
        return $rules;
    }
    /**
     *
     * validation's messages
     *
     * @return array
     */
    private function messages()
    {
        return [
            'name.required' =>'Name is required',
            'email.required' =>'Email is required',
            'services.required' =>'Select Service',
            'date.required' =>'Date is required',
            'description.required' =>'Description is required',
        ];
    }
}
