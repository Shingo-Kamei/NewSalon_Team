<h1>予約画面</h1>

<form method="POST" action="/index">
  @csrf

  <div>
    <label for="form-name">名前</label>
    <input type="text" name="name" id="form-name" required>
  </div>

  <div>
    <label for="form-email">メールアドレス</label>
    <input type="email" name="email" id="form-email">
  </div>

  <div>
    <label for="form-tel">電話番号</label>
    <input type="tel" name="tel" id="form-tel">
  </div>

  <div>
    <label for="form-pass">パスワード</label>
    <input type="password" name="password" id="form-password">
  </div>

  <button type="submit">ログイン</button>

</form>