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

    <img class="edit_picture" src="{{ asset('img/fukuoka-riyou-gstyle1-860x645.jpg') }}" alt="">


    <div class="salon_data">
        <label class="edit-name" for="edit-name">サロン名</label>
        <span class="salon_name">Techis.Salon[テックアイエス.サロン]</span>

        <div>
            <label class="edit-time" for="edit-time">営業時間</label>
            <span class="salon_time">9:00~22:00</span>
        </div>

        <div>
            <label class="edit-holiday" for="edit-holiday">定休日</label>
            <span class="salon_holiday">第3月曜日</span>
        </div>

        <div>
            <label class="edit-price" for="edit-price">価格</label>
            <span class="salon_price">¥3,000~</span>
        </div>

        <div>
            <label class="edit-address" for="edit-address">住所</label>
            <span class="salon_address">IT県テック市アイエス町555-5</span>
        </div>

        <div>
            <label class="edit-tel" for="edit-tel">電話番号</label>
            <span class="salon_tel">55555555555</span>
        </div>

        <div>
            <label class="edit-seat" for="edit-seat">座席数</label>
            <span class="salon_seat">10席</span>
        </div>

        <div>
            <label class="edit-crew" for="edit-crew">スタッフ人数</label>
            <span class="salon_crew">5人</span>
        </div>

        <div>
            <label class="edit-parking" for="edit-parking">駐車場</label>
            <span class="salon_parking">あり</span>
        </div>
    </div>
</div>


</body>