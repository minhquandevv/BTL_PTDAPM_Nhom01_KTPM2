<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9e29fd661a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="bootstrap/css/customize-register.css">
    <link rel="stylesheet" href="bootstrap/css/customize-employee.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
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
                    
                    <div class=" text-register text-header w-100">Thông tin khách hàng</div>
                </div>
                <div id="register-body" class="card-body">
                        
                    <div id="input-group" class="mt-3">
                        <div class="form-floating border rounded overflow-hidden">    
                            <input type="text" class="form-control border-0" id="floatingName" placeholder="Họ tên" value="">
                            <label for="floatingName">Họ tên</label>

                        </div> 
                    </div>
                    <div id="input-group" class="mt-4">
                        <div class="form-floating border rounded overflow-hidden">    
                            <input type="text" class="form-control border-0" id="floatingCCCD" placeholder="CCCD" value="">
                            <label for="floatingCCCD">CCCD</label>

                        </div> 
                    </div>
                    <div id="input-group" class="mt-4">
                        <div class="form-floating border rounded overflow-hidden">    
                            <input type="text" class="form-control border-0" id="floatingPhone" placeholder="Số điện thoại" value="">
                            <label for="floatingPhone">Số điện thoại</label>

                        </div> 
                    </div>
                    <div id="input-group" class="mt-4">
                        <div class="form-floating border rounded overflow-hidden">    
                            <input type="email" class="form-control border-0" id="floatingEmail" placeholder="Email" value="">
                            <label for="floatingEmail">Email</label>

                        </div>  
                    </div>
                    <label for="" class="mt-4 fw-500">Phương thức thanh toán: </label>
                    <div class="border rounded overflow-hidden mt-3 ">
                        <table class="w-100">
                            <tr>
                                <td class="col-width-2">
                                    <img id="paymentIcon" src="bootstrap/css/patterns/vnpay.svg" class="icon-vnpay" alt="">
                                </td>
                                <td>
                                    <select class="form-select fw-500 border-0 w-100 select-pay" id="floatingPay" aria-label="VNPay" onchange="changePaymentIcon()">
                                        <option selected class="fw-500 ">VNPay</option>
                                        <option value="cash">Thanh toán khi nhận phòng</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        
                    </div>
                    
                    <button type="button" class="btn  w-100 py-3 mt-4 rounded btn-danger text-register fw-500" id="store-profile">Xác nhận đặt phòng</button>

                        
                </div>
            </div>
        </div>
    </div>

 
  
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function changePaymentIcon() {
        var selectElement = document.getElementById("floatingPay");
        var paymentIcon = document.getElementById("paymentIcon");
        var selectedValue = selectElement.value;

        if (selectedValue === "cash") {
            paymentIcon.src = "bootstrap/css/patterns/coin.svg"; // Đường dẫn của ảnh mới khi chọn "cash"
        } else {
            paymentIcon.src = "bootstrap/css/patterns/vnpay.svg"; // Đường dẫn của ảnh gốc khi chọn lại "VNPay"
        }
    }
</script>


</body>
</html>
