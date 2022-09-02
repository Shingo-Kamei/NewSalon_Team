<h1>予約画面</h1>

<form method="POST" action="/create">
  @csrf

  <div>
    <label for="form-shop_name">店舗名</label>
    <input type="text" name="name" id="form-shop_name" required>
  </div>

  <div>
    <label for="form-name">名前</label>
    <input type="text" name="name" id="form-name" required>
  </div>

  <div>
    <label for="form-tel">電話番号</label>
    <input type="tel" name="telephone" id="form-tel">
  </div>

  <div>
    <label for="form-appointment">予約日時</label>
    <input type="text" name="appointment" id="form-appointment">
  </div>

  <button type="submit">予約</button>

</form>