<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin cá nhân</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9e29fd661a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="bootstrap/css/customize-register.css">
    <link rel="stylesheet" href="bootstrap/css/customize-mp-cus.css">
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
                    
                    <div class=" text-register text-header w-100">Chỉnh sửa thông tin cá nhân</div>
                </div>
                <div id="register-body" class="card-body">
                    <form method="POST">
                        @csrf
                        <div id="input-group">
                            <div class="border rounded overflow-hidden">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 rounded-0 border-bottom grey-400" id="floatingFirstNameLogin" placeholder="Họ" value="Nguyễn">
                                    <label for="floatingFirstNameLogin">Họ</label>
                                  </div>
    
                                  <div class="form-floating">
                                    <input type="text" class="form-control border-0 rounded-0" id="floatingLastNameLogin" placeholder="Tên" value="Văn A">
                                    <label for="floatingLastNameLogin">Tên</label>
                                  </div>
                           </div> 
                        </div>
                        <div id="input-group" class="mt-2">
                            <label for="gender-check" class="form-label mb-0 mx-2 label-gender">Giới tính</label>

                            <div class="d-flex mt-2" id="gender"> 

                                <div class="form-check custom-radio">
                                    <input class="form-check-input" type="radio" name="gender" value="male" id="maleLogin" checked/>
                                    <label class="form-check-label custom-label" for="male">Nam</label>
                                </div>
                                <div class="form-check custom-radio">
                                    <input class="form-check-input" type="radio" name="gender" value="female" id="femaleLogin" />
                                    <label class="form-check-label custom-label" for="female">Nữ</label>
                                </div>
                           </div> 
                        </div>
                        <div id="input-group" class="mt-3">
                            <div class="border rounded overflow-hidden">    
                                <div class="form-floating">
                                    <input type="date" class="form-control border-0 rounded-0" id="floatingBirthdayLogin" placeholder="Ngày sinh" value="2003-01-01">
                                    <label for="floatingBirthdayLogin">Ngày sinh</label>
                                  </div>
                           </div> 
                        </div>
                        
                        <div id="input-group" class="mt-3">
                            <div class="form-floating border rounded overflow-hidden">    
                                <input type="text" class="form-control border-0" id="floatingAddress" placeholder="Địa chỉ" value="Hà Nội">
                                <label for="floatingAddress">Địa chỉ</label>

                           </div> 
                        </div>

                        <div id="input-group" class="mt-3">
                            <div class="form-floating border rounded overflow-hidden">    
                                <input type="email" class="form-control border-0" id="floatingEmail" placeholder="Email" value="hello@gmail.com">
                                <label for="floatingEmail">Email</label>

                           </div>  
                        </div>
                        <button type="button" class="btn  w-100 py-3 mt-3 rounded btn-danger text-register fw-500" id="store-profile">Lưu thông tin</button>

                        
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
// abc
</script>

</body>
</html>
