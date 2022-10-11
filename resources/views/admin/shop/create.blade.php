@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">管理画面 店舗情報登録</div>
                <div class="card-body">
                    <form action="/admin/shop/create" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="shop_name">店舗名</label>
                            <input type="text" class="form-control" name="shop_name" placeholder="店舗名">
                        </div>
                        <div class="form-group">
                            <label for="shop_address">住所</label>
                            <textarea class="form-control" name="shop_address" rows="2"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="shop_open_hour">営業時間</label>
                            <input type="text" class="form-control" name="shop_open_hour" placeholder="09:00〜18:00">
                        </div>
                        <div class="form-group">
                            <label for="shop_close_day">定休日</label>
                            <input type="text" class="form-control" name="shop_close_day" placeholder="毎週水曜日">
                        </div>
                        <div class="form-group">
                            <label for="shop_tel">電話番号</label>
                            <input type="tel" class="form-control" name="shop_tel" placeholder="04712345678">
                        </div>
                        <div class="form-group">
                            <label for="shop_seat_num">座席数</label>
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" name="shop_seat_num" placeholder="10" aria-describedby="shop_seat_num_addon">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="shop_seat_num_addon">席</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="shop_seat_num">スタッフ数</label>
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" name="shop_staff_num" placeholder="10" aria-describedby="shop_staff_num_addon">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="shop_staff_num_addon">人</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="shop_detail">店舗詳細</label>
                            <textarea class="form-control" name="shop_detail" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label>駐車場</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="shop_parking" id="shop_parking_true" value="1" checked>
                                <label class="form-check-label" for="shop_parking_true">あり</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="shop_parking" id="shop_parking_false" value="0">
                                <label class="form-check-label" for="shop_parking_false">なし</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">登録する</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
