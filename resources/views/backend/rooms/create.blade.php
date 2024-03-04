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
<form action="{{ route('rooms.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="TenPhong">Tên Phòng:</label>
        <input type="text" name="TenPhong" required>
        @error('TenPhong')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="GioiThieuPhong">Giới Thiệu Phòng:</label>
        <textarea name="GioiThieuPhong" rows="4" required></textarea>
        @error('GioiThieuPhong')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="DonGia">Đơn Giá:</label>
        <input type="number" name="DonGia" required>
        @error('DonGia')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="TinhTrang">Tình Trạng:</label>
        <input type="text" name="TinhTrang" required>
        @error('TinhTrang')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="ViewHuongBien">View Hướng Biển:</label>
        <input type="checkbox" name="ViewHuongBien">
        @error('ViewHuongBien')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="CoBonTamNgoi">Có Bồn Tắm Nằm:</label>
        <input type="checkbox" name="CoBonTamNgoi">
        @error('CoBonTamNgoi')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="KichThuoc">Kích Thước:</label>
        <input type="text" name="KichThuoc">
        @error('KichThuoc')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="MaLoaiPhong">Loại Phòng:</label>
        <select name="MaLoaiPhong" required>
            @foreach($roomTypes as $roomType)
                <option value="{{ $roomType->MaLoaiPhong }}">{{ $roomType->TenLoaiPhong }}</option>
            @endforeach
        </select>
        @error('MaLoaiPhong')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="SoNguoiToiDa">Số Người Tối Đa:</label>
        <input type="number" name="SoNguoiToiDa">
        @error('SoNguoiToiDa')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="SoGiuong">SoGiuong:</label>
        <input type="number" name="SoGiuong">
        @error('SoGiuong')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="WifiMienPhi">WifiMienPhi:</label>
        <input type="checkbox" name="WifiMienPhi">
        @error('WifiMienPhi')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="TVTrongPhong">TVTrongPhong:</label>
        <input type="checkbox" name="TVTrongPhong">
        @error('TVTrongPhong')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="DienTichBalcon">DienTichBalcon:</label>
        <input type="number" name="DienTichBalcon">
        @error('DienTichBalcon')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="SoPhongTam">SoPhongTam:</label>
        <input type="number" name="SoPhongTam">
        @error('SoPhongTam')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <input type="file" name="image" accept="image/*" required>
    <!-- Thêm các trường thông tin phòng khác tại đây -->
    <button class="btn btn-success" type="submit">Thêm</button>
</form>

<script src="{{asset("bootstrap/js/bootstrap.js")}}"></script>
</body>
</html>
