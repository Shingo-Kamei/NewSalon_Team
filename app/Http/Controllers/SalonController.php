<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class SalonController extends Controller
{
    public function index()
    {
        $shops = Shop::get();
        return view('salons.index',['shops' => $shops]);
    }

     public function create(Request $request)
    {
        return view('shop.create');
    }




}


