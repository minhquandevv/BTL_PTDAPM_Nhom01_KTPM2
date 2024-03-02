<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoàn thành đăng ký</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9e29fd661a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="bootstrap/css/customize-register.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
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
                    
                    <div class=" text-register text-header w-100">Hoàn thành đăng ký</div>
                </div>
                <div id="register-body" class="card-body">
                    <form method="POST">
                        @csrf
                        <div id="input-group">
                            <div class="border rounded overflow-hidden">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 rounded-0 border-bottom" id="floatingFirstName" placeholder="Họ">
                                    <label for="floatingFirstName">Họ</label>
                                  </div>
    
                                  <div class="form-floating">
                                    <input type="text" class="form-control border-0 rounded-0" id="floatingLastName" placeholder="Tên">
                                    <label for="floatingLastName">Tên</label>
                                  </div>
                           </div> 
                           <div class="f-1rem text-register-warning">Đảm bảo tên này khớp với tên trên giấy tờ tùy thân của bạn.</div>
                        </div>
                        <div id="input-group">
                            <div class="border rounded">    
                                <div class="form-floating">
                                    <input type="date" class="form-control border-0 rounded-0" id="floatingBirthday" placeholder="Ngày sinh">
                                    <label for="floatingBirthday">Ngày sinh</label>
                                  </div>
                           </div> 
                           <div class="f-1rem text-register-warning">Để đăng ký, bạn phải ít nhất 18 tuổi. Ngày sinh của bạn sẽ không được chia sẻ với những người sử dụng AirHome khác.</div>
                        </div>
                        <div id="input-group">
                            <label for="gender-check" class="form-label mb-0 text-secondary mx-2 letter-input">Giới tính</label>

                            <div class="d-flex" id="gender"> 

                                <div class="form-check custom-radio">
                                    <input class="form-check-input" type="radio" name="gender" value="male" id="male" />
                                    <label class="form-check-label custom-label" for="male">Nam</label>
                                </div>
                                <div class="form-check custom-radio">
                                    <input class="form-check-input" type="radio" name="gender" value="female" id="female" />
                                    <label class="form-check-label custom-label" for="female">Nữ</label>
                                </div>
                           </div> 
                        </div>
                        <div id="input-group">
                            <div class="form-floating border rounded overflow-hidden">    
                                <input type="text" class="form-control border-0" id="floatingAddress" placeholder="Địa chỉ">
                                <label for="floatingAddress">Địa chỉ</label>

                           </div> 
                        </div>
                        <div class="mb-2"></div>
                        <div id="input-group">
                            <div class="form-floating border rounded overflow-hidden">    
                                <input type="email" class="form-control border-0" id="floatingEmail" placeholder="Email">
                                <label for="floatingEmail">Email</label>

                           </div>  
                           <div class="f-1rem text-register-warning">Chúng tôi sẽ gửi email cho bạn để xác nhận.</div>
                        </div>
                        <div id="input-group"> 
                            <div class="border rounded position-relative">    
                                <div class="form-floating rounded overflow-hidden position-relative">
                                    <input type="password" class="form-control border-0" id="floatingPass" onkeyup="hidden_btn(this)" placeholder="Mật khẩu" >
                                <label for="floatingPass">Mật khẩu</label>
                                </div>
                                <button type="button" class="btn-show" onclick="showPass(this)" id="btnShowPass">Hiển thị</button>

                            </div>  
                           {{-- <div class="row gy-1 p-1">
                            <div class="col-12 gx-3 d-flex align-items-center">
                                <div class="warning-icon"><i class="fa-solid fa-xmark"></i></div>
                                <div class="text-error ">Độ bảo mật: yếu</div>
                            </div>
                            <div class="col-12 gx-3 d-flex align-items-center">
                                <div class="warning-icon success-icon"><i class="fa-solid fa-check"></i></div>
                                <div class="text-error text-success">Không chứa tên hay địa chỉ email của bạn</div>
                            </div>
                            <div class="col-12 gx-3 d-flex align-items-center">
                                <div class="warning-icon"><i class="fa-solid fa-xmark"></i></div>
                                <div class="text-error ">Ít nhất 8 kí tự</div>
                            </div>
                           
                          </div> --}}
                        </div>

                        <div class="f-1rem text-register-warning">Bằng cách chọn 
                            <span class="fw-bold" id="fw-500">Đồng ý và tiếp tục</span>, tôi đồng ý với 
                            <a class="fw-bold" href="">Điều khoản dịch vụ</a>, 
                            <a class="fw-bold" href="">Điều khoản dịch vụ thanh toán</a> và 
                            <a class="fw-bold" href="">Chính sách không phân biệt đối xử</a> cũng như thừa nhận 
                            <a class="fw-bold" href="">Chính sách quyền riêng tư</a> của AirHome.</div>
                        
                        <button type="button" class="btn  w-100 py-3 mt-2 rounded btn-danger text-register fw-500" id="accept-button">Đồng ý và tiếp tục</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

 
  
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
let pass_input = document.getElementById("floatingPass") ;
let btn_show = document.getElementById('btnShowPass');
function hidden_btn(){
    if(pass_input.value === ''){
        btn_show.style.display='none';
    }
    else{
        btn_show.style.display='block';
    }
}
hidden_btn();
function showPass(obj) {
  var x = document.getElementById("floatingPass");
  if (x.type === "password") {
    obj.innerText = "Ẩn";
    x.type = "text";
  } else {
    obj.innerText = "Hiển thị";
    x.type = "password";
  }
}
///////////////////////
let loading_btn = document.getElementById( 'accept-button' );
loading_btn.onclick=()=>{
    loading_btn.innerHTML=`<div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>`;
    loading_btn.classList.remove("btn-danger");
    loading_btn.classList.add("btn-secondary");
    return false;
    // alert("dahdgajhsdgasgdajh");
}

</script>

</body>
</html>
