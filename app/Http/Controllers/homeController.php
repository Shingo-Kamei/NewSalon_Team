<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // shopテーブルから店舗のデータ一覧を取得しViewに渡す
        $shops = Shop::all();
        return view('homes.index',['shops' => $shops]);
    }
}
