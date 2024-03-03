<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<nav class="navbar navbar-expand-lg position-sticky z-3" style="background-color:#FDE7FB;top:0">
    <div class="container">
        <div class=" row collapse navbar-collapse " id="navbarSupportedContent">
            <div class="d-flex col-lg-3 justify-content-start">
                <a href="/home" class="d-flex">
                    <img class="card-img-top-logo rounded-lg " src="images/logo-home.svg" alt="/" style="height:41px" />
                    <img class="card-img-top-text rounded-lg" src="images/text_home.svg" alt="/"
                        style="width:141px;height:41px" />
                </a>
            </div>
            <div class="col-lg-9 collapse navbar-collapse justify-content-end " id="navbarNav" role="button">
                <button class="nav-link active fs-3 fw-medium" aria-current="page" href="#">Trang chủ</button>
                <div class="dropdown border rounded rounded-pill ms-3 p-3 bg-white">
                    <div class="btn-menu btn-group">
                        <button type="button" class="btn " data-bs-toggle="dropdown" data-bs-display="static"
                            aria-expanded="false">
                            <i class="fas fa-bars fa-lg px-1"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-center border-1 rounded-4 position-absolute"
                            style="background-color:#FDE7FB; border-color:#990033;top:60px; width:240px; right:-40px; ">
                            <li><button class="dropdown-item fw-medium py-2 fs-6" type="button" href="">Đánh giá và phản
                                    hồi</button>
                            </li>
                            <li><button class="dropdown-item fw-medium py-2 fs-6" type="button">Quản lí đặt
                                    phòng</button>
                            </li>
                            <li><button class="dropdown-item fw-medium border-bottom border-secondary-subtler py-2 fs-6"
                                    type="button" style="border-color:blueviolet">Danh sách yêu thích</button></li>
                            <li><button class="dropdown-item py-2 fs-6" type="button">Quản lí thông tin đặt
                                    phòng</button>
                            </li>
                            <li><button class="dropdown-item  border-bottom border-secondary-subtler py-2 fs-6"
                                    type="button" style="border-color:blueviolet">Quản lí thông tin cá nhân</button>
                            </li>
                            <li><button class="dropdown-item py-2 fs-6" type="button">Trung tâm hỗ trợ</button></li>
                            <li><button class="dropdown-item py-2 fs-6" type="button">Đăng xuất</button></li>
                        </ul>
                    </div>
                    <div class="btn-user btn-group ">
                        <button type="button" class="btn btn-secondary rounded-circle" data-bs-toggle="dropdown"
                            data-bs-display="static" aria-expanded="false">
                            <i class="fa-solid fa-user"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-lg-end border-1 rounded-4 position-absolute z-1"
                            style="background-color:#FDE7FB; border-color:#990033; top:60px; width:220px">
                            <li><button class="dropdown-item fs-6 py-2" type="button">Quản lý tài khoản cá nhân</button>
                            </li>
                            <li><button class="dropdown-item fs-6 py-2" type="button">Đăng xuất</button></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</nav>

</html>