@extends('frontend.component.layout-customer')
@section('content')
    <form class="container mx-auto bg-white h-100 mt-4">
        <div class="d-flex gap-5 align-items-center my-4 justify-content-between w-100">
            <div>
                <a href="/homemanager" class="position-absolute text-dark z-0" style="top:118px;left:45px;">
                    <i class="fa-solid fa-chevron-left"></i>
                </a>
            </div>
            <div>
                <div class="text-decoration-none text-dark text-center ps-5">
                    <p class="fs-4 fw-medium text-center ">Danh sách tài khoản nhân viên</p>
                </div>
            </div>
            <div>
                <a href="/addemployee" class="text-decoration-none">
                    <button type="button"
                            class="btn d-flex bg-danger text-center text-white rounded-2 cursor-pointer border-0"
                            style="background: linear-gradient(90deg, rgba(230, 30, 77, 0) 0%, rgba(227, 28, 95, 0.5) 35.42%, #D70466 100%), #FF385C; height:56px">
                        <div class="pe-3 py-2">
                            <i class="fa-solid fa-plus fa-2xl" style="color: #ffffff;"></i>
                        </div>
                        <div class="py-2">
                            <h5>Thêm tài khoản</h5>
                        </div>
                    </button>
                </a>
            </div>
        </div>
        <div class="d-flex row ">
            @foreach($employees as $employee)
                <div class="col-lg-3 my-5 d-flex">
                    <div class="rounded-4 border me-4 position-relative " style="width:300px; height:300px">
                        <div class="py-4 d-flex justify-content-center ">
                            @if(isset($employee['DuongDanAnh']))
                                <img class="card-img-top rounded-circle"
                                     src="{{ asset($employee['DuongDanAnh']) }}"
                                     style="height: 150px;width: 150px"/>
                            @else
                                <img src="https://i.upanh.org/2024/02/27/image-338f9269a01ee5bd98.png"
                                     class="rounded-5"
                                     alt="image-338f9269a01ee5bd98.png">
                            @endif
                        </div>
                        <div class="text-center">
                            <a href="{{ route('manageeminforployeeaccounts', $employee->MaNV)}}"
                               class="text-dark text-decoration-none fs-3 fw-medium">{{$employee['TenQL']}}</a>
                        </div>
                        <div class="position-absolute" style="top:10px;left:10px">
                            <a href="{{ route('manageeminforployeeaccounts', $employee->MaNV)}}">
                                <button type="button" class="btn border-0 p-1 ">
                                    <i class="fa-regular fa-pen-to-square fa-2xl"></i>
                                </button>
                            </a>
                            <a href="{{ route('manageeminforployeeaccounts', $employee->MaNV)}}">
                                <button type="button" class="btn border-0 p-1">
                                    <i class="fa-solid fa-trash-can fa-2xl" style="color: #ff0000;"></i>
                                </button>
                            </a>
{{--                            <a href="{{ route('manageemdeleteeformployeeaccounts', $employee->MaNV)}}">--}}
{{--                                <button type="button" class="btn border-0 p-1">--}}
{{--                                    <i class="fa-solid fa-trash-can fa-2xl" style="color: #ff0000;"></i>--}}
{{--                                </button>--}}
{{--                            </a>--}}
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
        });</script>
@endsection
