<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/edit.css')}}">
</head>

<body>
    <nav>
        <p>人易科技面試前測驗</p>
    </nav>
    <main>
        <div>
            <form class="list" action="/update/{{ $data->id}}" method="post">
                @csrf
                <div>
                    <p>帳號</p><input type="text" name="account" value="{{ $data->account ?? '' }}">
                </div>
                <div>
                    <p>姓名</p><input type="text" name="name" value="{{ $data->name ?? '' }}">
                </div>
                <div>
                    {{-- <p>{{$data->gender}}</p> --}}
                    <p>性別</p><select name="gender">
                        @if ($data->name == 0)
                        @endif
                        <option value="1">男</option>
                        <option value="0" @if ($data->gender == 0) {{ "selected" }} @endif>女</option>
                    </select>
                </div>
                <div>
                    <p>生日</p><input type="date" name="birthday" value="{{ $data->birthday ?? '' }}">
                </div>
                <div>
                    <p>信箱</p><input type="mail" name="mail" value="{{ $data->mail ?? '' }}">
                </div>
                <div>
                    <p>備註</p><input type="text" name="note" value="{{ $data->note ?? '' }}">
                </div>
                <button type="submit">修改</button>
                <a href="/list"><button type="button">取消</button></a>
            </form>
        </div>
    </main>
</body>

</html>
