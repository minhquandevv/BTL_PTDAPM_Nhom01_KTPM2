<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo hồ sơ 3</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9e29fd661a.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/css/customize-register.css">
    
</head>
<body>

<div class="container mt-5 rounded"  id="create-profile">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card" >
                <div class="card-header text-center fw-bold d-flex  padding-form">
                    <a class="text-dark text-decoration-none" href="">
                        <i class="fa-solid fa-angle-left"></i>
                    </a>
                    
                    <div class=" text-register text-header w-100">Tạo hồ sơ của bạn</div>
                </div>
                <div id="register-body" class="card-body">
            
                       <div class="d-flex flex-column align-items-center">
                        <p class="text-center grey-text text-6">BƯỚC 1 TRÊN 2</p>
                        <p class="text-center grey-text text-5">Xác nhận số điện thoại của bạn</p>
                        <p class="text-center grey-text text-3">Nhập mã AirHome gồm 4 chữ số +84 1234 56789</p>
                        
                        <div class="">
                            <div class="ps-3 border rounded otp-dash w-100 text-center py-3 grey-text fw-500 " id="d-val-otp">
                                ----
                            </div>
                            <input maxlength="4" class="custom-otp  border rounded grey-text fw-500" id="floatingOTP">
                        </div>
                        {{-- btn tiếp tục --}}
                        <button type="button" class="btn py-3 my-4 rounded btn-dark text-register text-light text-4" id="continue-button3" disabled>Tiếp tục</button>
                        
                        <p>Không nhận được tin nhắn? <a class="fw-bold text-decoration-underline" id="fw-500">Gửi lại</a></p>
                        <a href="#" class="fw-bold text-decoration-underline" id="call-me">Gọi tôi</a>
                        <a href="#" class="fw-bold text-decoration-underline mt-3" id="later">Để sau</a>
                       </div>
                       
                </div>
            </div>
        </div>
    </div>
</div>


  
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
{{-- Sự kiện nhập otp --}}
<script>
    let dvalOpt = document.getElementById("d-val-otp");
    let inputOpt = document.getElementById("floatingOTP");
    inputOpt.onkeyup = ()=>{
        let str = inputOpt.value;
        for (let i = 0; i < 4-inputOpt.value.length; i++) {
            str+="-";
        }
        dvalOpt.innerHTML = str;
    }
    dvalOpt.onclick = ()=>{
        inputOpt.focus();
        checkFocus();
    }
    function checkFocus() {
    if (document.activeElement === inputOpt) {
        dvalOpt.classList.add("shadow-sm");
        console.log("Input has focus");
    } else {
        dvalOpt.classList.remove("shadow-sm");
        console.log("Input does not have focus");
    }
    document.onclick = ()=>{
        checkFocus();
    }
}
</script>

{{-- Sự kiện disable nút --}}
<script>
    // Lấy thẻ input và nút tiếp tục
    const otpInput = document.getElementById('floatingOTP');
    const continueButton = document.getElementById('continue-button3');

    // Thêm sự kiện 'input' vào thẻ input
    otpInput.addEventListener('input', function() {
        // Kiểm tra độ dài của giá trị nhập vào
        if (otpInput.value.length === 4) {
            // Nếu đủ 4 ký tự, bật nút tiếp tục
            continueButton.removeAttribute('disabled');
        } else {
            // Ngược lại, tắt nút tiếp tục
            continueButton.setAttribute('disabled', true);
        }
    });
</script>
 