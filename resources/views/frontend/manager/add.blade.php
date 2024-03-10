@extends('frontend.component.layout-manager')
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

    <div class="container-fluid " style="min-height: 100vh;">
        <form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="d-flex justify-content-between align-items-center mx-auto col-12"
                     style="width:1340px ; padding: 40px ">
                    <div style="width: 240px;">
                        <a href="/manageemployeeaccounts">
                            <i class="fa-solid fa-angle-left" style="width: 16px ; height: 16px ; color: black"></i>
                        </a>
                    </div>
                    <span style="font-weight: 500; font-size: 25px ; line-height: 20px">Thêm tài khoản </span>
                    <a href="/addemployeesuccess">
                        <button class="btn border 0" type="submit"
                                style="background:#FF385C linear-gradient(to right,#E61E4D00, #E31C5F80 50%, #D70466 100%); color: white ; width: 240px ; height: 48px">
                            Xác nhận thêm
                        </button>

                    </a>
                </div>
            </div>
            <div class="row ">
                <div class="d-flex justify-content-around border rounded mx-auto col-12"
                     style="width: 1358px ; height: 500px ">
                    <div class="align-items-center col-4" style="margin-top: 10vh">
                        <div class="mb-3 row align-items-center">
                            <label for="exampleInputEmail1" class="form-label col">Email:</label>
                            <input type="text" name="Email" class="form-control col" id="tendangnhap">
                            @error('Email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 row align-items-center">
                            <label for="exampleInputPassword1" class="form-label col">Mật khẩu:</label>
                            <div class="input-group col form-control">
                                <input type="password" name="Password" class="form-control border-0"
                                       id="exampleInputPassword1"
                                       oninput="togglePasswordButtonVisibility()">
                                <div class="input-group-append align-items-center">
                                    <button class="btn btn-outline-secondary" type="button" id="togglePassword"
                                            style=" display: none; border: none; font-size: 12px; text-decoration: underline"
                                            onclick="togglePasswordVisibility()">Hiển thị
                                    </button>
                                </div>
                            </div>
                            @error('Password')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        {{--                        <div class="mb-3 row align-items-center">--}}
                        {{--                            <label for="exampleInputPassword1" class="form-label col">Chức vụ:</label>--}}
                        {{--                            <input type="text" class="form-control col" id="exampleInputPassword1">--}}
                        {{--                        </div>--}}
                        {{--                        <div class="mb-3 row align-items-center">--}}
                        {{--                            <label for="exampleInputPassword1" class="form-label col">Mã nhân viên:</label>--}}
                        {{--                            <input type="text" class="form-control col" id="exampleInputPassword1">--}}
                        {{--                        </div>--}}
                        <div class="mb-3 row align-items-center">
                            <label for="exampleInputPassword1" class="form-label col">Tên nhân viên:</label>
                            <input type="text" name="TenQL" class="form-control col" id="exampleInputPassword1">
                            @error('TenQL')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 row align-items-center">
                            <label for="exampleInputPassword1" class="form-label col">Ngày sinh:</label>
                            <input type="date" name="NgaySinh" class="form-control col" id="exampleInputPassword1"
                                   placeholder="acb">
                            @error('NgaySinh')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 row align-items-center">
                            <label for="form-check form-check-inline" class="col">Giới tính:</label>
                            <div class="form-control col border-0 d-flex justify-content-center" id="gender-profile">
                                <div class="form-check form-check-inline col align-items-center">
                                    <input class="form-check-input col" type="radio" name="GioiTinh"
                                           id="inlineRadio1" value="Nam">
                                    <label class="form-check-label " for="inlineRadio1"
                                           style="font-weight: 400 ; font-size: 16px ; line-height: 16px ">Nam</label>
                                </div>
                                <div class="form-check form-check-inline col ">
                                    <input class="form-check-input col" type="radio" name="GioiTinh"
                                           id="inlineRadio2" value="Nu">
                                    <label class="form-check-label" for="inlineRadio2"
                                           style="font-weight: 400 ; font-size: 16px ; line-height: 16px ">Nữ</label>
                                </div>
                            </div>
                            @error('GioiTinh')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="align-items-center col-4" style="margin-top: 10vh">
                        <div class="mb-3 row align-items-center">
                            <label for="exampleInputEmail1" class="form-label col">Địa chỉ:</label>
                            <input type="text" name="DiaChi" class="form-control col" id="tendangnhap">
                            @error('DiaChi')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        {{--                        <div class="mb-3 row align-items-center">--}}
                        {{--                            <label for="exampleInputEmail1" class="form-label col">Email:</label>--}}
                        {{--                            <input type="email" class="form-control col" id="tendangnhap">--}}
                        {{--                        </div>--}}
                        <div class="mb-3 row align-items-center">
                            <label for="exampleInputEmail1" class="form-label col">Số điện thoại:</label>
                            <input type="text" name="SoDienThoai" class="form-control col" id="tendangnhap">
                            @error('SoDienThoai')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 row align-items-center">
                            <label for="exampleInputEmail1" class="form-label col">Lương:</label>
                            <input type="text" class="form-control col" id="tendangnhap">
                        </div>
                        <div class="mb-3 row align-items-center">
                            <label for="exampleInputEmail1" class="form-label col">CCCD:</label>
                            <input type="text" name="CCCD" class="form-control col" id="tendangnhap">
                        </div>
{{--                        <div class="mb-3 row align-items-center d-flex">--}}
                        {{--                            <label for="exampleInputEmail1" class="form-label col">Img :</label>--}}
                        {{--                            <input id="imageInput" type="file" name="image" accept="image/*" >--}}
                        {{--                            <img id="displayedImage" class="w-100" style="display: none;"--}}
                        {{--                                 alt="Selected Image">--}}
                        {{--                            @error('image')--}}
                        {{--                            <div class="text-danger">{{ $message }}</div>--}}
                        {{--                            @enderror--}}
                        {{--                        </div>--}}

                    </div>
                </div>
            </div>
        </form>
    </div>
    <script>
        document.getElementById('imageInput').addEventListener('change', function (e) {
            const fileInput = e.target;
            const file = fileInput.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    const displayedImage = document.getElementById('displayedImage');
                    displayedImage.src = e.target.result;
                    displayedImage.style.display = 'block';


                };
                reader.readAsDataURL(file);
            }
        });

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

