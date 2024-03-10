@extends('frontend.component.layout-customer')
@section('content')
    <form action="{{ route('invoicemanagement.store') }}" method="POST"
          class="container mx-auto bg-white h-100 px-0">
        <div class="d-flex gap-5 align-items-center my-4">
            <a href="/cancelroom2" class="position-absolute text-dark z-0" style="top:118px;left:45px;">
                <i class="fa-solid fa-chevron-left"></i>
            </a>
            <a href="#" class="text-decoration-none text-dark ">
                <p class="fs-4 fw-medium">{{$query['TenPhong']}}</p>
                <input class="d-none" value="{{$query['TenPhong']}}" name="TenPhong">
            </a>
        </div>
        <div class="d-flex w-100 mb-5 mt-3 ">
            <div class="pe-3">
                <img class="card-img-top rounded-start" src="https://img.upanh.tv/2024/02/27/image-9.png" alt=""
                     style="width:650px; height : 460px;"/>
            </div>
            <div>
                <div class="d-flex">
                    <img class="card-img-top me-2 mb-2" src="https://img.upanh.tv/2024/02/27/image-9.png" alt=""
                         style="width: 320px; height:225px"/>
                    <img class="card-img-top rounded-end mb-2" src="https://img.upanh.tv/2024/02/27/image-9.png" alt=""
                         style="width: 320px; height:225px "/>
                </div>
                <div class="d-flex">
                    <img class="card-img-top me-2" src="https://img.upanh.tv/2024/02/27/image-9.png" alt=""
                         style="width: 320px; height:225px"/>
                    <img class="card-img-top rounded-end " src="https://img.upanh.tv/2024/02/27/image-9.png" alt=""
                         style="width: 320px; height:225px"/>
                </div>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-lg-6">
                <div>
                    <h2 class="fw-bold">Thông tin phòng</h2>
                </div>
                <div class="container my-5 px-0 ">
                    <div class="d-flex text-start my-2">
                        <h4 class="col-lg-4 fw-medium">Mã phòng:</h4>
                        <h4 class="col-lg-8 fw-medium">{{$query['MaP']}}</h4>
                        <input class="d-none" value="{{$query['MaP']}}" name="MaP">
                    </div>
                    <div class="d-flex text-start my-2">
                        <h4 class="col-lg-4 fw-medium">Tên phòng:</h4>
                        <h4 class="col-lg-8 fw-medium">{{$query['TenPhong']}}</h4>
                        <input class="d-none" value="{{$query['TenPhong']}}" name="TenPhong">
                    </div>
                    <div class=" d-flex text-start my-2">
                        <h4 class="col-lg-4 fw-medium">Giới thiệu phòng:</h4>
                        <h4 class="col-lg-8 fw-medium">{{$query['GioiThieuPhong']}}</h4>
                        <input class="d-none" value="{{$query['GioiThieuPhong']}}" name="GioiThieuPhong">
                    </div>
                    <div class="d-flex text-start my-2">
                        <h4 class="col-lg-4 fw-medium">Trạng thái phòng:</h4>
                        <h4 class="col-lg-8 fw-medium">{{$query['TinhTrang']}}</h4>
                        <input class="d-none" value="{{$query['TinhTrang']}}" name="TinhTrang">
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
                                    <input type="date" class="date-bookroom border-0 rounded-3 p-3 bg-light"
                                           name="checkin"/>
                                    @error('checkin')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 p-4">
                                <div>
                                    <span class="fs-4">Ngày trả phòng</span>
                                </div>
                                <div>
                                    <input type="date" class="date-bookroom border-0 rounded-3 p-3 bg-light"
                                           name="checkout"/>
                                    @error('checkout')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="border-top p-4">
                            <div class="">
                                <span class=" fs-4">Số lượng khách</span>
                            </div>
                            <div class="number-input">
                                <button type="button"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                        class="minus">-
                                </button>
                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                <button type="button"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                        class="plus">+
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between m-5 border-top pt-5">
                    <h2>Giá phòng</h2>
                    <h2>{{$query['DonGia']}}VND</h2>
                    <input class="d-none" value="{{$query['DonGia']}}" name="DonGia">
                </div>
            </div>
        </div>
        <div class="register-body text-center pb-3  ">


            @csrf
            <button type="submit" class="btn  py-3 mt-2 rounded btn-dark text-register text-light fw-500"
                    id="continue-button-edit">Đặt phòng
            </button>
            </a>
        </div>
    </form>
@endsection
