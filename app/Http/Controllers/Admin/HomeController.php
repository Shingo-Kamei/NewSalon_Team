<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
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
        $homes = Home::get();
        return view('admin/home/index')->with('homes', $homes);
    }

    public function create()
    {
        return view('admin/home/create');
    }

    public function edit($id)
    {
        $home = Home::find($id);
        return view('admin/home/edit')->with('home', $home);
    }

    public function store(Request $request)
    {
        $shop = new Shop();
        $shop->shop_name = $request->shop_name;
        $shop->address = $request->shop_address;
        $shop->open_hour = $request->shop_open_hour;
        $shop->close_day = $request->shop_close_day;
        $shop->tel = $request->shop_tel;
        $shop->seat_num = $request->shop_seat_num;
        $shop->staff_num = $request->shop_staff_num;
        $shop->detail = $request->shop_detail;
        $shop->parking = $request->shop_parking;
        $shop->created_at = Carbon::now();
        $shop->updated_at = Carbon::now();
        $shop->save();
        return view('admin/shop/create_complete');
    }

    public function update($id, Request $request)
    {
        $shop = Shop::find($id);
        $shop->shop_name = $request->shop_name;
        $shop->address = $request->shop_address;
        $shop->open_hour = $request->shop_open_hour;
        $shop->close_day = $request->shop_close_day;
        $shop->tel = $request->shop_tel;
        $shop->seat_num = $request->shop_seat_num;
        $shop->staff_num = $request->shop_staff_num;
        $shop->detail = $request->shop_detail;
        $shop->parking = $request->shop_parking;
        $shop->created_at = Carbon::now();
        $shop->updated_at = Carbon::now();
        $shop->save();
        return view('admin/shop/update_complete');
    }
}
