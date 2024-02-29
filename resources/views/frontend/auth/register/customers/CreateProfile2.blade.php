<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo hồ sơ 2</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9e29fd661a.js" crossorigin="anonymous"></script>
    
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
                            <button type="button" class="btn  w-100 py-3 my-4 rounded btn-dark text-register text-light text-4" id="continue-button">Tiếp tục</button>
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

  


</body>
</html>
