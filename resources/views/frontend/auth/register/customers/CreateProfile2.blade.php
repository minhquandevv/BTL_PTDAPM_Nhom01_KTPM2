<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo hồ sơ 2</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
                    <form method="POST">
                        @csrf
                       <div class="d-flex flex-column align-items-center">
                        <p class="text-center grey-text text-6 ">BƯỚC 1 TRÊN 2</p>
                        <p class="text-center grey-text text-5 ">Xác nhận số điện thoại của bạn</p>
                        <p class="text-center grey-text text-3">Điều này là để AirHome có thể liên hệ với bạn.</p>
                       </div>
                       <div class="border rounded overflow-hidden">
                        <div class="form-floating">
                            {{-- <input type="text" class="form-control border-0 rounded-0 border-bottom" id="floatingFirstName" placeholder="Quốc gia/Vùng"> --}}
                            <select class="form-select border-0 rounded-0 border-bottom text-8 grey-text" id="floatingVN" aria-label="Quốc gia/Vùng">
                                <option selected>Vietnam (+84)</option>
                              </select>
                            <label for="floatingVN">Quốc gia/Vùng</label>
                          </div>

                          <div class="form-floating">
                            <input type="text" class="form-control border-0 rounded-0 text-8 grey-text" id="floatingPhoneNumber" placeholder="Số điện thoại">
                            <label for="floatingPhoneNumber">Số điện thoại</label>
                          </div>
                        </div> 
                        <p class="mt-2 grey-text text-7">Chúng tôi sẽ gọi điện hoặc nhắn tin cho bạn để xác nhận số của bạn. Tin nhắn và dữ liệu áp dụng mức giá tiêu chuẩn.</p>
                        <div class="d-flex align-items-center">
                            <input class="form-check-input custom-check-box" type="checkbox" id="check1" value="" >
                            <label class="form-check-label grey-text  text-7">Gửi cho tôi đường liên kết tới website AirHome miễn phí</label>
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn  w-100 py-3 my-4 rounded btn-dark text-register text-light text-4" id="continue-button" disabled>Tiếp tục</button>
                            <a href="" class="mt-5  text-4" id="back-a">Để sau</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

  
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    const phoneNumberInput = document.getElementById('floatingPhoneNumber');
    const continueButton = document.getElementById('continue-button');
    //
    checkPhoneNumber();
    phoneNumberInput.addEventListener('input', checkPhoneNumber);

    function checkPhoneNumber() {
        let phoneNumber = phoneNumberInput.value.replace(/[^\d+]/g, ''); 
        let formattedPhoneNumber = '';
        for (let i = 0; i < phoneNumber.length; i++) {
            if (i === 3 || i === 7) {
                formattedPhoneNumber += ' ';
            }
            formattedPhoneNumber += phoneNumber[i];
        }
        phoneNumberInput.value = formattedPhoneNumber;

        
    }
    

</script>

<script>
    
    //Sự kiện Enable Continue Button
    const regexPhoneNumber1 = /(84[3|5|7|8|9])+([0-9]{8})\b/g;
    const regexPhoneNumber2 = /(0[3|5|7|8|9])+([0-9]{8})\b/g;
    phoneNumberInput.addEventListener('input', function() {
        let phoneNumber1 = phoneNumberInput.value.replace(/\D/g, '');
        
        if(phoneNumber1.startsWith('84') && regexPhoneNumber1.test(phoneNumber1)){
            continueButton.removeAttribute('disabled');
        }
        if(phoneNumber1.startsWith('0') && regexPhoneNumber2.test(phoneNumber1)){
            continueButton.removeAttribute('disabled');
        }
    });

</script>

</body>
</html>
