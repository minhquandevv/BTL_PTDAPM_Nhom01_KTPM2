<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset("bootstrap/css/bootstrap.css")}}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1 class="text-center">Thông tin chi tiết về tai khoan</h1>
    <div class="mt-5">
        MaTK: {{ $account->MaTK}}
        <br/>
        MaLoaiTK:{{ $account->MaLoaiTK}}
        <br/>
        TenDangNhap:{{ $account->TenDangNhap}}
    </div>

    <a class="btn btn-info mt-4" href="{{ route('accounts.index') }}">Quay lại danh sách phòng</a>
</div>
<script src="{{asset("bootstrap.bundle.min.js")}}"></script>
</body>
</html>
