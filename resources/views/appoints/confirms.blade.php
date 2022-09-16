<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<title>予約確認画面</title>
</head>
<body>
    <h1>予約確認画面</h1>

    <form class="row g-3" method="post" action="complete">
        @csrf
        <div>
            <label>名前:</label>
            <span>{{$input_data['name']}}</span>
        </div>


        <div>
            <label>メールアドレス:</label>
            <span>{{$input_data['email']}}</span>
        </div>

        <div>
            <label>電話番号:</label>
            <span>{{$input_data['tel']}}</span>
        </div>

        <div>
            <label>パスワード:</label>
            <span>{{$input_data['password']}}</span>
        </div>

        <div>
            <input type="hidden" value="{{ $input_data['name'] }}"name="name">
            <input type="hidden" value="{{ $input_data['email'] }}"name="email">
            <input type="hidden" value="{{ $input_data['tel'] }}"name="tel">
            <input type="hidden" value="{{ $input_data['password'] }}"name="password">
            <button type="submit" class="btn btn-primary">予約</button>
        </div>
    </form>
</body>
</html>