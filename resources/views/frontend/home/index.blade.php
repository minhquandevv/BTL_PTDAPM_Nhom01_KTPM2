<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AirHome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body class="home_index " style="background-color:#FDE7FB">
    <nav class="navbar navbar-expand-lg navbar-light" style="height: 80px;">
        <div class="container">
            <img src="/public/images/logo.jpg" alt="" height="40px">
            <a class="navbar-brand" href="#">AIRHOME</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link fs-4 fw-medium" href="{{ route('dangNhap') }}">Đăng nhập</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-4 fw-medium" href="{{ route('dangKy') }}">Đăng ký</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Background image -->
    <div class=" text-center bg-image" style="
      background-image: url('https://img.upanh.tv/2024/02/22/Rectangle9.png');
      height: 830px; padding-left:920px;">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);height: 830px;">
            <div class="d-flex justify-content-center align-items-center flex-column h-50">
                <div class="text-white">
                    <h2 class="mb-3 top-0 w-75">Chào mừng bạn đến với AirHome</h2>
                </div>
                <div>
                    <a data-mdb-ripple-init
                        class="btn btn-outline-light btn-lg btn-bg-light bg-secondary border border-0 rounded-pill"
                        href=" {{ route('home') }} " role="button">Đặt phòng ngay</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Background image -->
    <div class="container mt-5 border-2 border-top ps-0 " style="height: 114px;">
        <div class="row mt-3">
            <div class="col-md-9 ">
                <p>© 2024 AirHome</p>
            </div>
            <div class="col-md-1 d-flex p-0">
                <div class="me-1"><i class="fas fa-globe"></i></div>
                <p>Tiếng Việt</p>
            </div>
            <div class="col-md-1 d-flex justify-content-end">
                <div class="me-1">
                    <i class="fas fa-pound-sign"></i>
                </div>
                <p class="text-muted"> GBP</p>
            </div>
            <div class="col-md-1 d-flex justify-content-end p-0">
                <i class="p-1 fab fa-facebook-square"></i>
                <i class="p-1 fab fa-twitter-square"></i>
                <i class="p-1 pe-0 fab fa-instagram-square"></i>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
