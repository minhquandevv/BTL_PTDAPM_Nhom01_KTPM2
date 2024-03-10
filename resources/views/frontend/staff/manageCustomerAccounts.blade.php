<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin cá nhân khách hàng</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9e29fd661a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="bootstrap/css/customize-register.css">
    <link rel="stylesheet" href="bootstrap/css/customize-mp-cus.css">
</head>
<body>

<div class="container mt-5 rounded" id="register-card">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center fw-bold d-flex  padding-form">
                    <a href="/customerservicemanagement" class="text-dark text-decoration-none">
                        <i class="fa-solid fa-angle-left"></i>
                    </a>

                    <div class=" text-register text-header w-100">Thông tin cá nhân</div>
                </div>
                <div class="d-flex justify-content-between">
                    <div></div>
                    @php
                        $full_name = $customer['TenKH'];
                      $name_parts = explode(' ', $full_name, 2);

                    @endphp
                    <div class="rounded-4 border my-4 ms-5" style="width:112px; height:110px">
                        <div class="py-3 d-flex justify-content-center ">
                            @if (isset($customer['DuongDanAnh']))
                                <img src="{{ asset($customer['DuongDanAnh']) }}"
                                     class="d-block w-100 c-img rounded-circle" alt="Slide 1"
                                     style="height:50px ;width: 50px !important;">
                            @else
                                <img src="https://i.upanh.org/2024/02/27/image-338f9269a01ee5bd98.png"
                                     alt="image-338f9269a01ee5bd98.png">
                            @endif
                        </div>
                        <div class="text-center">
                            <a href="#" class="text-dark text-decoration-none fw-bold">{{$name_parts[1]}}</a>
                        </div>
                    </div>
                    <a href="{{ route('comfirmdeleteaccout', ['id' => $customer['MaKH']]) }}">
                        <button type="submit" class="btn border-0 p-1">
                            <i class="fa-solid fa-trash-can fa-2xl" style="color: #ff0000;"></i>
                        </button>
                    </a>
                </div>
                <div id="register-body1" class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                    </div>
                    <form method="POST">
                        @csrf

                        <div id="input-group" class="mt-3">
                            <div class="border rounded overflow-hidden">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 rounded-0 border-bottom grey71-text"
                                           id="floatingFirstNameLogin" placeholder="Họ" value="{{$name_parts[0]}}"
                                           readonly>
                                    <label for="floatingFirstNameLogin"></label>
                                </div>

                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 rounded-0 grey71-text"
                                           id="floatingLastNameLogin" placeholder="Tên" value="{{$name_parts[1]}}"
                                           readonly>
                                    <label for="floatingLastNameLogin">Tên</label>
                                </div>
                            </div>
                        </div>
                        <div id="input-group" class="mt-2">
                            <label for="gender-check" class="form-label mb-0 mx-2 label-gender">Giới tính</label>

                            <div class="d-flex mt-2" id="gender-profile">

                                <div class="form-check ">
                                    <input class="form-check-input radio-checked-custom" type="radio" name="gender"
                                           value="male"
                                           id="maleLogin" {{$customer['GioiTinh'] == "Nam" ? "checked" : "disabled"}} />
                                    <label class="form-check-label custom-label" for="male">Nam</label>
                                </div>
                                <div class="ms-2 form-check ">
                                    <input class="form-check-input radio-checked-custom" type="radio" name="gender"
                                           value="female"
                                           id="femaleLogin" {{$customer['GioiTinh'] == "Nu" ? "checked" : "disabled"}} />
                                    <label class="form-check-label custom-label" for="female">Nữ</label>
                                </div>
                            </div>
                        </div>
                        <div id="input-group" class="mt-3">
                            <div class="border rounded overflow-hidden">
                                <div class="form-floating">
                                    @php
                                        $originalDate = new DateTime($customer['NgaySinh']);
                                        $formattedDate = $originalDate->format("m/d/Y"); @endphp
                                    <input type="text" class="form-control border-0 rounded-0 grey71-text"
                                           id="floatingBirthdayLogin" placeholder="Ngày sinh" value="{{$formattedDate}}"
                                           readonly>

                                    <label for="floatingBirthdayLogin">Ngày sinh</label>
                                </div>
                            </div>
                        </div>

                        <div id="input-group" class="mt-3">
                            <div class="form-floating border rounded overflow-hidden">
                                <input type="text" class="form-control border-0 grey71-text" id="floatingAddress"
                                       placeholder="Địa chỉ" value="{{$customer['DiaChi']}}" readonly>
                                <label for="floatingAddress">Địa chỉ</label>

                            </div>
                        </div>

                        <div id="input-group" class="mt-3">
                            <div class="form-floating border rounded overflow-hidden">
                                <input type="email" class="form-control border-0 grey71-text" id="floatingEmail"
                                       placeholder="Email" value="{{$customer['Email']}}" readonly>
                                <label for="floatingEmail">Email</label>

                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
