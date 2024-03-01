<section id="post" class="bg-white py-8">
    <div class="container mx-auto">
        <div class="row row-cols-1 row-cols-md-4 mx-4 gap-8 py-8">
            @for ($i = 0; $i < 20; $i++) <div class="col">
                <div class="card bg-white border-0">
                    <a href="#">
                        <img class="card-img-top rounded-lg" src="https://img.upanh.tv/2024/02/24/Frame-6.png" alt="" />
                    </a>
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
        @endfor
    </div>
    <div class="d-flex justify-content-center my-4">
        <a href="#" class="btn btn-primary px-5 py-4 bg-danger text-center text-white rounded-4 cursor-pointer border-0"
            style="background-image: linear-gradient(to right,firebrick 30%, crimson);">
            <h3>Hiển thị thêm</h3>
        </a>
    </div>
    </div>
</section>