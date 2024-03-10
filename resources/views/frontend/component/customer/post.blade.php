@extends('frontend.component.layout-customer')
@section('content')
    <div class="container mx-auto row">
        @foreach($rooms as $room)
            <div class="col-lg-3 position-relative">
                <div class="card bg-white border-0 mt-3  ">
                    <div class=" rounded-4 overflow-hidden">
                        <div class="cursor-pointer hover-setimg">
                            <a class=" cursor-pointer " href="{{route('showRoom', $room['MaP'])}}">

                                @if (isset($room['imgroom'])  && count($room['imgroom']) > 0)
                                    @php
                                        $lastImageIndex = count($room['imgroom']) - 1;
                                    @endphp
                                    <img src="{{ asset($room['imgroom'][$lastImageIndex]['DuongDanAnh']) }}"
                                         class="d-block w-100 c-img" alt="Slide 1"
                                         style="height:225px ;width: 300px">
                                @else
                                    <img src="{{ asset('images\Rectangle9.png') }}" class="d-block w-100 c-img"
                                         alt="Default Image" style="height:225px ;width: 300px">
                                @endif


                            </a>
                        </div>
                    </div>
                    <div class="card-body py-3 px-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="text-decoration-none text-dark">
                                <p class="fs-6 py-1 fw-medium m-0">{{$room['TenPhong']}}</p>
                            </a>
                            <div class="d-flex justify-content-between align-items-center">
                                <i class="fa-solid fa-star fa-sm  px-2"></i>
                                <p class="m-0">5.0</p>
                            </div>
                        </div>
                        <p class="py-1 m-0">{{$room['GioiThieuPhong']}}</p>
                        <h5 class="text-decoration-underline py-1 m-0 fs-6">Tổng: {{$room['DonGia']}} VND</h5>
                    </div>
                    <div class="position-absolute" style="top:10px;right:10px">
                        <button type="submit" id="heart-button" class="btn btn-outline heart-button">
                            <i id="heart-icon" class="far fa-heart heart-icon fa-2xl"
                               style="color: #ffffff;"></i>
                        </button>
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
        let heartButton = document.querySelectorAll('.heart-button');
        let heartIcon = document.querySelectorAll('.heart-icon');
        heartButton.forEach((button, index) => {
            button.addEventListener('click', () => {
                if (heartIcon[index].classList.contains('far')) {
                    heartIcon[index].classList.remove('far');
                    heartIcon[index].classList.add('fas');
                    heartIcon[index].style.color = 'red';
                } else {
                    heartIcon[index].classList.remove('fas');
                    heartIcon[index].classList.add('far');
                    heartIcon[index].style.color = 'white';
                }
            });
        });
    </script>
@endsection

