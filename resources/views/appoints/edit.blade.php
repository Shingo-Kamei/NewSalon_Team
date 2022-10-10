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
            <span>Techis.Salon[テックアイエス.サロン]</span>
        </div>

        <div class="salon_time">
            <label class="edit-time" for="edit-time">営業時間</label>
            <span>9:00~22:00</span>
        </div>

        <div class="salon_holiday">
            <label class="edit-holiday" for="edit-holiday">定休日</label>
            <span>第3月曜日</span>
        </div>

        <div class="salon_price">
            <label class="edit-price" for="edit-price">価格</label>
            <span>¥3,000~</span>
        </div>

        <div class="salon_address">
            <label class="edit-address" for="edit-address">住所</label>
            <span>IT県テック市アイエス町555-5</span>
        </div>

        <div class="salon_tel">
            <label class="edit-tel" for="edit-tel">電話番号</label>
            <span>55555555555</span>
        </div>

        <div class="salon_seat">
            <label class="edit-seat" for="edit-seat">座席数</label>
            <span>10席</span>
        </div>

        <div class="salon_crew">
            <label class="edit-crew" for="edit-crew">スタッフ人数</label>
            <span>5人</span>
        </div>

        <div class="salon_parking">
            <label class="edit-parking" for="edit-parking">駐車場</label>
            <span>あり</span>
        </div>

        <div class="edit-btn" >
            <!-- <button type="submit" class="btn btn-primary">確認</button> -->
            <a href="{{ url('/appoint?user_id=1&name=test') }}">予約</a>
        </div>
    </div>

    <!-- <table class="salon_data">
        <tr class="salon_name">
            <th class="edit-name">サロン名</th>
            <th class="edit_subname">Techis.Salon[テックアイエス.サロン]</th>
        </tr>
        <tr class="salon_time">
            <th class="edit-time">営業時間</th>
            <th>9:00~22:00</th>
        </tr>
        <tr class="salon_holiday">
            <th class="edit-holiday">定休日</th>
            <th>第3月曜日</th>
        </tr>
        <tr class="salon_price">
            <th class="edit-price">価格</th>
            <th>3000~</th>
        </tr>
        <tr class="salon_address">
            <th class="edit-address">住所</th>
            <th>IT県テック市アイエス町555-5</th>
        </tr>
        <tr class="salon_tel">
            <th class="edit-tel">電話番号</th>
            <th>55555555555</th>
        </tr>
        <tr class="salon_seat">
            <th class="edit-seat">座席数</th>
            <th>10席</th>
        </tr>
        <tr class="salon_crew">
            <th class="edit-crew">スタッフ人数</th>
            <th>5人</th>
        </tr>
        <tr class="salon_parking">
            <th class="edit-parking">駐車場</th>
            <th>あり</th>
        </tr>
    </table>

    <div class="edit-btn" >
        <!-- <button type="submit" class="btn btn-primary">確認</button> -->
        <!-- <a href="{{ url('/appoint') }}">予約</a> -->
    <!-- </div> -->



















</div>


</body>