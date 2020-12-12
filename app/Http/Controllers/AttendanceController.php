<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attendances = Attendance::all();
        return view('attendances.index',compact('attendances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('attendances.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'checkin_time'=>'required',
            'checkout_time'=>'required',
            
            
        ]);

        $attendance = new Attendance([
            'checkin_time' => $request->get('checkin_time'),
            'checkout_time' => $request->get('checkout_time'),
            
            
        ]);       
        $attendance->save();
        return redirect('/dashboard')->with('success', 'Attendance saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function show(Attendance $attendance)
    {
        $attendance =Attendance::find($id);
        return view('attendances.view',compact('attendance'));   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendance $attendance)
    {
        $attendance =Attendance::find($id);
        return view('attendances.edit',compact('attendance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attendance $attendance)
    {
        $request->validate([
            'checkin_time'=>'required',
            'checkout_time'=>'required',
            
            
        ]);
        $attendance = Attendance::find($id);
        $attendance->checkin_time =  $request->get('checkin_time');
        $attendance->checkout_time =  $request->get('checkout_time');
        
        $attendance->save();
        
        return redirect('/attendances')->with('success', 'Attendance updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attendance $attendance)
    {
        $attendance =Attendance::find($id);
        $attendance->delete();
        return redirect('/attendances')->with('success', 'Attendance deleted!');
    }
}
