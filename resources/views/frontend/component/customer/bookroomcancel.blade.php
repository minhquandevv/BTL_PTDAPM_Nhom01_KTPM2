@extends('frontend.component.layout-customer')
@section('content')
    <div style="min-height: 100vh">
        <div class="container mx-auto ">
            <div class="d-flex justify-content-end pb-4 me-5">
                <div class="d-flex mt-3">
                    <a href="/cancelroom2" class="text-decoration-none">
                        <button type="button"
                                class="btn d-flex bg-dark text-center text-white rounded-2 cursor-pointer border-0">
                            <h5>Hủy đơn đặt phòng</h5>
                        </button>
                    </a>

                </div>
            </div>
            <div class="row mx-4 d-flex justify-content-center">
                @foreach($bookings as $booking)
                    <div class="col-lg-3 position-relative">
                        <div class="card bg-white border-0  ">
                            <div class=" rounded-4 overflow-hidden">
                                <div class="cursor-pointer hover-setimg">
                                    <a class=" cursor-pointer " href="">
                                        <img src="{{asset('images/img-1.svg')}}" class="d-block w-100 c-img "
                                             alt="Slide 1">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body py-3 px-0">
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#" class="text-decoration-none text-dark">
                                        <p class="fs-6 py-1 fw-medium m-0">{{$booking['room']['TenPhong']}}</p>
                                    </a>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <i class="fa-solid fa-star fa-sm  px-2"></i>
                                        <p class="m-0">{{rand(1, 4)}}.{{rand(0, 9)}}</p>
                                    </div>
                                </div>
                                <p class="py-1 m-0">{{$booking['room']['GioiThieuPhong']}}</p>
                                <h5 class="text-decoration-underline py-1 m-0 fs-6">Tổng: {{$booking['room']['DonGia']}}
                                    VND</h5>
                            </div>
                            <div class="position-absolute" style="top:10px;right:10px">
                                <button type="submit" id="heart-button" class="btn btn-outline heart-button">
                                    <i id="heart-icon" class="far fa-heart heart-icon fa-2xl"
                                       style="color: #ffffff;"></i>
                                </button>
                            </div>
                            <div class="position-absolute" style="top:10px;left:10px">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
<script>
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
