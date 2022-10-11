@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">管理画面 店舗情報更新</div>
                <div class="card-body">
                    <form action="/admin/shop/edit/{{ $shop->id }}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-group">
                            <label for="shop_name">店舗名</label>
                            <input type="text" class="form-control" name="shop_name" placeholder="店舗名" value="{{ $shop->shop_name }}">
                        </div>
                        <div class="form-group">
                            <label for="shop_address">住所</label>
                            <textarea class="form-control" name="shop_address" rows="2">{{ $shop->address }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="shop_open_hour">営業時間</label>
                            <input type="text" class="form-control" name="shop_open_hour" value="{{ $shop->open_hour }}" placeholder="09:00〜18:00">
                        </div>
                        <div class="form-group">
                            <label for="shop_close_day">定休日</label>
                            <input type="text" class="form-control" name="shop_close_day" value="{{ $shop->close_day }}" placeholder="毎週水曜日">
                        </div>
                        <div class="form-group">
                            <label for="shop_tel">電話番号</label>
                            <input type="tel" class="form-control" name="shop_tel" value="{{ $shop->tel }}" placeholder="04712345678">
                        </div>
                        <div class="form-group">
                            <label for="shop_seat_num">座席数</label>
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" name="shop_seat_num" value="{{ $shop->seat_num }}" placeholder="10" aria-describedby="shop_seat_num_addon">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="shop_seat_num_addon">席</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="shop_seat_num">スタッフ数</label>
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" name="shop_staff_num" value="{{ $shop->staff_num }}" placeholder="10" aria-describedby="shop_staff_num_addon">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="shop_staff_num_addon">人</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="shop_detail">店舗詳細</label>
                            <textarea class="form-control" name="shop_detail" rows="3">{{ $shop->detail }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>駐車場</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="shop_parking" id="shop_parking_true" value="1" {{ $shop->parking == 1 ? "checked" : "" }}>
                                <label class="form-check-label" for="shop_parking_true">あり</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="shop_parking" id="shop_parking_false" value="0" {{ $shop->parking == 0 ? "checked" : "" }}>
                                <label class="form-check-label" for="shop_parking_false">なし</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">登録する</button>
                </div>
            </div>
        </div>
    </div>
    @endsection
