@extends('frontend.component.layout-employee')
@section('content')
    <div class="custom-container-employee mt-5" id="create-homestay-container">
        <div class=" text-center d-flex justify-content-between">
            <a class="text-dark text-decoration-none custom-icon-image" href="/roommanagement">
                <i class="fa-solid fa-angle-left"></i>
            </a>

            <div class="text-up-pic w-100 fw-500">Đăng ảnh</div>
            <div></div>
        </div>
        {{--  --}}
        <form action="{{ route('rooms.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="my-5 row ">
                {{-- khung nhập --}}
                <div class="border input-place-pic border-input-pic col order-2 order-md-1 pe-4">
                    <table class="table custom-table-pic mt-3 mb-4 ms-3 me-5" id="create-homestay-table">
                        <tbody>
                        <tr>
                            <td class="custom-td"><label for="code-homestay-label" class="input-place-label text-dark">Tên
                                    phòng:</label></td>
                            <td class="custom-td">
                                <input type="text" name="TenPhong"
                                       class="border rounded input-name-homestay border-input-pic" id="">
                                @error('TenPhong')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>

                        <tr>
                            <td><label for="code-homestay-label" class="input-place-label text-dark">Giới thiệu
                                    phòng:</label></td>

                            <td><textarea id="" cols="44" rows="10" name="GioiThieuPhong"
                                          class="border rounded input-introduce-homestay border-input-pic"></textarea>
                                @error('GioiThieuPhong')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>

                        <tr>
                            <td class="custom-td"><label for="code-homestay-lable" class="input-place-label text-dark">Trạng
                                    thái phòng:</label></td>
                            <td class="custom-td"><input type="text" name="TinhTrang"
                                                         class="border rounded input-code-homestay border-input-pic"
                                                         id=""> @error('TinhTrang')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>

                        <tr>
                            <td class="custom-td"><label for="code-homestay-lable" class="input-place-label text-dark">Đơn
                                    giá:</label></td>
                            <td class="custom-td"><input type="number" name="DonGia"
                                                         class="border rounded input-code-homestay border-input-pic"
                                                         id=""> @error('DonGia')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>

                        </tbody>
                    </table>

                </div>


                <div class="col-4 order-1 order-md-2 ms-4">
                    <div class="upload-picture rounded  d-flex justify-content-center align-items-center">
                        <label class="label-add-image">

                            <img id="uploadNone1Image" width="80px" height="80px"
                                 src="bootstrap/css/patterns/upload.svg"
                                 alt="">
                            <span id="uploadNone2Image">Thêm ảnh</span>
                            <input type="file" class="d-none" name="image" accept="image/*" id="imageInput">
                            <img id="displayedImage" class="w-100" style="display: none;" alt="Selected Image">


                        </label>
                    </div>
                    <div class="text-center mt-10">
                        <a href="/successupload">
                            <button type="submit" class="btn btn-danger rounded btn-color fw-500 text-light"
                                    id="accept-upload-button">Xác nhận đăng phòng
                            </button>
                        </a>

                    </div>
                </div>
            </div>
        </form>
    </div>
    </div>
    <script>
        document.getElementById('imageInput').addEventListener('change', function (e) {
            const fileInput = e.target;
            const file = fileInput.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    const displayedImage = document.getElementById('displayedImage');
                    displayedImage.src = e.target.result;
                    displayedImage.style.display = 'block';


                };
                const uploadNone1Image = document.getElementById('uploadNone1Image');
                uploadNone1Image.style.display = 'none';
                const uploadNone2Image = document.getElementById('uploadNone2Image');
                uploadNone2Image.style.display = 'none';
                reader.readAsDataURL(file);
            }
        });
    </script>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

@endsection

