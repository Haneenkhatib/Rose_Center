<?php

namespace App\Http\Controllers\WebsiteControllers;

use App\Appointment;
use App\Mail\AppointmentMail;
use App\Notifications\bookAppointment;
use App\Service;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

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
        $appointments=Appointment::where('user_id',Auth::id())->get();
        return view('website.Appointment.index',
            ['appointments'=>$appointments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $servicess=Service::all();
        return view('website.Appointment.createap',['servicess'=>$servicess]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->validate($this->rules(),$this->messages());
//        dd($date);
        if($data) {
            $appointment = new Appointment();
            $serviceid = DB::table('services')->where('title', $request->services)->value('id');
            $appointment->user_id = Auth::id();
            $appointment->service_id = $serviceid;
            $appointment->date = $request->date;
            $appointment->Description = $request->description;
            $appointment->save();

            Mail::to(Auth::user()->email)->send(new AppointmentMail($data));
            Auth::user()->notify(new bookAppointment($appointment));
            return redirect()->back()->with('success', 'Appointment added successfully!');
        }

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
        try {
            $appointment= Appointment::findOrFail($id);
            $servicess=Service::all();
//            dd($appointment->service->title);
            return view('website.Appointment.edit', ['appointment'=>$appointment,'servicess'=>$servicess]);
        } catch (ModelNotFoundException $modelNotFoundException) {
            return redirect()->route('appointment.index')
                ->with('error', 'Appointment is not found');
        }
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
        try {
            $appointment = Appointment::findOrFail($id);
            $request->validate($this->rules($id), $this->messages());
            $serviceid=DB::table('services')->where('title', $request->services)->value('id');
            $appointment->user_id=Auth::id();
            $appointment->service_id=$serviceid;
            $appointment->date=$request->date;
            $appointment->Description=$request->description;
//            $appointment->fill($request->all());
            $appointment->update();
            return redirect()->route('appointment.index')->with('success', 'Appointment successfully updated');
        } catch (ModelNotFoundException $modelNotFoundException) {
            return redirect()->route('appointment.index')->with('error', 'Appointment is not found');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $appointment= Appointment::findOrFail($id);
            $appointment->delete();
            return response()->json([
                'success' => 'Appointment has been deleted successfully!'
            ]);
        } catch (ModelNotFoundException $modelNotFoundException) {
            return response()->json([
                'error' => 'Appointment is not found !'
            ]);
        }
    }
    private function rules()
    {
        $rules = [
//            'email' => 'required',
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
//            'email.required' =>'Email is required',
            'services.required' =>'Select Service',
            'date.required' =>'Date is required',
            'description.required' =>'Description is required',
        ];
    }
}
