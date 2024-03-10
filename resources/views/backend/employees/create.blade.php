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
<h1 class="text-center">Thêm 1 phòng</h1>
<form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="TenQL">Ten nv:</label>
        <input type="text" name="TenQL" >
    </div>
    <div class="mb-3">
        <label for="CCCD">CCCD:</label>
        <input type="text" name="CCCD" >
    </div>
    <div class="mb-3">
        <label for="NgaySinh">NgaySinh:</label>
        <input type="date" name="NgaySinh" >
    </div>
    <div class="mb-3">
        <label for="GioiTinh">GioiTinh:</label>
        <input type="text" name="GioiTinh" >
    </div>
    <div class="mb-3">
        <label for="DiaChi">DiaChi:</label>
        <input type="text" name="DiaChi" >
    </div>
    <div class="mb-3">
        <label for="Email">Email:</label>
        <input type="text" name="Email" >
    </div>
    <div class="mb-3">
        <label for="Password">Password:</label>
        <input type="text" name="Password" >
    </div>
    <div class="mb-3">
        <label for="SoDienThoai">SoDienThoai:</label>
        <input type="text" name="SoDienThoai" >
    </div>
    <input type="file" name="image" accept="image/*" required>
    <!-- Thêm các trường thông tin phòng khác tại đây -->
    <button class="btn btn-success" type="submit">Thêm</button>
</form>

<script src="{{asset("bootstrap/js/bootstrap.js")}}"></script>
</body>
</html>
