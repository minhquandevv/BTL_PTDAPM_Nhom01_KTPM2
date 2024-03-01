<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Room</title>
</head>
<body>
<section class="h-100 w-100">
    <form class="container mx-auto bg-white h-100">
        <div class="d-flex gap-5 align-items-center">
            <a href="{{ route('home') }}">
                <i class="fa-solid fa-angle-left fa-2xl"></i>
            </a>
            <h2>Xe cắm trại/RV tại Half Moon Bay, California, Hoa Kỳ</h2>
        </div>
        <div class="d-flex w-100 mb-5 mt-3 justify-content-center ">
            <div class="pe-5">
                <img class="card-img-top rounded-lg" src="https://i.upanh.org/2024/02/27/image_body44710f111b17e14a.png"
                     alt="" style="width:560px; height : 463px;" />
            </div>
            <div>
                <div>
                    <img class="card-img-top rounded-lg me-5 mb-4" src="https://img.upanh.tv/2024/02/27/image-9.png"
                         alt="" style="width: 280px; height:225px" />
                    <img class="card-img-top rounded-lg mb-4" src="https://img.upanh.tv/2024/02/27/image-11.png" alt=""
                         style="width: 280px; height:225px " />
                </div>
                <div>
                    <img class="card-img-top rounded-lg me-5" src="https://img.upanh.tv/2024/02/27/image-10.png" alt=""
                         style="width: 280px; height:225px" />
                    <img class="card-img-top rounded-lg" src="https://img.upanh.tv/2024/02/27/image-12.png" alt=""
                         style="width: 280px; height:225px" />
                </div>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-lg-6">
                <div>
                    <h1 class="fw-bold">Thông tin phòng</h1>
                </div>
                <div class="row d-flex m-5 ">
                    <div class="col-lg-4 text-start">
                        <p class="fw-bold fs-3">Mã phòng:</p>
                        <p class="fw-bold fs-3">Tên phòng:</p>
                        <p class="fw-bold fs-3">Giới thiệu phòng:</p>
                        <p class="fw-bold fs-3">Trạng thái phòng:</p>
                        <p class="fw-bold fs-3">Đơn giá:</p>
                    </div>
                    <div class="col-lg-8 text-start">
                        <p class="fw-bold fs-3">MP001</p>
                        <p class="fw-bold fs-3">Xe cắm trại/ RV</p>
                        <p class="fw-bold fs-3">Khung cảnh lãng mạn riêng tư với tầm nhìn chưa từng có ra bờ biển và bãi
                            biển
                            Thái Bình Dương.
                            Chỗ ở
                            sang trọng trong một chiếc RV hoàn toàn mới, gần vịnh Half Moon và Santa Cruz.</p>
                        <p class="fw-bold fs-3">Trống</p>
                        <p class="fw-bold fs-3">6.800.000VND</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 border rounded-4">
                <div class="border-bottom d-flex justify-content-center">
                    <h2 class="fw-bold py-4">Đặt phòng</h2>
                </div>
                <div class="">
                    <div class="border m-5 rounded-3 ">
                        <div class="row d-flex">
                            <div class=" col-lg-6 border-end p-4">
                                <div>
                                    <span class=" fs-4">Ngày nhận phòng</span>
                                </div>
                                <div>
                                    <input type="date" class="date-bookroom border-0 rounded-3 p-3 bg-light" />
                                </div>
                            </div>
                            <div class="col-lg-6 p-4">
                                <div>
                                    <span class="fs-4">Ngày trả phòng</span>
                                </div>
                                <div>
                                    <input type="date" class="date-bookroom border-0 rounded-3 p-3 bg-light"/>
                                </div>
                            </div>
                        </div>
                        <div class="border-top p-4">
                            <div class="">
                                <span class=" fs-4">Số lượng khách</span>
                            </div>
                            <div class="number-input">
                                <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center m-5">
                        <a href="#"
                           class="btn btn-primary px-5 py-4 bg-danger text-center text-white rounded-4 cursor-pointer border-0 w-100"
                           style="background-image: linear-gradient(to right,firebrick 30%, crimson);">
                            <h3>Đặt phòng</h3>
                        </a>
                    </div>
                </div>
                <div class="d-flex justify-content-between m-5 border-top pt-5">
                    <h2>Giá phòng</h2>
                    <h2>6.800.000VND</h2>
                </div>
            </div>
        </div>
    </form>
</section>

</body>
</html>
