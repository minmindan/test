<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <script src="{{asset('JavaScript/test.js')}}"></script>
</head>
<body>
    <nav>
        <p>人易科技面試前測驗</p>
    </nav>
    <main>
        <div>
            <form action="/create" method="post">
                @csrf
                <p>帳號</p>
                <input type="text" name="account" style="text-transform:lowercase;">
                <p>姓名</p>
                <input type="text" name="name">
                <p>性別</p>
                <select name="gender">
                    <option value="1">男</option>
                    <option value="0">女</option>
                </select>
                <p>生日</p>
                <input type="date" name="birthday">
                <p>信箱</p>
                <input type="mail" name="mail">
                <p>備註</p>
                <input type="text" name="note">
                <button type="submit">送出</button>
            </form>
        </div>
    </main>
</body>
</html>
