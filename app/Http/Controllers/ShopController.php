<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::get();
        return view('shop/index')-with('shops',$shops);

    }

    public function create()
    {
        return view('shop/create');
    }

    public function edit($id)
    {
        $shop = Shop::find($id);
        return view('shop/edit')->with('shop',$shop);
    }

    public function store(Request $request)
    {
        $shop = new Shop();
        $shop->shop_name = $request->shop_name;
        $shop->address = $request->shop_address;
        $shop->open_hour = $request->shop_open_hour;
    }

    //
}
