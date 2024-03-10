@extends('frontend.component.layout-employee')
@section('content')
    <form>
        <div class="container mx-auto bg-white">
            <div class="d-flex gap-5 align-items-center my-4 justify-content-center">
                <a href="{{route("historyandreviews1")}}" class="position-absolute z-0 text-dark "
                   style="top:118px;left:45px;">
                    <i class="fa-solid fa-chevron-left"></i>
                </a>
                <div class="text-decoration-none text-dark ">
                    <p class="fs-3 fw-medium text-center">Tất cả đánh giá và phản hồi</p>
                </div>
            </div>
            <div class=" my-5">
                <div class="mt-4 ms-3">
                    <p class="text-center fw-medium fs-3">{{$evaluate[0]['room']['TenPhong']}}</p>
                </div>

                <div class="d-flex justify-content-center mx-4 mt-4">
                    <div class="my-3">
                        @if(isset($evaluate[0]['imgroom'][0]['DuongDanAnh']))
                            <img class="card-img-top rounded-5"
                                 src="{{ asset($evaluate[0]['imgroom'][0]['DuongDanAnh']) }}" alt=""
                                 style="width: 415px; height:326px"/>

                        @else
                            <img class="card-img-top rounded-5" src="{{asset('images/img-1.svg')}}" alt=""
                                 style="width: 415px; height:326px"/>
                        @endif
                    </div>
                </div>
            </div>

            <div class="border rounded-4 mb-5">
                @if(isset($evaluate[0]['danhgia']['NhanXet']))
                    <div class="d-flex">
                        <div class="p-4 d-flex justify-content-start ">
                            @if(isset($evaluate[0]['customer']['DuongDanAnh']))
                                <img class="card-img-top rounded-5"
                                     src="{{ asset($evaluate[0]['customer']['DuongDanAnh']) }}" alt=""
                                     style="width:80px; height:80px">

                            @else
                                <img src="https://i.upanh.org/2024/02/27/image-338f9269a01ee5bd98.png"
                                     alt="image-338f9269a01ee5bd98.png" style="width:80px; height:80px">
                            @endif

                        </div>
                        <div class="py-3">
                            <a href="#"
                               class="text-dark text-decoration-none fs-3 fw-medium">{{$evaluate[0]['customer']['TenKH']}}</a>
                            <p class="fw-medium fs-4">{{$evaluate[0]['danhgia']['NhanXet']}}</p>
                        </div>
                    </div>
                @else
                    <p>Khong co danh gia nao</p>
                @endif
            </div>
        </div>
    </form>
@endsection

