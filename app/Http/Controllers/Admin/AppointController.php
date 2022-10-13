<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Appoint;
use App\Models\Shop;

class AppointController extends Controller
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
        $appoints = Appoint::get();
        $shops = Shop::pluck("shop_name", "id")->toArray();
        return view('admin/appoint/index')->with(['appoints'=> $appoints, 'shops' => $shops]);
    }
}
