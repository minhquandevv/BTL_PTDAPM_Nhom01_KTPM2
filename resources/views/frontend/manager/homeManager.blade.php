@extends('frontend.component.layout-employee')
@section('content')
<div class="d-flex col-3 justify-content-center w-100 py-4 " style="background-color:#FFEBEB">
    <div class="d-flex">
        <img class="card-img-top-logo rounded-lg " src="images/logo-home.svg" alt="/"
            style="height:111px;width:80px" />
        <img class="card-img-top-text rounded-lg" src="images/text_home.svg" alt="/"
            style="width:220px;height:111px" />
    </div>
</div>
<form>
    <div class="d-flex justify-content-between">
        <div class="ms-5 py-5 ps-4 position-relative">
            <div>
                <img class="card-img-top rounded-lg" src="images/image_thongke.svg" alt="" />
            </div>
            <div class=" d-flex position-absolute " style="top:292px;left:86px">
                <div>
                    <img class="card-img-top" src="images/icon_tk.svg" alt="" />
                </div>
                <div class="dropdown " id="register-body">
                    <button href="#" class="btn border-0 fs-1 my-3 ms-3 fw-medium" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Thống kê
                    </button>
                    <ul class="dropdown-menu px-5">
                      <li>
                        <a class="dropdown-item" href="/statistics">
                            <button type="button" style="width:260px" class="btn-danger border-0 m-3 p-4 pe-4 rounded text-white fs-5 ">Thống kê doanh thu</button>
                        </a>
                        </li>
                      <li>
                        <a class="dropdown-item " href="/customerstatistics">
                            <button type="button" style="width:260px"  class="btn-danger border-0 m-3 p-4 rounded text-white fs-5">Thống kê khách hàng</button>
                        </a>
                    </li>
                    </ul>
                  </div>
                {{-- <a href="#" class="text-decoration-none text-dark ">
                    <p class="fs-1 my-3 ms-3 fw-medium">Thống kê</p>
                </a> --}}
            </div>
        </div>
        <div class="me-5 py-5 pe-4 position-relative">
            <div>
                <img class="card-img-top rounded-lg" src="images/image_tkongke2.svg" alt="" />
            </div>
            <div class=" d-flex position-absolute " style="top:292px;left:100px">
                <div>
                    <img class="card-img-top" src="images/icon_manage.svg" alt="" />
                </div>
                <a href="/manageemployeeaccounts" class="text-decoration-none text-dark ">
                    <p class="fs-1 my-3 ms-3 fw-medium">Quản lý tài khoản nhân viên</p>
                </a>
            </div>
        </div>
    </div>
</form>
@endsection
