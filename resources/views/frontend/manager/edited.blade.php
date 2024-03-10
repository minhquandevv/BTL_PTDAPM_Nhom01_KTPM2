@extends('frontend.component.layout-employee')
@section('content')
    <style>
        label{
            font-size: 20px;
            font-weight: 500;
            line-height: 20px;
            letter-spacing: 0.02em;
            text-align: left;

        }


        #togglePassword:hover{
            background-color: white;
            color: black;
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="d-flex justify-content-between align-items-center mx-auto col-12" style="width:1340px ; padding: 40px " >
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
            <form class="d-flex justify-content-around border rounded mx-auto col-12" style="width: 1358px ; height: 671px ">
                <div class="align-items-center col-4" style="margin-top: 10vh">
                    <div class="mb-3 row align-items-center">
                        <label for="exampleInputEmail1" class="form-label col">Tên đăng nhập:</label>
                        <input type="text" class="form-control col" value="12345" readonly id="tendangnhap">
                    </div>
                    <div class="mb-3 row align-items-center">
                        <label for="exampleInputPassword1" class="form-label col">Mật khẩu:</label>
                        <div class="input-group col form-control">
                            <input type="password" class="form-control border-0" id="exampleInputPassword1" oninput="togglePasswordButtonVisibility()" value="8888" readonly>
                            <div class="input-group-append align-items-center" >
                                <button class="btn btn-outline-secondary" type="button" id="togglePassword" style=" display: none; border: none; font-size: 12px; text-decoration: underline" onclick="togglePasswordVisibility()">Hiển thị</button>
                            </div>
                        </div>
                    </div>
    
                    <div class="mb-3 row align-items-center">
                        <label for="exampleInputPassword1" class="form-label col">Chức vụ:</label>
                        <input type="text" class="form-control col" value="12345" readonly id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 row align-items-center">
                        <label for="exampleInputPassword1" class="form-label col">Mã nhân viên:</label>
                        <input type="text" class="form-control col" value="12345" readonly id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 row align-items-center">
                        <label for="exampleInputPassword1" class="form-label col">Tên nhân viên:</label>
                        <input type="text" class="form-control col" value="12345" readonly id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 row align-items-center">
                        <label for="exampleInputPassword1" class="form-label col">Ngày sinh:</label>
    <input type="date" class="form-control col" value="12345" readonly id="exampleInputPassword1" placeholder="acb">
                    </div>
                    <div class="mb-3 row align-items-center">
                        <label for="form-check form-check-inline" class="col">Giới tính:</label>
                        <div class="form-control col border-0 d-flex"  id="gender-profile">
                            <div class="form-check form-check-inline col align-items-center">
                                <input class="form-check-input col" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
                                <label class="form-check-label " for="inlineRadio1" style="font-weight: 400 ; font-size: 16px ; line-height: 16px ">Nam</label>
                            </div>
                            <div class="form-check form-check-inline col ">
                                <input class="form-check-input col" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2" style="font-weight: 400 ; font-size: 16px ; line-height: 16px ">Nữ</label>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="align-items-center col-4" style="margin-top: 10vh">
                    <div class="mb-3 row align-items-center">
                        <label for="exampleInputEmail1" class="form-label col">Địa chỉ:</label>
                        <input type="email" class="form-control col" value="12345" readonly id="tendangnhap" >
                    </div>
                    <div class="mb-3 row align-items-center">
                        <label for="exampleInputEmail1" class="form-label col">Email:</label>
                        <input type="email" class="form-control col" value="12345" readonly id="tendangnhap" >
                    </div>
                    <div class="mb-3 row align-items-center">
                        <label for="exampleInputEmail1" class="form-label col">Số điện thoại:</label>
                        <input type="email" class="form-control col" value="12345" readonly id="tendangnhap" >
                    </div>
                    <div class="mb-3 row align-items-center">
                        <label for="exampleInputEmail1" class="form-label col">Lương:</label>
                        <input type="email" class="form-control col" value="12345" readonly id="tendangnhap" >
                    </div>
                   
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
