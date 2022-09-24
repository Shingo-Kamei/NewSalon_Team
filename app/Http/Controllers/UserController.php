<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calendar\CalendarView;
use App\Models\Appoint;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('appoints.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

 
        $name = $request->name;
        $email = $request->email;
        $tel = $request->tel;
        $password = $request->password;

        $input_data = [
            'name' => $name,
            'email' => $email,
            'tel' => $tel,
            'password' => $password,
        ];

        return view('appoints.confirms',compact('input_data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function complete(Request $request)
    {

        $appoint = new Appoint;
        $appoint->name = $request->name;
        $appoint->email = $request->email;
        $appoint->tel = $request->tel;
        $appoint->password = $request->password;

        $appoint->save();
        return view('appoints/complete');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show()
    // {
    //     $calendar = new CalendarView(time());

    //     return view('appoints.calendar',[
    //         "calendar" => $calendar
    //     ]); 
    // }

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
