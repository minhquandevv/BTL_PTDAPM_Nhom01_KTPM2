<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa phòng</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9e29fd661a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="bootstrap/css/customize-register.css">
    <link rel="stylesheet" href="bootstrap/css/customize-employee.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="custom-container-employee my-5" id="create-motel-container">
        <div class="d-flex ">
            <a class="text-dark text-decoration-none edit-icon-image" href="">
                <i class="fa-solid fa-angle-left"></i>
            </a>
            
            <div class="ms-10 text-edit-pic w-100 fw-500">Xe cắm trại/RV tại Half Moon Bay, California, Hoa Kỳ</div>
        </div>
        
    
        <div class="ms-10 mt-4 ">
            <div class="row gap-3 ">
              <div class="col p-0"><img src="bootstrap/css/patterns/img2-hs.svg" class="image-border-left col w-100" alt=""></div>
              <div class="col ">
                  <div class="row gap-3">
                      <div class="row gap-3">
                          <div class=" col p-0">
                            <img width="100%" src="bootstrap/css/patterns/img2-hs.svg" class="img-default-homestay " alt="">
                          </div>
                          <div class=" col p-0 ">
                                <img width="100%" src="bootstrap/css/patterns/img2-hs.svg" class="image-border-top-right" alt="">
                          </div>
                      </div>
                      <div class="row gap-3">
                          <div class=" col p-0">
                            <img width="100%" src="bootstrap/css/patterns/img2-hs.svg" class="img-default-homestay" alt="">
                          </div>
                          <div class=" col p-0">
                            <img width="100%" src="bootstrap/css/patterns/img2-hs.svg" class="image-border-bottom-right" alt="">
                          </div>
                      </div>
                  </div>
                  
              </div>
            </div>
          </div>

        <div class="ms-10 mt-5">
            <div class="text-up-pic w-100 fw-700">Thông tin phòng</div>

            <table class="table custom-table-pic mt-4" id="create-homestay-table">
                <tbody >
                    <tr >
                    <td class="custom-td col-width"><label for="code-homestay-label" class="input-place-label text-dark">Mã phòng:</label></td>
                    <td class="custom-td"><input type="text" class="border rounded input-code-homestay border-input-pic text-input-pic" id="" value="123"></td>
                    </tr>

                    <tr>
                    <td class="custom-td col-width"><label for="code-homestay-label" class="input-place-label text-dark">Tên phòng:</label></td>
                    <td class="custom-td"><input type="text" class="border rounded input-name-homestay border-input-pic" id="" value="123"></td>
                    </tr>

                    <tr>
                    <td class="col-width"><label for="code-homestay-label" class="input-place-label text-dark">Giới thiệu phòng:</label></td>

                    <td><textarea id="" cols="44" rows="10" class="border rounded input-introduce-homestay border-input-pic" value="123"></textarea></td>
                    </tr>

                    <tr>
                    <td class="custom-td col-width"><label for="code-homestay-lable" class="input-place-label text-dark">Trạng thái phòng:</label></td>
                    <td class="custom-td"><input type="text" class="border rounded input-code-homestay border-input-pic" id="" value="123"></td>
                    </tr>

                    <tr>
                    <td class="custom-td col-width"><label for="code-homestay-lable" class="input-place-label text-dark">Đơn giá:</label></td>
                    <td class="custom-td"><input type="text" class="border rounded input-code-homestay border-input-pic" id="" value="123"></td>
                    </tr>

                </tbody>
            </table>
            <div class="text-center ms-10">
                <button type="button" class="btn  rounded btn-color fw-500" id="accept-upload-button">Cập nhật thông tin phòng</button>

            </div>
        </div>

    </div>

 
  
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
