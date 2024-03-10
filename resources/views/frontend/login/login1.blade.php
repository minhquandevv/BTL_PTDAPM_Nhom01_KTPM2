<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5 rounded"  id="create-profile">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card" >
                <div class="card-header text-center fw-bold d-flex  padding-form" style="padding: 22px 24px; background: none ">
                    <a class="text-dark text-decoration-none" href="">
                        <i class="fa-solid fa-xmark"></i>
                    </a>

                    <div class=" text-login text-header w-100" style="line-height: 20px ; font-size: 16px ; font-weight: 700 ">Đăng nhập</div>
                </div>
                <div id="login-body" class="card-body">
                    <p class="text-center grey-text text-5 d-flex justify-content-space-between " style="font-weight: 500 ; font-size: 22px ; line-height: 26px">Chào mừng đến với AirHome <div></div><div></div></p>
                    <div class="border rounded overflow-hidden">

                        <div class="form-floating border-bottom">
                            <input type="text" class="form-control round-0 text-8 border-0" id="floatingPhoneNumber" placeholder="Số điện thoại" >
                            <label for="floatingPhoneNumber">Số điện thoại</label>
                        </div>

                        <div class="form-floating d-flex">
                            <input type="password" class="form-control round-0 text-8 border-0" id="password" placeholder="Mật khẩu" oninput="togglePasswordButtonVisibility()">
                            <label for="password">Mật khẩu</label>
                            <div class="input-group-append">
                                <button class="transparent-btn text-center" type="button" id="passwordButtonContainer" style="font-size: 12px ; font-weight: 500; line-height: 20px ; text-decoration: underline ; display: none " onclick="togglePasswordVisibility()">Hiển thị</button>
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


                            <script>
                                function togglePasswordVisibility() {
                                    var passwordInput = document.getElementById("password");
                                    // Nếu là "password", chuyển sang "text" để hiển thị mật khẩu
                                    // Nếu là "text", chuyển sang "password" để ẩn mật khẩu
                                    passwordInput.type = (passwordInput.type === "password") ? "text" : "password";
                                    document.getElementById('passwordButtonContainer').textContent = (passwordInput.type === "password") ? "hiển thị" : "ẩn";
                                }

                                function togglePasswordButtonVisibility() {
                                    var passwordInput = document.getElementById("password");
                                    var passwordButtonContainer = document.getElementById("passwordButtonContainer");
                                        // Kiểm tra nếu ô nhập mật khẩu có giá trị, hiển thị nút
                                    if (passwordInput.value !== "") {
                                        passwordButtonContainer.style.display = "block";
                                    } else {
                                        passwordButtonContainer.style.display = "none";
                                    }
                                }
                            </script>
                        </div>
                    </div>
                    <div class="d-flex flex-row-reverse"> <a class="p-2" href="">Quên mật khẩu ?</a></div>

                    <button type="button" class="btn  w-100 py-3 mt-3 rounded continue-button d-flex justify-content-center border-0" id="continue-button-login" style="background:#FF385C linear-gradient(to right,#E61E4D00, #E31C5F80 50%, #D70466 100%); color: white">Tiếp tục</button>
                    <div class="d-flex justify-content-between mt-2" style="gap: 16px; padding: 10px 0">
                        <hr style="width: 100%;">
                        <p>hoặc</p>
                        <hr style="width: 100%;">
                    </div>
                    <div>
                        <button type="button" class="btn  w-100 py-3 mt-2 rounded btn-white border border-dark grey-text d-flex justify-content-between align-items-center fw-500" id="gg-button" style="font-weight: 500 ; font-size: 16px ; line-height: 20px">
                            <img src="ggicon.png" style="width: 20px ; height: 20px ; margin-left: 10px">
                            Tiếp tục với Google <div></div> </button>

                        <button type="button" class="btn  w-100 py-3 mt-3 rounded btn-white border border-dark grey-text d-flex justify-content-between align-items-center fw-500" id="mail-button" style="font-weight: 500 ; font-size: 16px ; line-height: 20px">
                            <i class="fa-regular fa-envelope" style="width: 20px ; height: 20px ; margin-left: 10px"></i>
                            Tiếp tục với email <div></div></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<img src="bootstrap/css/patterns/icon-upload.svg" alt="">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/2688c22119.js" crossorigin="anonymous"></script>
</body>
</html>

