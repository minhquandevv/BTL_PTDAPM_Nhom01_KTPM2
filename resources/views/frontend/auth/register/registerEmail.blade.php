<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9e29fd661a.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="bootstrap/css/customize-register.css">

</head>
<body>

<div class="container mt-5 rounded" id="create-profile">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center fw-bold d-flex  padding-form">
                    <a class="text-dark text-decoration-none" href="">
                        <i class="fa-solid fa-xmark"></i>
                    </a>

                    <div class=" text-register text-header w-100">Đăng ký</div>
                </div>
                <div id="register-body" class="card-body">
                    <p class="text-center grey-text text-5 d-flex justify-content-space-between ">Chào mừng đến với
                        AirHome
                    <div></div>
                    <div></div>
                    </p>

                    <!-- Form start -->
                    <form action="" method="POST">
                        @csrf
                        <div class="form-floating border rounded overflow-hidden">
                            <input type="text" class="form-control border-0 rounded-0 text-8 grey-text"
                                   id="Email" placeholder="Email" name="Email" required>
                            <label for="Email">Email</label>
                        </div>

                        <div id="input-group">
                            <div class="border rounded position-relative">
                                <div class="form-floating rounded overflow-hidden position-relative">
                                    <input type="password" class="form-control border-0" id="floatingPass"
                                           onkeyup="hidden_btn()" placeholder="Mật khẩu" name="Password">
                                    <label for="floatingPass">Mật khẩu</label>
                                </div>
                            </div>
                        </div>

                        <div id="input-group">
                            <div class="border rounded position-relative">
                                <div class="form-floating rounded overflow-hidden position-relative">
                                    <input type="password" class="form-control border-0" id="floatingPassConfirm"
                                           onkeyup="hidden_btn()" placeholder="Nhập lại mật khẩu" name="PasswordConfirm">
                                    <label for="floatingPassConfirm">Nhập lại mật khẩu</label>
                                </div>
                            </div>
                        </div>
                        <button type="submit"
                                class="text-decoration-none w-100 py-3 mt-3 rounded btn-danger text-register continue-button d-flex justify-content-center">
                            Tiếp tục
                        </button>
                    </form>
                    <!-- Form end -->

                    <div class="d-flex justify-content-between mt-2">
                        <hr style="width: 100%;">
                        <p>hoặc</p>
                        <hr style="width: 100%;">
                    </div>
                    <div>
                        <a href=""
                           class=" text-decoration-none w-100 py-3 mt-3 rounded btn-white text-register border border-dark grey-text d-flex justify-content-center align-items-center fw-500">
                            Tiếp tục với Google (Sắp ra mắt)
                        </a>
                        <div>Đã có tài khoản?
                            <a href=""
                           class=" text-decoration-none w-100 py-3 mt-3 rounded btn-white text-register border
                               border-dark grey-text d-flex justify-content-center align-items-center fw-500">
                            Đăng nhập
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<img src="bootstrap/css/patterns/icon-upload.svg" alt="">

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
