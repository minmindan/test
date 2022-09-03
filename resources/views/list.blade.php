<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/list.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js">
</head>

<body>
    <nav>
        <p>人易科技面試前測驗</p>
    </nav>
    <main>
        <div>
            <table id="table" class="display">
                <thead>
                    <tr>
                        <th>Column 1</th>
                        <th>Column 2</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Row 1 Data 1</td>
                        <td>Row 1 Data 2</td>
                    </tr>
                    <tr>
                        <td>Row 2 Data 1</td>
                        <td>Row 2 Data 2</td>
                    </tr>
                </tbody>
            </table>


            @foreach ($datas as $data)
                <div class="list">
                    <div>
                        <p>帳號</p>
                        <p>{{ $data->account }}</p>
                    </div>
                    <div>
                        <p>姓名</p>
                        <p>{{ $data->name }}</p>
                    </div>
                    <div>
                        <p>性別</p>
                        <p>{{ $data->gender }}</p>
                    </div>
                    <div>
                        <p>生日</p>
                        <p>{{ $data->birthday }}</p>
                    </div>
                    <div>
                        <p>信箱</p>
                        <p>{{ $data->mail }}</p>
                    </div>
                    <div>
                        <p>備註</p>
                        <p>{{ $data->note }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
    <footer>
        <button type="submit">返回註冊頁</button>
    </footer>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>
</body>

</html>
