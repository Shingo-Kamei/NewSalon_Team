<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calendar\CalendarView;
use App\Models\Appoint;
use App\Models\Shop;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $shop_id = $request->shop_id;
        return view('appoints.create', compact('shop_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $date = $request->date;
        $name = $request->name;
        $email = $request->email;
        $tel = $request->tel;
        $input_data = [
            'shop_id' => $shop_id,
            'date' => $date,
            'name' => $name,
            'email' => $email,
            'tel' => $tel,
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
        $appoint->shop_id = $request->shop_id;
        $appoint->appoint_at = $request->date;
        $appoint->name = $request->name;
        $appoint->email = $request->email;
        $appoint->tel = $request->tel;
        $appoint->timestamps = false;
        $appoint->save();
        return view('appoints/complete');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return view
     */
    public function show($id)
    {

        $shop = Shop::find($id);
        return view('appoints/edit', compact('shop'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shop = Shop::find($id);


        return view('appoints/edit/id')->with('shop', $shop);
        // $shops = DB::table('shop')->get();
        // return view('shop', compact('shops'));
    }


    public function store(Request $request)
    {
        return view('appoints/edit/id');
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
