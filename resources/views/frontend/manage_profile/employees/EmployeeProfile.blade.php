<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin cá nhân nhân viên</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9e29fd661a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="bootstrap/css/customize-register.css">
    <link rel="stylesheet" href="bootstrap/css/customize-mp-cus.css">
</head>
<body>

<div class="container mt-5 rounded"  id="register-card">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card" >
                <div class="card-header text-center fw-bold d-flex  padding-form">
                    <a class="text-dark text-decoration-none" href="">
                        <i class="fa-solid fa-angle-left"></i>
                    </a>
                    
                    <div class=" text-register text-header w-100">Thông tin cá nhân</div>
                </div>
                
                <div id="register-body1" class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                        <div></div>
                        <div></div>
                        <a href="http://127.0.0.1:8000/mp1">
                            Đổi mật khẩu
                        </a>
                    </div>
                    <form method="POST">
                        @csrf
                        <div id="input-group" class="">
                            <div class="border rounded overflow-hidden">    
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 rounded-0 grey71-text" id="floatingEmployeeCode" placeholder="Mã nhân viên" value="NV01" readonly>
                                    <label for="floatingEmployeeCode">Mã nhân viên</label>
                                  </div>
                           </div> 
                        </div>
                        <div id="input-group" class="mt-3">
                            <div class="border rounded overflow-hidden">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 rounded-0 border-bottom grey71-text" id="floatingFirstNameLogin" placeholder="Họ" value="Nguyễn" readonly>
                                    <label for="floatingFirstNameLogin">Họ</label>
                                  </div>
    
                                  <div class="form-floating">
                                    <input type="text" class="form-control border-0 rounded-0 grey71-text" id="floatingLastNameLogin" placeholder="Tên" value="Văn A" readonly>
                                    <label for="floatingLastNameLogin">Tên</label>
                                  </div>
                           </div> 
                        </div>
                        <div id="input-group" class="mt-2">
                            <label for="gender-check" class="form-label mb-0 mx-2 label-gender">Giới tính</label>

                            <div class="d-flex mt-2" id="gender-profile"> 

                                <div class="form-check ">
                                    <input class="form-check-input radio-checked-custom" type="radio" name="gender" value="male" id="maleLogin" checked/>
                                    <label class="form-check-label custom-label" for="male">Nam</label>
                                </div>
                                <div class="form-check ">
                                    <input class="form-check-input radio-checked-custom" type="radio" name="gender" value="female" id="femaleLogin" disabled/>
                                    <label class="form-check-label custom-label" for="female">Nữ</label>
                                </div>
                           </div> 
                        </div>
                        <div id="input-group" class="mt-3">
                            <div class="border rounded overflow-hidden">    
                                <div class="form-floating">
                                    <input type="date" class="form-control border-0 rounded-0 grey71-text" id="floatingBirthdayLogin" placeholder="Ngày sinh" value="2003-01-01" readonly>
                                    <label for="floatingBirthdayLogin">Ngày sinh</label>
                                  </div>
                           </div> 
                        </div>
                        
                        <div id="input-group" class="mt-3">
                            <div class="form-floating border rounded overflow-hidden">    
                                <input type="text" class="form-control border-0 grey71-text" id="floatingAddress" placeholder="Địa chỉ" value="Hà Nội" readonly>
                                <label for="floatingAddress">Địa chỉ</label>

                           </div> 
                        </div>

                        <div id="input-group" class="mt-3">
                            <div class="form-floating border rounded overflow-hidden">    
                                <input type="email" class="form-control border-0 grey71-text" id="floatingEmail" placeholder="Email" value="hello@gmail.com" readonly>
                                <label for="floatingEmail">Email</label>

                           </div>  
                        </div>

                        <div id="input-group" class="mt-3">
                            <div class="border rounded overflow-hidden">    
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 rounded-0 grey71-text" id="floatingPhoneNumberEP" placeholder="Số điện thoại" value="09876543212" readonly>
                                    <label for="floatingPhoneNumberEP">Số điện thoại</label>
                                  </div>
                           </div> 
                        </div>
                        {{-- Luong --}}
                        <div id="input-group" class="mt-3">
                            <div class="border rounded overflow-hidden">    
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 rounded-0 grey71-text" id="floatingSalary" placeholder="Lương" value="10000000" readonly>
                                    <label for="floatingSalary">Lương</label>
                                  </div>
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
