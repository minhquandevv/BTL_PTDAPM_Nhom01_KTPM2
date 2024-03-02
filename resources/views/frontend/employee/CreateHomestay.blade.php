<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng phòng</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9e29fd661a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="bootstrap/css/customize-register.css">
    <link rel="stylesheet" href="bootstrap/css/customize-employee.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="custom-container-employee mt-5" id="create-homestay-container">
        <div class=" text-center d-flex justify-content-between">
            <a class="text-dark text-decoration-none custom-icon-image" href="">
                <i class="fa-solid fa-angle-left"></i>
            </a>
            
            <div class="text-up-pic w-100">Đăng ảnh</div>
            <div></div>
        </div>
        {{--  --}}
        <div class="my-5 row ">     
            {{-- khung nhập --}}
            <div class="border input-place-pic border-input-pic col order-2 order-md-1" >
                <table class="table custom-table-pic mt-3 mb-4 ms-3 me-5" id="create-homestay-table">
                    <tbody >
                        <tr >
                        <td class="custom-td"><label for="code-homestay-label" class="input-place-label text-dark">Mã phòng:</label></td>
                        <td class="custom-td"><input type="text" class="border rounded input-code-homestay border-input-pic text-input-pic" id=""></td>
                        </tr>

                        <tr>
                        <td class="custom-td"><label for="code-homestay-label" class="input-place-label text-dark">Tên phòng:</label></td>
                        <td class="custom-td"><input type="text" class="border rounded input-name-homestay border-input-pic" id=""></td>
                        </tr>

                        <tr>
                        <td ><label for="code-homestay-label" class="input-place-label text-dark">Giới thiệu phòng:</label></td>

                        <td><textarea id="" cols="44" rows="10" class="border rounded input-introduce-homestay border-input-pic"></textarea></td>
                        </tr>

                        <tr>
                        <td class="custom-td"><label for="code-homestay-lable" class="input-place-label text-dark">Trạng thái phòng:</label></td>
                        <td class="custom-td"><input type="text" class="border rounded input-code-homestay border-input-pic" id=""></td>
                        </tr>

                        <tr>
                        <td class="custom-td"><label for="code-homestay-lable" class="input-place-label text-dark">Đơn giá:</label></td>
                        <td class="custom-td"><input type="text" class="border rounded input-code-homestay border-input-pic" id=""></td>
                        </tr>

                    </tbody>
                    </table>
                    
            </div>

            
            <div class="col-4 order-1 order-md-2 ms-4">
                <div class="upload-picture rounded  d-flex justify-content-center align-items-center">
                    <label class="label-add-image">
                        
                        <img width="80px" height="80px" src="bootstrap/css/patterns/upload.svg" alt="">
                        Thêm ảnh
                        
                        <input type="file" class="d-none" name="" id="">
                        
                    </label>
                </div>
                <div class="text-center mt-10">
                    <button type="button" class="btn  rounded btn-color fw-500" id="accept-upload-button">Xác nhận đăng phòng</button>

                </div>
            </div>
        </div>
      </div>

 
  
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
