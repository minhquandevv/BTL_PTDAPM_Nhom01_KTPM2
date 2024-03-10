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
<h1 class="text-center">Sửa</h1>
<form action="{{ route('rooms.update', $room) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3 mt-3">
        <label for="TenPhong">Tên:</label>
        <input class="form-control" value="{{ $room->TenPhong }}" type="text" name="TenPhong" id="TenPhong">
        @error('TenPhong')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="GioiThieuPhong">Mô tả:</label>
        <textarea class="form-control" rows="5" id="GioiThieuPhong" name="GioiThieuPhong">{{ $room->GioiThieuPhong }}</textarea>
        @error('GioiThieuPhong')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="DonGia">Đơn giá phòng:</label>
        <input class="form-control" type="text" value="{{ $room->DonGia }}" id="DonGia" name="DonGia"/>
        @error('DonGia')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="TinhTrang">Tình trạng:</label>
        <input class="form-control" type="text" value="{{ $room->TinhTrang }}" id="TinhTrang" name="TinhTrang"/>

    </div>
    <button class="btn btn-success" type="submit">Cập nhật</button>
</form>
<link href="{{asset("bootstrap.css")}}" rel="stylesheet">
</body>
</html>
