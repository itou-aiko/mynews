<form action="/users" method="POST">
    @csrf
    <div>
        <label for="name">名前:</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="email">メールアドレス:</label>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <label for="password">パスワード:</label>
        <input type="password" name="password" id="password">
    </div>
    <button type="submit">登録</button>
</form>