<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $shops = Shop::get();
        return view('admin/shop/index')->with('shops', $shops);
    }

    public function create()
    {
        return view('admin/shop/create');
    }

    public function edit($id)
    {
        $shop = Shop::find($id);
        return view('admin/shop/edit')->with('shop', $shop);
    }

    public function store(Request $request)
    {
        var_dump($request);
        redirect()->to('admin/shop/create_complete');
    }

    public function create_complete()
    {
        return view('admin/shop/create_complete');
    }

    public function update(Request $request)
    {
        redirect()->to('admin/shop/update_complete');
    }

    public function update_complete()
    {
        return view('admin/shop/update_complete');
    }

}
