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
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
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
                        <img width="68px" height="83px" src="bootstrap/css/patterns/home.svg" alt="home-image">
                        <p class="text-center grey-text  text-5">Chào mừng đến với AirHome</p>
                        <p class="text-center grey-text  text-3">Khám phá những nơi lưu trú và những trải nghiệm độc đáo trên khắp thế giới.</p>
                       </div>
                       <button type="button" class="btn  w-100 py-3 mt-2 rounded btn-dark text-register text-light fw-500" id="continue-button">Tiếp tục</button>

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
