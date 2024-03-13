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
                    <p class="text-center fw-medium fs-3">{{$room[0]->TenPhong}}</p>
                </div>

                <div class="d-flex justify-content-center mx-4 mt-4">
                    <div class="my-3">
                        @if(isset($room['imgroom']['DuongDanAnh']))
                            <img class="card-img-top rounded-5"
                                 src="{{ asset($room[0]->imgroom->DuongDanAnh) }}" alt=""
                                 style="width: 415px; height:326px"/>

                        @else
                            <img class="card-img-top rounded-5" src="{{asset('images/img-1.svg')}}" alt=""
                                 style="width: 415px; height:326px"/>
                        @endif
                    </div>
                </div>
            </div>

            <div class="">
                @if(count($evaluates) > 0)
                    @foreach($evaluates as $evaluate)
                        <div class="d-flex border rounded-4 mb-5">
                            <div class="p-4 d-flex justify-content-start">
                                @if(isset($evaluate->DuongDanAnh))
                                    <img class="card-img-top rounded-5"
                                         src="{{ asset($evaluate->DuongDanAnh) }}" alt=""
                                         style="width:80px; height:80px">
                                @else
                                    <img src="https://via.placeholder.com/80x80.png/0044ee?text=customer1"
                                         alt="image-338f9269a01ee5bd98.png" style="width:80px; height:80px">
                                @endif
                            </div>
                            <div class="py-3">
                                <a href="#"
                                   class="text-dark text-decoration-none fs-3 fw-medium">{{$evaluate->TenKH}}</a>
                                <p class="fw-medium fs-4">{{$evaluate->NhanXet}}</p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="d-flex align-items-center border rounded-4 mb-5 " style="height: 100px">
                        <p class="fw-medium fs-4">Không có đánh giá nào</p>
                    </div>
                @endif
            </div>
        </div>
    </form>
@endsection

