@extends('frontend.component.layout-employee')
@section('content')
    <form>
        <div class="container mx-auto ">
            <div class="d-flex justify-content-end pb-4 me-5">
                <div class="d-flex mt-3 align-items-center ">
                    <a href="/createhomestay" class="text-decoration-none text-light">
                        <button type="button"
                                class="btn d-flex bg-danger text-center text-white rounded-2 cursor-pointer border-0"
                                style="background-color: #FF385C !important;
                    background-image: linear-gradient(to right,#E61E4D00 0%, #E31C5F80 50%, #D70466 100%);
                    color: #FFFFFF; height: 56px">
                            <div class="d-flex text-center align-items-center ">
                                <div class="pe-3 pt-1">
                                    <i class="fa-solid fa-plus fa-2xl" style="color: #ffffff;"></i>
                                </div>
                                <div class="pt-2">
                                    <h5>Đăng phòng</h5>
                                </div>
                            </div>
                        </button>
                    </a>
                </div>
            </div>
            <div class="row mx-4 ">
                @foreach($rooms as $room)
                    <div class="col-lg-3 position-relative">
                        <div class="card bg-white border-0  ">
                            <div class=" rounded-4 overflow-hidden">
                                <div class="cursor-pointer hover-setimg">
                                    <a class=" cursor-pointer " href="">
                                        @if(isset($room['imgroom']['0']['DuongDanAnh']))
                                            <img src="{{ asset($room['imgroom']['0']['DuongDanAnh']) }}"
                                                 class="d-block w-100 c-img" alt="Slide 1"
                                                 style="width: 288px;height: 216px">
                                        @else
                                            <img src="{{ asset('images\Rectangle9.png') }}" class="d-block c-img"
                                                 alt="Default Image"
                                                 style="width: 288px;height: 216px">
                                        @endif
                                    </a>
                                </div>
                            </div>
                            <div class="card-body py-3 px-0 d-flex align-content-between flex-wrap">
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="/searchinfor" class="text-decoration-none text-dark">
                                        <p class="fs-6 py-1 fw-medium m-0">{{$room['TenPhong']}}</p>
                                    </a>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <i class="fa-solid fa-star fa-sm  px-2"></i>
                                        <p class="m-0">{{rand(1, 4)}}.{{rand(0, 9)}}</p>
                                    </div>
                                </div>
                                <p class="py-1 m-0">{{$room['GioiThieuPhong']}}</p>
                                <h5 class="text-decoration-underline py-1 m-0 fs-6">Tổng: {{$room['DonGia']}} VND</h5>
                            </div>
                            <div class="position-absolute" style="top:10px;right:10px">
                                {{--                                <button type="submit" id="heart-button" class="btn btn-outline heart-button">--}}
                                {{--                                    <i id="heart-icon" class="far fa-heart heart-icon fa-2xl"--}}
                                {{--                                       style="color: #ffffff;"></i>--}}
                                {{--                                </button>--}}
                            </div>
                            <div class="position-absolute" style="top:10px;left:10px">
                                <a href="{{ route('rooms.edit', $room) }}">
                                    <button type="button" class="btn border-0 p-1 ">
                                        <i class="fa-regular fa-pen-to-square fa-2xl"></i>
                                    </button>
                                </a>
                                <a href="{{ route('deletehomestay', ['id' => $room['MaP']]) }}">
                                    <button type="button" class="btn border-0 p-1">
                                        <i class="fa-solid fa-trash-can fa-2xl" style="color: #ff0000;"></i>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="d-flex justify-content-center my-4 py-5" id="register-body">
                    <form id="pageForm" method="GET">
                        <input id="pageId" class="d-none" type="text" name="page"
                               value="{{ request()->get('page') <1 ? 1: request()->get('page') }}">
                        <button id="loadMoreButton" type="submit"
                                class="btn btn-danger px-5 py-4 bg-danger text-center text-white rounded-4 cursor-pointer border-0">
                            <h3> Hiển thị thêm</h3>
                        </button>
                    </form>
                    </button>
                </div>
            </div>
        </div>
    </form>
    <script>
        document.getElementById('loadMoreButton').addEventListener('click', function () {
            // Get the input element
            var pageInput = document.getElementById('pageId');

            // Increment the value by 1
            var currentValue = parseInt(pageInput.value);
            pageInput.value = currentValue + 1;

            var loadMoreButton = document.getElementById('loadMoreButton');
            loadMoreButton.form.submit();
        });
        {{--        let heartButton = document.querySelectorAll('.heart-button');--}}
        {{--        let heartIcon = document.querySelectorAll('.heart-icon');--}}
        {{--        heartButton.forEach((button, index) => {--}}
        {{--            button.addEventListener('click', () => {--}}
        {{--                if (heartIcon[index].classList.contains('far')) {--}}
        {{--                    heartIcon[index].classList.remove('far');--}}
        {{--                    heartIcon[index].classList.add('fas');--}}
        {{--                    heartIcon[index].style.color = 'red';--}}
        {{--                } else {--}}
        {{--                    heartIcon[index].classList.remove('fas');--}}
        {{--                    heartIcon[index].classList.add('far');--}}
        {{--                    heartIcon[index].style.color = 'white';--}}
        {{--                }--}}
        {{--            });--}}
        {{--        });--}}
    </script>
@endsection


