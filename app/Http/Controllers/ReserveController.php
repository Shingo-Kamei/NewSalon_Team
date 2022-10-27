<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReserveController extends Controller
{
    public function index()
    {
      $homes = Home::all();
       return view('homes.index',[
             'homes' => $homes,
    ]);
    }

     public function create(Request $request)
    {
        return view('home.create');
    }
}