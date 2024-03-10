<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9e29fd661a.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/css/customize-register.css">

</head>
<body>

<div class="container mt-5 rounded" id="create-profile">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center fw-bold d-flex  padding-form">
                    <a class="text-dark text-decoration-none" href="/">
                        <i class="fa-solid fa-xmark"></i>
                    </a>

                    <div class=" text-register text-header w-100">Đăng nhập</div>
                </div>
                <div id="register-body" class="card-body">
                    <p class="text-center grey-text text-5 d-flex justify-content-space-between ">Chào mừng đến với
                        AirHome
                    </p>
                    <form action="{{ route('login.loginhandle') }}" method="POST">
                        @csrf
                        <div class="border rounded overflow-hidden">
                            <div class="form-floating">
                                <input type="text" class="form-control border-0 rounded-0 border-bottom"
                                       id="floatingEmail"
                                       placeholder="Email" name="Email">
                                <label for="floatingEmail">Email</label>
                                @error('Email')
                                <div>{{ $message }}</div>
                                @enderror
                                @if(session('errorEmail'))
                                    <div>{{ session('errorEmail') }}</div>
                                @endif
                            </div>

                            <div class="rounded position-relative">
                                <div class="form-floating rounded overflow-hidden position-relative">
                                    <input type="password" class="form-control border-0" id="floatingPass"
                                           onkeyup="hidden_btn(this)" placeholder="Mật khẩu" name="Password">
                                    <label for="floatingPass">Mật khẩu</label>
                                    @error('Password')
                                    <div>{{ $message }}</div>
                                    @enderror
                                    @if(session('errorPass'))
                                        <div>{{ session('errorPass') }}</div>
                                    @endif
                                </div>
                                <button type="button" class="btn-show" onclick="showPass(this)" id="btnShowPass">Hiển
                                    thị
                                </button>

                            </div>
                        </div>
                        {{--                        <a href="/bookinghome" class="text-decoration-none">--}}
                        {{--                        <span class="text-decoration-none">--}}
                        <button type="submit"
                                class="btn  w-100 py-3 mt-3 rounded btn-danger text-register continue-button d-flex justify-content-center fw-500"
                                id="continue-button-register">Tiếp tục
                        </button>
                        {{--                        </span>--}}
                    </form>
                    <div class="d-flex justify-content-between mt-2">
                        <hr style="width: 100%;">
                        <p>hoặc</p>
                        <hr style="width: 100%;">
                    </div>
                    <div>
                        <button type="button"
                                class="btn  w-100 py-3 mt-2 rounded btn-white text-register border border-dark grey-text d-flex justify-content-between fw-500"
                                id="gg-button">
                            <img class="gg-icon" src="bootstrap/css/patterns/gg-icon.svg" alt="">
                            Tiếp tục với Google
                            <div></div>
                        </button>

                        <a href="/login1" class="text-decoration-none">
                            <button type="button"
                                    class="btn  w-100 py-3 mt-3 rounded btn-white text-register border border-dark grey-text d-flex justify-content-between align-items-center fw-500"
                                    id="mail-button">
                                <img class="mail-icon" src="bootstrap/css/patterns/mail-icon.svg" alt="">
                                Tiếp tục với Phone
                                <div></div>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    let pass_input = document.getElementById("floatingPass");
    let btn_show = document.getElementById('btnShowPass');

    function hidden_btn() {
        if (pass_input.value === '') {
            btn_show.style.display = 'none';
        } else {
            btn_show.style.display = 'block';
        }
    }

    hidden_btn();

    function showPass(obj) {
        var x = document.getElementById("floatingPass");
        if (x.type === "password") {
            obj.innerText = "Ẩn";
            x.type = "text";
        } else {
            obj.innerText = "Hiển thị";
            x.type = "password";
        }
    }
</script>

</body>
</html>