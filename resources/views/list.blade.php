<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/list.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
</head>

<body>
    <nav>
        <p>人易科技面試前測驗</p>
    </nav>
    <main>
        <div>
            <table id="listmain" class="display">
                <thead>
                    <tr>
                        <th>帳號</th>
                        <th>姓名</th>
                        <th>性別</th>
                        <th>生日</th>
                        <th>信箱</th>
                        <th>備註</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $data)
                        <tr id='list{{ $data->id }}'>
                            <td>{{ $data->account ?? '' }}</td>
                            <td>{{ $data->name ?? '' }}</td>
                            <td>@if ($data->gender == 0)
                                {{'女'}}
                                @elseif ($data->gender == 1)
                                {{'男'}}
                            @endif</td>
                            <td>{{ $data->birthday ?? '' }}</td>
                            <td>{{ $data->mail ?? '' }}</td>
                            <td>{{ $data->note ?? '' }}</td>
                            <td>
                                <a href="/edit/{{$data->id}}">
                                    <button class="btn btn-success">編輯</button>
                                </a>
                                <button class="delete" onclick="deldata({{ $data->id }})">刪除</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
    <footer>
        <a href="/">
            <button type="submit">返回註冊頁</button>
        </a>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#listmain').DataTable();
        });


        function deldata(id) {
            if (confirm('是否要刪除') == true) {
                let formData = new FormData();
                formData.append('_method', 'post');
                formData.append('_token', '{{ csrf_token() ?? '' }}');

                fetch('/delete/' + id, {
                    method: 'POST',
                    body: formData
                }).then(function(response) {
                    let element = document.querySelector('#list' + id)
                    element.parentNode.removeChild(element);
                })
            }
        }
    </script>
</body>

</html>
