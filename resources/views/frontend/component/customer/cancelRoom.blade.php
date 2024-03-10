@extends('frontend.component.layout-customer')
@section('content')
<div class="container mx-auto bg-white" style="height:1000px">
    <div class="d-flex align-items-center my-4 justify-content-between">
        <a href="/bookinghome" class="position-absolute text-dark z-0" style="top:118px;left:45px;">
            <i class="fa-solid fa-chevron-left"></i>
        </a>
        <div></div>
        <div class="text-decoration-none text-dark">
            <p class="fs-4 fw-medium text-center">Đơn đã đặt</p>
        </div>
        <a href="/bookinghistory" id="register-body" class="justify-content-end">
            <button type="button" class="btn rounded btn-danger text-register fw-500 " id="accept-button">Lịch sử đặt phòng</button>
        </a>
    </div>
    <div class="border rounded-4 my-5">
        <div class="mt-4 ms-3">
            <a href="#" class="text-decoration-none text-dark ">
                <p class="fs-4 fw-medium">Xe cắm trại/RV tại Half Moon Bay, California, Hoa Kỳ</p>
            </a>
        </div>
        <div class="row mx-4 ">
            <div class="col-md-2 my-3">
                <a href="#">
                    <img class="card-img-top rounded-4" src="images/img-1.svg" alt="" style="width: 168px; height:138px" />
                </a>
            </div>
            <div class="col-md-7 align-items-center mt-4">
                <h5>Mã phòng: MP001</h5>
                <h5>Tên Phòng: Xe cắm trại/RV </h5>
                <h5>Giá Phòng: 6.800.000VND</h5>
            </div>
            <div class="col-3 d-flex justify-content-end align-items-center mb-5 ">
                <a href="#" class="text-decoration-none text-dark ">
                    <p class="fs-3 fw-medium text-secondary me-5">Chưa thanh toán</p>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection