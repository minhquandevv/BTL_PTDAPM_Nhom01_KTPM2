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
<body>
<div class="container">
    <h1 class="text-center">Thông tin chi tiết về phòng</h1>

    <div class="mt-5">
        <h5>Mã phòng</h5>
        <p>{{ $phong->MaP }}</p>

        <h5>Tên phòng</h5>
        <p>{{ $phong->TenPhong }}</p>

        <h5>Giới thiệu phòng</h5>
        <p>{{ $phong->GioiThieuPhong }}</p>

        <h5>Đơn giá</h5>
        <p>{{ $phong->DonGia }}</p>

        <h5>Tình trạng</h5>
        <p>{{ $phong->TinhTrang }}</p>

        <h5>Ngày tạo</h5>
        <p>{{ $phong->created_at }}</p>

        <h5>Ngày cập nhật</h5>
        <p>{{ $phong->updated_at }}</p>
    </div>

    <a class="btn btn-info mt-4" href="{{ route('phong.index') }}">Quay lại danh sách phòng</a>
</div>
<script src="{{asset("bootstrap.bundle.min.js")}}"></script>
</body>
</html>
