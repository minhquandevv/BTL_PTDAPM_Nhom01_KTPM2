@extends('frontend.component.layout-employee')
@section('content')
    <div class="container mx-auto bg-white ">
        <div class="d-flex gap-5 align-items-center my-4 justify-content-center">
            <a href="/employeehome" class="position-absolute z-0 text-dark " style="top:118px;left:45px;">
                <i class="fa-solid fa-chevron-left"></i>
            </a>
            <div class="text-decoration-none text-dark ">
                <p class="fs-2 fw-medium text-center"> Lịch sử đặt phòng</p>
            </div>
        </div>
        @foreach($books as $book)
            <div class="border rounded-4 my-5">
                <div class="mt-4 ms-3">
                    <a href="#" class="text-decoration-none text-dark ">
                        <p class="fs-4 fw-medium">{{$book['room']['TenPhong']}}</p>
                    </a>
                </div>
                <div class="row mx-4 ">
                    <div class="col-md-2 my-3">
                        <a href="">
                            @if(isset($book['imgroom']['0']['DuongDanAnh']))
                                <img class="card-img-top rounded-4"
                                     src="{{ asset($book['imgroom']['0']['DuongDanAnh']) }}"
                                     style="width: 168px; height:138px"/>
                            @else
                                <img class="card-img-top rounded-4" src="{{asset('images/img-1.svg')}}"
                                     style="width: 168px; height:138px"/>
                            @endif

                        </a>
                    </div>
                    <div class="col-md-6 align-items-center mt-4">
                        <h5>Mã phòng: {{$book['room']['MaP']}} </h5>
                        <h5>Tên Phòng: {{$book['room']['TenPhong']}} </h5>
                        <h5>Giá Phòng: {{$book['room']['DonGia']}}VND </h5>
                    </div>
                    <div class="col-md-4 d-flex justify-content-end align-items-center mb-5 ">
                        <a href="/historyandreviews2/{{$book['room']['MaP']}}" class="text-decoration-none ">
                            <p class="fs-3 fw-medium text-secondary text-danger">Xem đánh giá/phản hồi</p>
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
    </script>
@endsection
