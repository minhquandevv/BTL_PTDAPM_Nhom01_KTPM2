<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<section id="post" class="bg-white py-8">
    <div class="container mx-auto">
        <div class="row row-cols-1 row-cols-md-4 mx-4 gap-8 py-8">

            <div class="col position-relative">
                <div class="card bg-white border-0  ">
                    <div class=" rounded-4 overflow-hidden">
                        <div class="cursor-pointer hover-setimg">
                            <a class=" cursor-pointer " href="{{ route('datPhong') }}">
                                <img src="images/img-1.svg" class="d-block w-100 c-img " alt="Slide 1">
                            </a>
                        </div>
                    </div>
                    <div class="card-body py-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <a>
                                <h4>Half Moon Bay, California, US</h4>
                            </a>
                            <div class="d-flex justify-content-between align-items-center">
                                <i class="fa-solid fa-star fa-lg pb-1 px-2"></i>
                                <h3>5.0</h3>
                            </div>
                        </div>
                        <p>Khung cảnh bãi biển và đại dương</p>
                        <h4 class="text-decoration-underline">Tổng: 299$</h4>
                    </div>
                    <div class="position-absolute" style="top:10px;right:10px">
                        <button type="submit" id="heart-button" class="btn btn-outline heart-button">
                            <i id="heart-icon" class="far fa-heart heart-icon fa-2xl" style="color: #ffffff;"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col position-relative">
                <div class="card bg-white border-0  ">
                    <div class=" rounded-4 overflow-hidden">
                        <div class="cursor-pointer hover-setimg">
                            <a class=" cursor-pointer " href="#">
                                <img src="images/img-1.svg" class="d-block w-100 c-img " alt="Slide 1">
                            </a>
                        </div>
                    </div>
                    <div class="card-body py-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <a>
                                <h4>Half Moon Bay, California, US</h4>
                            </a>
                            <div class="d-flex justify-content-between align-items-center">
                                <i class="fa-solid fa-star fa-lg pb-1 px-2"></i>
                                <h3>5.0</h3>
                            </div>
                        </div>
                        <p>Khung cảnh bãi biển và đại dương</p>
                        <h4 class="text-decoration-underline">Tổng: 299$</h4>
                    </div>
                    <div class="position-absolute" style="top:10px;right:10px">
                        <button type="submit" id="heart-button" class="btn btn-outline heart-button">
                            <i id="heart-icon" class="far fa-heart heart-icon fa-2xl" style="color: #ffffff;"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col position-relative">
                <div class="card bg-white border-0  ">
                    <div class=" rounded-4 overflow-hidden">
                        <div class="cursor-pointer hover-setimg">
                            <a class=" cursor-pointer " href="#">
                                <img src="images/img-1.svg" class="d-block w-100 c-img " alt="Slide 1">
                            </a>
                        </div>
                    </div>
                    <div class="card-body py-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <a>
                                <h4>Half Moon Bay, California, US</h4>
                            </a>
                            <div class="d-flex justify-content-between align-items-center">
                                <i class="fa-solid fa-star fa-lg pb-1 px-2"></i>
                                <h3>5.0</h3>
                            </div>
                        </div>
                        <p>Khung cảnh bãi biển và đại dương</p>
                        <h4 class="text-decoration-underline">Tổng: 299$</h4>
                    </div>
                    <div class="position-absolute" style="top:10px;right:10px">
                        <button type="submit" id="heart-button" class="btn btn-outline heart-button">
                            <i id="heart-icon" class="far fa-heart heart-icon fa-2xl" style="color: #ffffff;"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col position-relative">
                <div class="card bg-white border-0  ">
                    <div class=" rounded-4 overflow-hidden">
                        <div class="cursor-pointer hover-setimg">
                            <a class=" cursor-pointer " href="#">
                                <img src="images/img-1.svg" class="d-block w-100 c-img " alt="Slide 1">
                            </a>
                        </div>
                    </div>
                    <div class="card-body py-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <a>
                                <h4>Half Moon Bay, California, US</h4>
                            </a>
                            <div class="d-flex justify-content-between align-items-center">
                                <i class="fa-solid fa-star fa-lg pb-1 px-2"></i>
                                <h3>5.0</h3>
                            </div>
                        </div>
                        <p>Khung cảnh bãi biển và đại dương</p>
                        <h4 class="text-decoration-underline">Tổng: 299$</h4>
                    </div>
                    <div class="position-absolute" style="top:10px;right:10px">
                        <button type="submit" id="heart-button" class="btn btn-outline heart-button">
                            <i id="heart-icon" class="far fa-heart heart-icon fa-2xl" style="color: #ffffff;"></i>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<div class="d-flex justify-content-center my-4 py-5">
    <a href="#" class="btn btn-primary px-5 py-4 bg-danger text-center text-white rounded-4 cursor-pointer border-0"
       style="background-image: linear-gradient(to right,firebrick 30%, crimson);">
        <h3>Hiển thị thêm</h3>
    </a>
</div>
</div>
</body>
<script>
    let heartButton = document.querySelectorAll('.heart-button');
    let heartIcon = document.querySelectorAll('.heart-icon');
    heartButton.forEach((button, index) => {
        button.addEventListener('click', () => {
            if (heartIcon[index].classList.contains('far')) {
                heartIcon[index].classList.remove('far');
                heartIcon[index].classList.add('fas');
                heartIcon[index].style.color = 'red';
            } else {
                heartIcon[index].classList.remove('fas');
                heartIcon[index].classList.add('far');
                heartIcon[index].style.color = 'white';
            }
        });
    });

</script>
</html>
