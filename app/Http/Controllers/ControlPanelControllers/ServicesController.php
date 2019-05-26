<?php

namespace App\Http\Controllers\ControlPanelControllers;

use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

const Service_PAGINATION = 10;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::paginate(Service_PAGINATION);
        return view('controlpanel.service.index', [
            'services' =>$services
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('controlpanel.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->rules(), $this->messages());
        $service = new Service();
        $service->fill($request->all());
        $result = $service->save();
        if ($result === TRUE)
            return redirect()->back()->with('success', 'service successfully added');
        return redirect()->back()->with('error', 'something went wrong while saving service');
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
            $service= Service::findOrFail($id);
            return view('controlpanel.service.edit', compact('service'));
        } catch (ModelNotFoundException $modelNotFoundException) {
            return redirect()->route('controlpanel.Service.index')
                ->with('error', 'service is not found');
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
            $service = Service::findOrFail($id);
            $request->validate($this->rules($id), $this->messages());
            $service->fill($request->all());
            $service->update();
            return redirect()->route('controlpanel.Service.index')->with('success', 'service successfully updated');
        } catch (ModelNotFoundException $modelNotFoundException) {
            return redirect()->route('controlpanel.Service.index')->with('error', 'service is not found');
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
            $service = Service::findOrFail($id);
            $service->delete();
            return redirect()->route('controlpanel.Service.index')->with('success', 'service successfully deleted');
        } catch (ModelNotFoundException $modelNotFoundException) {
            return redirect()->route('controlpanel.Service.index')->with('error', 'service is not found');
        }

    }

    /**
     *
     * validation's rules
     *
     * @return array
     */
    private function rules($id = null)
    {
        $rules = [
            'title' => 'required',
            'description' => 'required',
            'price' =>'required',
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
            'title.required' =>'Title is required',
            'description.required' =>'Description is required',
            'price.required' =>'Price is required',
        ];
    }
}
