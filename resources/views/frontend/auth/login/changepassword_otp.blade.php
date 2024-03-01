<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Changepassword_otp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5 rounded"  id="create-profile" style="width:Hug (568px);height: Hug (386px);top: 715px; left: -2110px;border-radius: 12px
">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card" >
                <div class="card-header text-center fw-bold d-flex  padding-form" style="padding: 22px 24px; background: none ">
                    <a class="text-dark text-decoration-none" href="">
                        <i class="fa-solid fa-chevron-left"></i>
                    </a>

                    <div class=" text-login text-header w-100" style="line-height: 20px ; font-size: 16px ; font-weight: 700 ">Tìm lại tài khoản của bạn</div>
                </div>
                <div id="changepasswordsuccess-body" class="card-body">
                    <div style="padding: 10px">
                        <p class="text-center grey-text text-5 d-flex justify-content-center " style="font-weight: 500 ; font-size: 22px ; line-height: 26px">Chúng tôi đã gửi mã cho bạn</p>
                        <label for="" class="text-center d-flex justify-content-center" style="font-weight: 400 ; font-size: 16px ; line-height: 20px">Kiểm tra email hoặc điện thoại của bạn để lấy mã xác nhận</label>
                    </div>

                    <div style="padding: 10px ">
                        <div class="form-floating">
                            <input type="text" maxlength="4" class="form-control" id="otp" style="width: 119px ; height: 56px; margin : auto ; padding : 10px ">
                        </div>

                        <button type="button" class="btn  w-100 py-3 mt-3 rounded continue-button d-flex justify-content-center border-0" id="otp-continue" style="background:#DDDDDD; color: white ; width: 106px !important; height: 48px !important; border-radius: 8px ; gap : 8px; padding: 14px 24px !important;margin: auto ">Tiếp tục</button>
                        <style>
                            input[type="text"]{
                                font-size: 20px;
                                font-weight: 600;
                                line-height: 20px;
                                letter-spacing: 7px;
                                text-align: center;
                            }

                            #otp-continue:hover{
                                background: #222222;
                            }

                        </style>

                        <script>
                            document.getElementById("otp").addEventListener("input", function() {
                                var otpValue = this.value.trim();
                                var continueButton = document.getElementById("otp-continue");

                                if (otpValue !== "") {
                                    continueButton.style.backgroundColor = "#000000";
                                } else {
                                    continueButton.style.backgroundColor = "#DDDDDD";
                                }
                            });

                        </script>
                    </div>

                </div>

                <div class="d-flex justify-content-center " style="padding: 14px 24px">
                    <label style="font-weight: 400; font-size: 16px ;line-height: 20px">Không nhận được tin nhắn? <a href="" style="font-weight: 700; font-size: 16px ;line-height: 20px ; color: #222222">Gửi lại</a></label>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<img src="bootstrap/css/patterns/icon-upload.svg" alt="">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/2688c22119.js" crossorigin="anonymous"></script>
</body>

