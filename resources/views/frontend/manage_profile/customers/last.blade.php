<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo hồ sơ 1</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9e29fd661a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="bootstrap/css/customize-register.css">
    <link rel="stylesheet" href="bootstrap/css/customize-mp-cus.css">
</head>
<body>

<div class="container mt-5 rounded"  id="create-profile">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card" >
                <div class="card-header text-center fw-bold d-flex  padding-form">
                    <a class="text-dark text-decoration-none" href="">
                        <i class="fa-solid fa-xmark"></i>
                    </a>
                    
                    <div class=" text-register text-header w-100">Thông báo</div>
                </div>
                <div id="register-body" class="card-body">
                    <form method="POST">
                        @csrf
                       <div class="d-flex flex-column align-items-center">
                        <img width="71px" height="70px" src="bootstrap/css/patterns/icon-v.svg" alt="v-image">
                        <p class="text-center grey-text text-edit1 mt-2">Sửa thông tin thành công!</p>
                       </div>
                       {{-- lỗi css --}}
                       <button type="button" class="btn  w-100 py-3 mt-2 rounded btn-dark text-register text-light fw-500" id="continue-button-edit">Tiếp tục</button>

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