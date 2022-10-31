<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

      $homes = array();
       return view('homes.index',[
             'homes' => $homes,

    ]);
    }

     public function create(Request $request)
    {
        return view('shop.create');
    }

    public function edit($id)
    {
        $home =Home::find($id);
        return view('appoints.edit',compact('home'));
    }
   
}