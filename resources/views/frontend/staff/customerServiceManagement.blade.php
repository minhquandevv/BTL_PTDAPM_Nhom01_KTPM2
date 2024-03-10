@extends('frontend.component.layout-employee')
@section('content')
    <div class="w-100 h-100">
        <div class="container mx-auto bg-white h-100 mt-4">
            <div class="d-flex gap-5 align-items-center justify-content-center">
                <a href="/employeehome" class="position-absolute z-0 text-dark " style="top:118px;left:45px;">
                    <i class="fa-solid fa-chevron-left"></i>
                </a>
                <div class="text-decoration-none text-dark ">
                    <p class="fs-3 fw-medium text-center">Danh sách tài khoản khách hàng</p>
                </div>
            </div>
            <div class="d-flex row my-5 d-flex">
                @foreach($customers as $customer)
                    <div class="rounded-4 border me-4 mt-4" style="width:300px; height:300px">
                        <div class="py-4 d-flex justify-content-center ">
                            @if (isset($customer['DuongDanAnh']))
                                <a href="{{ route('customerservicemanagement.show', $customer)}}">
                                    <img src="{{ asset($customer['DuongDanAnh'])}}"
                                         class="d-block w-100 c-img rounded-circle" alt="Slide 1"
                                         style="height:150px ;width: 150px !important;">
                                    @else
                                        <img src="https://i.upanh.org/2024/02/27/image-338f9269a01ee5bd98.png"
                                             alt="image-338f9269a01ee5bd98.png">
                                </a>
                            @endif
                        </div>
                        <div class="text-center">
                            <a href="{{ route('customerservicemanagement.show', $customer)}}"
                               class="text-dark text-decoration-none fs-3 fw-medium">{{$customer['TenKH']}}</a>
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

