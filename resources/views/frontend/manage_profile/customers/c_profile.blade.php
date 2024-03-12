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
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

<div class="container mt-5 rounded" id="register-card">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center fw-bold d-flex  padding-form">
                    <a class="text-dark text-decoration-none" href="/profile1">
                        <i class="fa-solid fa-angle-left"></i>
                    </a>

                    <div class=" text-register text-header w-100">Chỉnh sửa thông tin cá nhân</div>
                </div>
                <div id="register-body" class="card-body">
                    <form action="{{ route('updatePersonalAccount') }}" method="POST">
                        @csrf
                        @method('PUT')
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
                                           id="floatingFirstNameLogin" placeholder="Họ" value="{{$firsName}}"
                                           name="fistName">
                                    <label for="floatingFirstNameLogin">Họ</label>
                                    @error('fistName')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 rounded-0 grey71-text"
                                           id="floatingLastNameLogin" placeholder="Tên" value="{{$lastName}}"
                                           name="lastName">
                                    <label for="floatingLastNameLogin">Tên</label>
                                    @error('lastName')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div id="input-group" class="mt-2">
                            <label for="gender-check" class="form-label mb-0 mx-2 label-gender">Giới tính</label>

                            <div class="d-flex mt-2" id="gender-profile">

                                <div class="form-check ">
                                    <input class="form-check-input radio-checked-custom" type="radio" name="GioiTinh"
                                           value="Nam"
                                           id="maleLogin" {{$employee['GioiTinh']=="Nam" ? "checked" : ""}} />
                                    <label class="form-check-label custom-label" for="male">Nam</label>
                                </div>
                                <div class="form-check ">
                                    <input class="form-check-input radio-checked-custom" type="radio" name="GioiTinh"
                                           value="Nu"
                                           id="femaleLogin" {{$employee['GioiTinh']=="Nu" ? "checked" : ""}} />
                                    <label class="form-check-label custom-label" for="female">Nữ</label>
                                </div>
                                @error('GioiTinh')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
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
                                           name="NgaySinh"
                                    >

                                    <label for="floatingBirthdayLogin">Ngày sinh</label>
                                </div>
                                @error('NgaySinh')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div id="input-group" class="mt-3">
                            <div class="form-floating border rounded overflow-hidden">
                                <input type="text" class="form-control border-0 grey71-text" id="floatingAddress"
                                       placeholder="Địa chỉ" value="{{$employee['DiaChi']}}" name="DiaChi">
                                <label for="floatingAddress">Địa chỉ</label>
                                @error('DiaChi')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div id="input-group" class="mt-3">
                            <div class="form-floating border rounded overflow-hidden">
                                <input type="email" class="form-control border-0 grey71-text" id="floatingEmail"
                                       name="Email"
                                       placeholder="Email" value="{{$employee['Email']}}">
                                <label for="floatingEmail">Email</label>
                                @error('Email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div id="input-group" class="mt-3">
                            <div class="form-floating border rounded overflow-hidden">
                                <input type="text" class="form-control border-0 grey71-text" id="floatingEmail"
                                       name="SoDienThoai"
                                       placeholder="Email" value="{{$employee['SoDienThoai']}}">
                                <label for="floatingEmail">SoDienThoai</label>
                                @error('SoDienThoai')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
{{--                        <div class="mb-3">--}}
{{--                            <label for="Password">Mật khẩu cũ:</label>--}}
{{--                            <input class="form-control" type="Password" id="Password" name="Password"/>--}}
{{--                            @error('Password')--}}
{{--                            <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                            @enderror--}}
{{--                            @if(session('error'))--}}
{{--                                <div class="alert alert-danger">--}}
{{--                                    {{ session('error') }}--}}
{{--                                </div>--}}
{{--                            @endif--}}
{{--                        </div>--}}
{{--                        <div class="mb-3">--}}
{{--                            <label for="MatKhauNew">Mật khẩu mới:</label>--}}
{{--                            <input class="form-control" type="password" id="MatKhauNew" name="MatKhauNew"/>--}}
{{--                            @error('MatKhauNew')--}}
{{--                            <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                        <div class="mb-3">--}}
{{--                            <label for="MatKhauNewConf">Xác nhận mật khẩu mới:</label>--}}
{{--                            <input class="form-control" type="password" id="MatKhauNewConf" name="MatKhauNewConf"/>--}}
{{--                            @error('MatKhauNewConf')--}}
{{--                            <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                            @enderror--}}
{{--                        </div>--}}

{{--                        @if(session('passwordIncorrect'))--}}
{{--                            <div class="alert alert-danger">--}}
{{--                                {{ session('passwordIncorrect') }}--}}
{{--                            </div>--}}
{{--                        @endif--}}
                        <div>
                            <button type="submit" class="btn  w-100 py-3 mt-3 rounded btn-danger text-register fw-500"
                                    id="store-profile">Lưu thông tin
                            </button>

                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
