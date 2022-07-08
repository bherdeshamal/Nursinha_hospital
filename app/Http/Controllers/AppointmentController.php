<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\adminmail;
use App\Models\Appointment;
use Session;

class AppointmentController extends Controller
{
    public function sendAppointment(Request $request)
    {
        $this->validate($request, [
            'name' =>'required',
            'no' =>'required',
            'email' =>'required|email',
            'dat' =>'required',
            'time' =>'required',
            'area' =>'required',
            'city' =>'required',
            'state' =>'required',
            'code' =>'required'
        ]);
        $data= array(
            'name' =>$request->name,
            'no' =>$request->no,
            'email'=>$request->email,
            'dat' =>$request->dat,
            'time' =>$request->time,
            'area'=>$request->area,
            'city' =>$request->city,
            'state' =>$request->state,
            'code'=>$request->code
        );
        Mail::to('shamalbherde02@gmail.com')->send(new AdminMail($data)); 
        $category = new Appointment();
        $category->name = request('name');
        $category->no = request('no');
        $category->email = request('email');
        $category->dat = request('dat');
        $category->time = request('time');
        $category->area = request('area');
        $category->city = request('city');
        $category->state = request('state');
        $category->code = request('code');
        $category->save();
        return redirect()->back()->with('success', 'Details are Send Successfully');
    }
}
