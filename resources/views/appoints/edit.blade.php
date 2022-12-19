<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="{{ asset('css/apoint.css') }}" rel="stylesheet">

<title>詳細画面</title>
</head>

<body>
<div class="main">
    <h1 class="edit_title">Techis.Salon</h1>

    <div class="edit-picture-wrrper">
        <img class="edit_picture" src="{{ asset('img/fukuoka-riyou-gstyle1-860x645.jpg') }}" alt="">
    </div>


    <div class="salon_data">
        <div class="salon_name">
            <label class="edit-name" for="edit-name">サロン名</label>
            <span>{{ $shop->shop_name }}</span>
        </div>
        
        <div class="salon_address">
            <label class="edit-address" for="edit-address">住所</label>
            <span>{{ $shop->address }}</span>
        </div>

        <div class="salon_time">
            <label class="edit-time" for="edit-time">営業時間</label>
            <span>{{ $shop->open_hour }}</span>
        </div>

        <div class="salon_holiday">
            <label class="edit-holiday" for="edit-holiday">定休日</label>
            <span>{{ $shop->close_day }}</span>
        </div>

        <div class="salon_tel">
            <label class="edit-tel" for="edit-tel">電話番号</label>
            <span>{{ $shop->tel }}</span>
        </div>

        <div class="salon_seat">
            <label class="edit-seat" for="edit-seat">座席数</label>
            <span>{{ $shop->seat_num }}</span>
        </div>

        <div class="salon_crew">
            <label class="edit-crew" for="edit-crew">スタッフ人数</label>
            <span>{{ $shop->staff_num }}</span>
        </div>

        <div class="salon_shopedit">
            <label for="shop-edit" class="shop-edit">店舗詳細</label>
            <span>{{ $shop->detail }}</span>
        </div>

        <div class="salon_parking">
            <label class="edit-parking" for="edit-parking">駐車場</label>
            <span>{{ $shop->parking == 1 }}あり</span>
            <span>{{ $shop->parking == 0 }}なし</span>
        </div>

        <div class="edit-btn" >
            <a href="{{ url('/appoint?shop_id=1') }}">予約</a>
        </div>

        <div>
            <input type="hidden" value="{{ $shop['shop_name'] }}" name="shop_name">
            <input type="hidden" value="{{ $shop['address'] }}"name="address">
            <input type="hidden" value="{{ $shop['open_hour'] }}"name="open_hour">
            <input type="hidden" value="{{ $shop['close_day'] }}"name="close_day">
            <input type="hidden" value="{{ $shop['tel'] }}"name="tel">
            <input type="hidden" value="{{ $shop['seat_num'] }}"name="seat_num">
            <input type="hidden" value="{{ $shop['staff_num'] }}"name="staff_num">
            <input type="hidden" value="{{ $shop['detail'] }}"name="detail">
            <input type="hidden" value="{{ $shop['parking'] }}"name="parking">
        </div>

    </div>



</div>


</body>