<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReserveController extends Controller
{
    public function index()
    {
      $salons = Salon::all();
       return view('salons.index',[
             'salons' => $salons,
    ]);
    }

     public function create(Request $request)
    {
        return view('salon.create');
    }
}