<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng nhập với số điện thoại</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    .transparent-btn {
        background-color: transparent; /* Đặt màu nền là trong suốt */
        border-color: transparent; /* Đặt màu viền là trong suốt */
        color: #222222; /* Đặt màu chữ cho nút */
    }

    #password, #floatingPhoneNumber:focus {
        outline: none !important;
    }
</style>
<body>
<div class="container mt-5 rounded" id="create-profile">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center fw-bold d-flex  padding-form"
                     style="padding: 22px 24px; background: none ">
                    <a class="text-dark text-decoration-none" href="">
                        <i class="fa-solid fa-xmark"></i>
                    </a>

                    <div class=" text-login text-header w-100"
                         style="line-height: 20px ; font-size: 16px ; font-weight: 700 ">Đăng nhập
                    </div>
                </div>
                <div id="login-body" class="card-body">
                    <p class="text-center grey-text text-5 d-flex justify-content-space-between "
                       style="font-weight: 500 ; font-size: 22px ; line-height: 26px">Chào mừng đến với AirHome
                    <div></div>
                    <div></div>
                    </p>
                    <div class="border rounded overflow-hidden">

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-floating border-bottom">
                                <input type="text" class="form-control round-0 text-8 border-0" id="Email"
                                       placeholder="Email" name="Email">
                                <label for="Email">Email</label>
                            </div>
                            @error('Email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <span class="text-danger">{{ session('errorEmail') }}</span>

                            <div class="form-floating d-flex">
                                <input type="password" class="form-control round-0 text-8 border-0" id="password"
                                       placeholder="Mật khẩu" name="Password"
                                       oninput="togglePasswordButtonVisibility()">

                                <label for="password">Mật khẩu</label>

                            </div>
                            @error('Password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <span class="text-danger">{{ session('errorPass') }}</span>
                    </div>

                    <button type="submit"
                            class="btn  w-100 py-3 mt-3 rounded continue-button d-flex justify-content-center border-0"
                            id="continue-button-login"
                            style="background:#FF385C linear-gradient(to right,#E61E4D00, #E31C5F80 50%, #D70466 100%); color: white">
                        Tiếp tục
                    </button>
                    </form>
                    <div class="d-flex justify-content-between mt-2" style="gap: 16px; padding: 10px 0">
                        <hr style="width: 100%;">
                        <p>hoặc</p>
                        <hr style="width: 100%;">
                    </div>
                    <div>
                        <div>
                            <a href=""
                               class=" text-decoration-none w-100 py-3 mt-3 rounded btn-white text-register border border-dark grey-text d-flex justify-content-center align-items-center fw-50">
                                Tiếp tục với Google (Sắp ra mắt)
                            </a>
                            <a href=""
                               class=" text-decoration-none w-100 py-3 mt-3 rounded btn-white text-register border border-dark grey-text d-flex justify-content-center align-items-center fw-50">
                                Chưa có tài khoản ? Đăng ký
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<img src="bootstrap/css/patterns/icon-upload.svg" alt="">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/2688c22119.js" crossorigin="anonymous"></script>

</body>
</html>
