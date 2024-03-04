<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký 2</title>
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
                        <i class="fa-solid fa-xmark"></i>
                    </a>
                    
                    <div class=" text-register text-header w-100">Đăng ký</div>
                </div>
                <div id="register-body" class="card-body">
                    <p class="text-center grey-text text-5 d-flex justify-content-space-between ">Chào mừng đến với AirHome <div></div><div></div></p>
                    <div class="border rounded overflow-hidden">
                        
                        <div class="form-floating border rounded overflow-hidden" id="email-regex">    
                            <input type="email" class="form-control border-0 text-8 grey-text" id="floatingEmail1" placeholder="Email">
                            <label for="floatingEmail1">Email</label>

                       </div> 

                        
                    </div>   
                    <button type="button" class="btn  w-100 py-3 mt-3 rounded btn-danger text-register continue-button d-flex justify-content-center fw-500" id="continue-button-register">Tiếp tục</button>
                        <div class="d-flex justify-content-between mt-2">
                            <hr style="width: 100%;">
                            <p>hoặc</p>
                            <hr style="width: 100%;">
                        </div>
                        <div>
                            <button type="button" class="btn  w-100 py-3 mt-2 rounded btn-white text-register border border-dark grey-text d-flex justify-content-between fw-500" id="gg-button">
                                <img class="gg-icon" src="bootstrap/css/patterns/gg-icon.svg" alt="">
                                Tiếp tục với Google <div></div></button>
                            
                            <button type="button" class="btn  w-100 py-3 mt-3 rounded btn-white text-register border border-dark grey-text d-flex justify-content-between align-items-center fw-500" id="mail-button">
                                <img class="mail-icon" src="bootstrap/css/patterns/mail-icon.svg" alt="">
                                Tiếp tục với Phone <div></div></button>
                        </div>        
                </div>
            </div>
        </div>
    </div>
</div>



  
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    const emailInput = document.getElementById('floatingEmail1');
    const divemail = document.getElementById('email-regex');
    const emailRegex = (/^[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/);

    emailInput.addEventListener('input', function() {
        const email = emailInput.value.trim();

        if (emailRegex.test(email)) {
            divemail.classList.remove('error');
            document.querySelector('label[for="floatingEmail1"]').classList.remove('error-label');
        } 
        if(emailInput.value.length  === 0){
            divemail.classList.remove('error');
            document.querySelector('label[for="floatingEmail1"]').classList.remove('error-label');
        }
        else {
            divemail.classList.add('error');
            document.querySelector('label[for="floatingEmail1"]').classList.add('error-label');
        }
    });
</script>

</body>
</html>
