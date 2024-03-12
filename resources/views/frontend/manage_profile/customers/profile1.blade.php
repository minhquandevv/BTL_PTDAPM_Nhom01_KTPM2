<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin cá nhân</title>
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
                    <a class="text-dark text-decoration-none" href="/bookinghome">
                        <i class="fa-solid fa-angle-left"></i>
                    </a>

                    <div class=" text-register text-header w-100">Thông tin cá nhân</div>
                </div>

                <div id="register-body" class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                        <div></div>
                        <div></div>
                        <a href="{{route("editinfor")}}">
                            <img width="22px" height="22px" class="edit-icon"
                                 src="{{asset('bootstrap/css/patterns/edit-icon.svg')}}"
                                 alt="">
                        </a>
                    </div>
                    <div>
                        <div id="input-group">
                            <div class="border rounded overflow-hidden">
                                @php
                                    $fullName = explode(" ", $employee['TenQL']);

                                    // Extract the first part
                                    $firsName = $fullName[0];

                                    // Extract the rest of the parts and implode them back into a string
                                    $lastName = implode(" ", array_slice($fullName, 1));
                                @endphp
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 rounded-0 border-bottom grey71-text"
                                           id="floatingFirstNameLogin" placeholder="Họ" value="{{$firsName}}" readonly>
                                    <label for="floatingFirstNameLogin">Họ</label>
                                </div>

                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 rounded-0 grey71-text"
                                           id="floatingLastNameLogin" placeholder="Tên" value="{{$lastName}}" readonly>
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
                                           id="maleLogin" {{$employee['GioiTinh']=="Nam" ? "checked" : "disabled"}} />
                                    <label class="form-check-label custom-label" for="male">Nam</label>
                                </div>
                                <div class="form-check ">
                                    <input class="form-check-input radio-checked-custom" type="radio" name="gender"
                                           value="female"
                                           id="femaleLogin" {{$employee['GioiTinh']=="Nu" ? "checked" : "disabled"}} />
                                    <label class="form-check-label custom-label" for="female">Nữ</label>
                                </div>
                            </div>
                        </div>
                        <div id="input-group" class="mt-3">
                            <div class="border rounded overflow-hidden">
                                <div class="form-floating">
                                    @php
                                        $ngay_moi = date("Y-m-d", strtotime($employee['NgaySinh']));
                                    @endphp
                                    <input type="date" class="form-control border-0 rounded-0 grey71-text"
                                           id="floatingBirthdayLogin" placeholder="Ngày sinh" value="{{$ngay_moi}}"
                                           readonly>

                                    <label for="floatingBirthdayLogin">Ngày sinh</label>
                                </div>
                            </div>
                        </div>

                        <div id="input-group" class="mt-3">
                            <div class="form-floating border rounded overflow-hidden">
                                <input type="text" class="form-control border-0 grey71-text" id="floatingAddress"
                                       placeholder="Địa chỉ" value="{{$employee['DiaChi']}}" readonly>
                                <label for="floatingAddress">Địa chỉ</label>

                            </div>
                        </div>

                        <div id="input-group" class="mt-3">
                            <div class="form-floating border rounded overflow-hidden">
                                <input type="email" class="form-control border-0 grey71-text" id="floatingEmail"
                                       placeholder="Email" value="{{$employee['Email']}}" readonly>
                                <label for="floatingEmail">Email</label>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
