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
<body class="container">
<h1 class="text-center">Tao tai khoan</h1>
<form action="{{ route('accounts.store') }}" method="POST">
    @csrf
    <div class="mb-3 mt-3">
        <label for="TenDangNhap">Tên dang nhap:</label>
        <input class="form-control" type="text" name="TenDangNhap" id="TenDangNhap">
        @error('TenDangNhap')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
    </div>
    <div class="mb-3 mt-3">
        <label for="MatKhau">pass:</label>
        <input class="form-control" type="password" name="MatKhau" id="MatKhau">
        @error('MatKhau')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        @if(session('errorPass'))
            <div class="alert alert-danger">
                {{ session('errorPass') }}
            </div>
        @endif
    </div>
    <div class="mb-3 mt-3">
        <label for="MatKhauCof">pass xac nhan:</label>
        <input class="form-control" type="password" name="MatKhauCof" id="MatKhauCof">
        @error('MatKhauCof')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <button class="btn btn-success" type="submit">Thêm</button>
</form>

<script src="{{asset("bootstrap/js/bootstrap.js")}}"></script>
</body>
</html>
