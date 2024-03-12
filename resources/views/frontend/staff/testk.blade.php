@extends('frontend.component.layout-employee')
@section('content')
    <style>
        label {
            font-size: 20px;
            font-weight: 500;
            line-height: 20px;
            letter-spacing: 0.02em;
            text-align: left;

        }


        #togglePassword:hover {
            background-color: white;
            color: black;
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="d-flex justify-content-between align-items-center mx-auto col-12"
                 style="width:1340px ; padding: 40px ">
                <div style="width: 240px;">
                    <a href="/manageemployeeaccounts">
                        <i class="fa-solid fa-angle-left" style="width: 16px ; height: 16px ; color: black"></i>
                    </a>
                </div>
                <span style="font-weight: 500; font-size: 25px ; line-height: 20px">Thông tin nhân viên </span>
                <div style="width: 240px; background: white"></div>
            </div>
        </div>

        <div class="row ">
            <form action="{{ route('updateEmployee') }}" method="POST"
                  class="d-flex justify-content-around border rounded mx-auto col-12"
                  style="width: 1358px ; height: 671px ">
                @csrf
                @method('PUT')
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <input class="d-none" value="{{$employee['MaNV']}}" name="MaNV" readonly>
                <div class="align-items-center col-4" style="margin-top: 10vh">
                    {{--                    <div class="mb-3 row align-items-center">--}}
                    {{--                        <label for="exampleInputEmail1" class="form-label col">Tên đăng nhập:</label>--}}
                    {{--                        <input type="text" class="form-control col" value="12345" readonly id="tendangnhap">--}}
                    {{--                    </div>--}}
                    {{--                    <div class="mb-3 row align-items-center">--}}
                    {{--                        <label for="exampleInputPassword1" class="form-label col">Mật khẩu:</label>--}}
                    {{--                        <div class="input-group col form-control">--}}
                    {{--                            <input type="password" class="form-control border-0" id="exampleInputPassword1"--}}
                    {{--                                   oninput="togglePasswordButtonVisibility()" value="8888" readonly>--}}
                    {{--                            <div class="input-group-append align-items-center">--}}
                    {{--                                <button class="btn btn-outline-secondary" type="button" id="togglePassword"--}}
                    {{--                                        style=" display: none; border: none; font-size: 12px; text-decoration: underline"--}}
                    {{--                                        onclick="togglePasswordVisibility()">Hiển thị--}}
                    {{--                                </button>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}

                    <div class="mb-3 row align-items-center">
                        <label for="exampleInputPassword1" class="form-label col">Chức vụ:</label>
                        <input type="text" class="form-control col" value="{{$employee['Chucvu']}}" readonly
                               id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 row align-items-center">
                        <label for="exampleInputPassword1" class="form-label col">Mã nhân viên:</label>
                        <input type="text" class="form-control col" value="{{$employee['MaNV']}}" readonly
                               id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 row align-items-center">
                        <label for="exampleInputPassword1" class="form-label col">Tên nhân viên:</label>
                        <input type="text" class="form-control col" value="{{$employee['TenQL']}}" name="TenQL"
                               id="exampleInputPassword1">
                        @error('Chucvu')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 row align-items-center">
                        @php
                            $ngay_moi = date("Y-m-d", strtotime($employee['NgaySinh']));
                        @endphp
                        <label for="exampleInputPassword1" class="form-label col">Ngày sinh:</label>
                        <input type="date" class="form-control col" value="{{$ngay_moi}}" name="NgaySinh"
                               id="exampleInputPassword1"
                               placeholder="acb">
                        @error('NgaySinh')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 row align-items-center">
                        <label for="form-check form-check-inline" class="col">Giới tính:</label>
                        <div class="form-control col border-0 d-flex" id="gender-profile">
                            <div class="form-check form-check-inline col align-items-center">
                                <input class="form-check-input col" type="radio" name="GioiTinh"
                                       id="inlineRadio1" value="Nam" {{$employee['GioiTinh']=="Nam" ? "checked" : ""}} >
                                <label class="form-check-label " for="inlineRadio1"
                                       style="font-weight: 400 ; font-size: 16px ; line-height: 16px ">Nam</label>
                            </div>
                            <div class="form-check form-check-inline col ">
                                <input class="form-check-input col" type="radio" name="GioiTinh"
                                       id="inlineRadio2" {{$employee['GioiTinh']=="Nu" ? "checked" : ""}} value="Nu">
                                <label class="form-check-label" for="inlineRadio2"
                                       style="font-weight: 400 ; font-size: 16px ; line-height: 16px ">Nữ</label>
                            </div>
                        </div>
                        @error('GioiTinh')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="align-items-center col-4" style="margin-top: 10vh">
                    <div class="mb-3 row align-items-center">
                        <label for="exampleInputEmail1" class="form-label col">Địa chỉ:</label>
                        <input type="text" class="form-control col" value="{{$employee['DiaChi']}}" name="DiaChi"
                               id="tendangnhap">
                        @error('DiaChi')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 row align-items-center">
                        <label for="exampleInputEmail1" class="form-label col">Email:</label>
                        <input type="email" class="form-control col" value="{{$employee['Email']}}" name="Email"
                               id="tendangnhap">
                        @error('Email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 row align-items-center">
                        <label for="exampleInputEmail1" class="form-label col">Số điện thoại:</label>
                        <input type="text" class="form-control col" value="{{$employee['SoDienThoai']}}"
                               name="SoDienThoai"
                               id="tendangnhap">
                        @error('SoDienThoai')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 row align-items-center">
                        <label for="exampleInputEmail1" class="form-label col">Lương:</label>
                        <input type="text" class="form-control col" value="{{rand(10000000, 20000000)}}"
                               id="tendangnhap" name="Luong"/>
                        @error('Luong')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 row align-items-center">
                        <label for="exampleInputEmail1" class="form-label col">pass:</label>
                        <input type="password" class="form-control col" name="Password"
                               id="tendangnhap">
                        @error('Password')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit">Cập nhật</button>

                </div>
            </form>

        </div>
    </div>


    <script>
        function togglePasswordButtonVisibility() {
            var passwordInput = document.getElementById("exampleInputPassword1");
            var passwordButtonContainer = document.getElementById("togglePassword");
            // Kiểm tra nếu ô nhập mật khẩu có giá trị, hiển thị nút
            if (passwordInput.value !== "") {
                passwordButtonContainer.style.display = "block";
            } else {
                passwordButtonContainer.style.display = "none";
            }
        }

        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("exampleInputPassword1");
            // Nếu là "password", chuyển sang "text" để hiển thị mật khẩu
            // Nếu là "text", chuyển sang "password" để ẩn mật khẩu
            passwordInput.type = (passwordInput.type === "password") ? "text" : "password";
            document.getElementById('togglePassword').textContent = (passwordInput.type === "password") ? "hiển thị" : "ẩn";
        }
    </script>
@endsection
