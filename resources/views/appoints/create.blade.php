<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>予約画面</title>
</head>
<body>



<form class="row g-3" method="POST" action="/appoint">


<div class="d-flex justify-content-center"><h1>予約画面</h1></div>

  @csrf

  <div class="name">
    <div class="d-flex justify-content-center">
      <label for="form-name">名前</label>
      <input type="text" name="name" id="form-name" value="太郎"required>
    </div>
  </div>

  <div class="d-flex justify-content-center">
    <label for="form-email">メールアドレス</label>
    <input type="email" name="email" id="form-email" value="aaa@aaa.com">
  </div>

  <div class="d-flex justify-content-center">
    <label for="form-tel">電話番号</label>
    <input type="tel" name="tel" id="form-tel" value="000000000">
  </div>

  <div class="d-flex justify-content-center">
    <label for="form-pass">パスワード</label>
    <input type="password" name="password" id="form-password" value="aa">
  </div>

  
  <div class="d-flex justify-content-center">
    <button type="submit" class="btn btn-primary">確認</button>
  </div>

  
</form>
  
</body>
</html>