<?php

namespace App\Http\Controllers;

use App\Models\Salon;
use Illuminate\Http\Request;

class SalonController extends Controller
{
    public function index()
    {
      $salons = array();
       return view('salons.index',[
             'salons' => $salons,
    ]);
    }

     public function create(Request $request)
    {
        return view('shop.create');
    }

   


}


