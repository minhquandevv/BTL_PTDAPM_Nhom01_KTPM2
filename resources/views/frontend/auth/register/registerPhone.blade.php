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
                    <div class="border rounded overflow-hidden">

                        <div class="form-floating">
                            <select class="form-select border-0 rounded-0 border-bottom text-8 grey-text"
                                    id="floatingVN" aria-label="Quốc gia/Vùng">
                                <option selected>Vietnam (+84)</option>
                                <option value="1">USA (+1)</option>
                                <option value="2">UK (+44)</option>
                                <option value="3">China (+86)</option>

                            </select>
                            <label for="floatingVN">Quốc gia/Vùng</label>
                        </div>

                        <div class="form-floating">
                            <input type="text" class="form-control border-0 rounded-0 text-8 grey-text"
                                   id="floatingPhoneNumber" placeholder="Số điện thoại">
                            <label for="floatingPhoneNumber">Số điện thoại</label>
                        </div>
                    </div>

                    <div class="f-1rem text-register-warning">Chúng tôi sẽ gọi điện hoặc nhắn tin cho bạn để xác nhận số
                        của bạn. Tin nhắn và dữ liệu áp dụng mức giá tiêu chuẩn.
                        <a href="/" class="cursor-pointer fw-bold text-decoration-underline" id="fw-500"> Chính sách bảo
                            mật</a>
                    </div>
                    <a href="/"
                       class=" text-decoration-none w-100 py-3 mt-3 rounded btn-danger text-register continue-button d-flex justify-content-center">Tiếp
                        tục
                    </a>
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
                        <a href=""
                           class=" text-decoration-none w-100 py-3 mt-3 rounded btn-white text-register border border-dark grey-text d-flex justify-content-center align-items-center fw-500">
                            Tiếp tục với Email
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
