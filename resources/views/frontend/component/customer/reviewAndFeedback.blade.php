@extends('frontend.component.layout-customer')
@section('content')
<form class="container mx-auto bg-white" style="height:max-content">
    <div class="d-flex gap-5 align-items-center my-4 justify-content-center">
        <a href="/bookinghome" class="position-absolute z-0 text-dark "
            style="top:118px;left:45px;z-index:0">
            <i class="fa-solid fa-chevron-left"></i>
        </a>
        <div class="text-decoration-none text-dark ">
            <p class="fs-4 fw-medium text-center">Đánh giá và phản hồi</p>
        </div>
    </div>
    <div class="border rounded-4 my-5">
        <div class="mt-4 ms-3">
            <a href="#" class="text-decoration-none text-dark ">
                <p class="fs-4 fw-medium">Biệt thự tại Pacifica, California, Hoa Kỳ</p>
            </a>
        </div>
        <div class="row mx-4 ">
            <div class="col-md-2 my-3">
                <a href="#">
                    <img class="card-img-top rounded-4" src="images/img-1.svg" alt=""
                        style="width: 168px; height:138px" />
                </a>
            </div>
            <div class="col-md-7 align-items-center mt-4">
                <h5>Mã phòng: MP003</h5>
                <h5>Tên Phòng: Biệt thự tại Pacifica</h5>
                <h5>Giá Phòng: 5.000.000VND</h5>
            </div>
            <div class="col-3 d-flex justify-content-end align-items-center mb-5 ">
                <a href="/feedbackform" class="text-decoration-none text-dark ">
                    <p class="fs-3 fw-medium text-secondary me-5 text-danger">Đánh giá/phản hồi</p>
                </a>
            </div>
        </div>
    </div>
    <div class="border rounded-4 my-5">
        <div class="mt-4 ms-3">
            <a href="#" class="text-decoration-none text-dark ">
                <p class="fs-4 fw-medium">Nhà trên cây tại Half Moon Bay, California, Hoa Kỳ</p>
            </a>
        </div>
        <div class="row mx-4 ">
            <div class="col-md-2 my-3">
                <a href="#">
                    <img class="card-img-top rounded-4" src="images/img-1.svg" alt=""
                        style="width: 168px; height:138px" />
                </a>
            </div>
            <div class="col-md-7 align-items-center mt-4">
                <h5>Mã phòng: MP015</h5>
                <h5>Tên Phòng: Nhà trên cây tại Half Moon Bay</h5>
                <h5>Giá Phòng: 3.000.000VND</h5>
            </div>
            <div class="col-3 d-flex justify-content-end align-items-center mb-5 ">
                <a href="/feedbackform" class="text-decoration-none text-dark ">
                    <p class="fs-3 fw-medium text-secondary me-5 text-danger">Đánh giá/phản hồi</p>
                </a>
            </div>
        </div>
    </div>

</form>
@endsection