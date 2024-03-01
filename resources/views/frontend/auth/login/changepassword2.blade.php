<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Changepassword 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5 rounded"  id="create-profile">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card" >
                <div class="card-header text-center fw-bold d-flex  padding-form" style="padding: 22px 24px; background: none ">
                    <a class="text-dark text-decoration-none" href="">
                        <i class="fa-solid fa-chevron-left"></i>
                    </a>

                    <div class=" text-login text-header w-100" style="line-height: 20px ; font-size: 16px ; font-weight: 700 ">Chọn mật khẩu mới</div>
                </div>
                <div id="login-body" class="card-body">
                    <p class="text-center grey-text text-5 d-flex justify-content-space-between " style="font-weight: 400 ; font-size: 16px ; line-height: 26px">Đảm bảo mật khẩu phải có đủ 8 kí tự trở lên<div></div><div></div></p>
                    <div class="border rounded overflow-hidden">

                        <div class="form-floating border-bottom d-flex" >
                            <input type="password" class="form-control round-0 text-8 border-0" id="floatingPassword" placeholder="Email" >
                            <label for="floatingPassword">Nhập mật khẩu mới</label>
                            <div class="input-group-append">
                                <button class="transparent-btn text-center" type="button" id="passwordButtonContainer" style="font-size: 12px ; font-weight: 500; line-height: 20px ; text-decoration: underline " onclick="togglePasswordVisibility1()">Hiển thị</button>
                            </div>
                        </div>

                        <div class="form-floating d-flex">
                            <input type="password" class="form-control round-0 text-8 border-0" id="password" placeholder="Mật khẩu" >
                            <label for="password">Nhập lại mật khẩu</label>
                            <div class="input-group-append">
                                <button class="transparent-btn text-center" type="button" id="passwordButtonContainer" style="font-size: 12px ; font-weight: 500; line-height: 20px ; text-decoration: underline " onclick="togglePasswordVisibility()">Hiển thị</button>
                                <style>
                                    .transparent-btn {
                                        background-color: transparent; /* Đặt màu nền là trong suốt */
                                        border-color: transparent; /* Đặt màu viền là trong suốt */
                                        color: #222222; /* Đặt màu chữ cho nút */
                                    }

                                    #password, #floatingPhoneNumber:focus{
                                        outline: none !important;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn  w-100 py-3 mt-3 rounded continue-button d-flex justify-content-center border-0" id="continue-button-login" style="background:#FF385C linear-gradient(to right,#E61E4D00, #E31C5F80 50%, #D70466 100%); color: white">Thay đổi mật khẩu</button>

                </div>
            </div>
        </div>
    </div>
</div>
</div>

<img src="bootstrap/css/patterns/icon-upload.svg" alt="">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/2688c22119.js" crossorigin="anonymous"></script>
<script>
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById("password");
        // Nếu là "password", chuyển sang "text" để hiển thị mật khẩu
        // Nếu là "text", chuyển sang "password" để ẩn mật khẩu
        passwordInput.type = (passwordInput.type === "password") ? "text" : "password";
        passwordButton.textContent = (passwordInput.type === "password") ? "hiển thị" : "ẩn";
    }

    function togglePasswordVisibility1() {
        var passwordInput = document.getElementById("floatingPassword");
        // Nếu là "password", chuyển sang "text" để hiển thị mật khẩu
        // Nếu là "text", chuyển sang "password" để ẩn mật khẩu
        passwordInput.type = (passwordInput.type === "password") ? "text" : "password";
        passwordButton.textContent = (passwordInput.type === "password") ? "hiển thị" : "ẩn";
    }

</script>
</body>

