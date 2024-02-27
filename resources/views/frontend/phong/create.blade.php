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
<h1 class="text-center">Thêm 1 phòng</h1>
<form action="{{ route('phong.store') }}" method="POST">
    @csrf
    <div class="mb-3 mt-3">
        <label for="TenPhong">Tên phòng:</label>
        <input class="form-control" type="text" name="TenPhong" id="TenPhong">
        @error('TenPhong')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="GioiThieuPhong">Giới thiệu:</label>
        <textarea class="form-control" rows="5" id="GioiThieuPhong" name="GioiThieuPhong"></textarea>
        @error('GioiThieuPhong')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="DonGia">Đơn giá:</label>
        <input class="form-control" type="text" id="DonGia" name="DonGia"></input>
        @error('DonGia')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="TinhTrang">Tình trạng:</label>
        <input class="form-control" type="text" id="TinhTrang" name="TinhTrang"></input>
        @error('TinhTrang')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button class="btn btn-success" type="submit">Thêm</button>
</form>

<script src="{{asset("bootstrap.bundle.min.js")}}"></script>
</body>
</html>
