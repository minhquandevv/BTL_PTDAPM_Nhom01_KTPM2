<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset("bootstrap.css")}}" rel="stylesheet">
    <title>Document</title>
</head>
<body class="container">
<h1 class="text-center">Sửa</h1>
<form action="{{ route('taikhoan.update', $taikhoan) }}" method="POST">
    @csrf
    @method('PUT')
    {{ $taikhoan->TenPhong }}
    <div class="mb-3">
        <label for="MatKhau">Mật khẩu cũ:</label>
        <input class="form-control" type="password" id="MatKhau" name="MatKhau"/>
        @error('MatKhau')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
    </div>
    <div class="mb-3">
        <label for="MatKhauNew">Mật khẩu mới:</label>
        <input class="form-control" type="password" id="MatKhauNew" name="MatKhauNew"/>
        @error('MatKhauNew')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="MatKhauNewConf">Xác nhận mật khẩu mới:</label>
        <input class="form-control" type="password" id="MatKhauNewConf" name="MatKhauNewConf"/>
        @error('MatKhauNewConf')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    @if(session('passwordIncorrect'))
        <div class="alert alert-danger">
            {{ session('passwordIncorrect') }}
        </div>
    @endif
    <button class="btn btn-success" type="submit">Cập nhật</button>
</form>

<link href="{{asset("bootstrap.css")}}" rel="stylesheet">
</body>
</html>
