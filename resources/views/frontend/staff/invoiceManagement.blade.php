@extends('frontend.component.layout-employee')
@section('content')
    <div class="w-100 h-100">
        <div>
            <form class="container mx-auto bg-white h-100 mt-5">
                <div class="d-flex gap-5 align-items-center my-4 justify-content-between">
                    <div>
                        <a href="/employeehome" class="position-absolute text-dark z-0" style="top:118px;left:45px;">
                            <i class="fa-solid fa-chevron-left"></i>
                        </a>
                    </div>
                    <div>
                        <div href="#" class="text-decoration-none text-dark ">
                            <p class="fs-4 fw-medium text-center ">Danh sách hóa đơn</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end col-lg-2 align-self-center bg-white btn-arrange btn-group ">
                        <div type="button" class="" data-bs-toggle="dropdown" data-bs-display="static"
                             aria-expanded="false" role="button">
                            <i class="fa-solid fa-sliders fa-2xl"></i>
                        </div>
                        <ul class="dropdown-menu dropdown-menu-lg-end border-1 rounded-4 position-absolute"
                            style="background-color:#FDE7FB; top:40px; width:220px">
                            <li>
                                <form method="GET" class="dropdown-item fs-6 py-2 fw-medium">
                                    <input
                                        type="text"
                                        name="new"
                                        value="new"
                                        class=" d-none"
                                    />
                                    <button class="dropdown-item fs-6 py-2 fw-medium" type="submit">Mới nhất</button>
                                </form>
                            </li>
                            <li>
                                <form method="GET" class="dropdown-item fs-6 py-2 fw-medium">
                                    <input
                                        type="text"
                                        name="old"
                                        value="old"
                                        class=" d-none"
                                    />
                                    <button class="dropdown-item fs-6 py-0 px-0 fw-medium" type="submit">Cũ nhất
                                    </button>
                                </form>

                            </li>
                        </ul>
                    </div>
                </div>
                <div class="container mx-auto  d-flex row my-5 ">
                    @foreach($books as $book)
                        <div class="col-lg-3 my-2">
                            <div class=" mx-1 rounded-4 border" style="height:240px">
                                <div class="d-flex pt-5 ps-4">
                                    <p class="fw-medium">Mã hóa đơn: </p>
                                    <p class="fw-medium">{{$book['MaDatPhong']}}</p>
                                </div>
                                <div class="d-flex ps-4">
                                    @php
                                        $originalDate = new DateTime($book['NgayCheckOut']);
                                        $formattedDate = $originalDate->format("m/d/Y"); @endphp
                                    <p class="fw-medium">Ngày xuất: </p>
                                    <p class="fw-medium">{{$formattedDate}}</p>
                                </div>
                                <div class="d-flex ps-4">
                                    <p class="fw-medium">Tên khách hàng: </p>
                                    <p class="fw-medium text-danger">{{$book['customer']['TenKH']}}</p>
                                </div>
                                <div class="d-flex ps-4">
                                    @php
                                        $ngayCheckIn = strtotime($book['NgayCheckIn']);
                                        $ngayCheckOut = strtotime($book['NgayCheckOut']);

                                        $soNgay = abs(($ngayCheckIn - $ngayCheckOut) / (60 * 60 * 24));
                                    @endphp
                                    <p class="fw-medium">Tổng tiền: </p>
                                    <p class="fw-medium">{{$book['room']['DonGia']*$soNgay}}đ</p>
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
                <div class="container mx-auto row" style=" box-sizing: border-box
">
                </div>


            </form>
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
