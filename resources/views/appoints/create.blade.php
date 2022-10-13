<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="{{ asset('css/apoint.css') }}" rel="stylesheet">

<title>予約画面</title>
</head>


<body>



<form class="row g-3" method="POST" action="/appoint">


<h1 class="apointment">予約画面</h1>

  @csrf

  <p class="date">
    <input class="appoint-date" type="date" name="date" id="form-date">
  </p>

  <p class="name">
      <label class="appointment-name" for="form-name">名前<span class="badge bg-danger">必須</span></label>
      <input class="appoint-name" type="text" name="name" id="form-name" required>
  </p>

  <p class="email">
      <label class="appointment-email" for="form-email">メールアドレス<span class="badge bg-danger">必須</span></label>
      <input class="appoint-email" type="email" name="email" id="form-email" required>
  </p>

  <p class="tel">
      <label class="appointment-tel" for="form-tel">電話番号<span class="badge bg-danger">必須</span></label>
      <input class="appoint-tel" type="tel" name="tel" id="form-tel" required>
  </p>
  
  <div class="btn" >
    <button type="submit" class="btn btn-primary">確認</button>
  </div>
</form>
  
</body>
</html>