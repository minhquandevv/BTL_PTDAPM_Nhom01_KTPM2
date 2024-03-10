@extends('frontend.component.layout-employee')
@section('content')
    <div class="custom-container-employee my-5" id="create-motel-container">
        <div class="d-flex ">
            <a class="text-dark text-decoration-none edit-icon-image" href="/roommanagement">
                <i class="fa-solid fa-angle-left"></i>
            </a>

            <div class="ms-10 text-edit-pic w-100 fw-500 d-flex justify-content-between">{{ $room->TenPhong }}
                <div></div>
                <div class="me-2">
                    <a href="/edithomestay"><img src="bootstrap/css/patterns/pen-icon.svg" class="icon-p" alt=""></a>
                    <a href="/deletehomestay"><img src="bootstrap/css/patterns/trash.svg" class="icon-p" alt=""></a>
                </div>
            </div>
        </div>


        <div class="ms-10 mt-4 ">
            <div class="row gap-3 ">
                <div class="col p-0"><img src="{{asset('bootstrap/css/patterns/img2-hs.svg')}}"
                                          class="image-border-left col w-100" alt=""></div>
                <div class="col ">
                    <div class="row gap-3">
                        <div class="row gap-3">
                            <div class=" col p-0">
                                <img width="100%"
                                     src={{asset("bootstrap/css/patterns/img2-hs.svg")}} class="img-default-homestay "
                                alt="">
                            </div>
                            <div class=" col p-0 ">
                                <img width="100%" src={{asset("bootstrap/css/patterns/img2-hs.svg")}}
                                     class="image-border-top-right" alt="">
                            </div>
                        </div>
                        <div class="row gap-3">
                            <div class=" col p-0">
                                <img width="100%" src="bootstrap/css/patterns/img2-hs.svg" class="img-default-homestay"
                                     alt="">
                            </div>
                            <div class=" col p-0">
                                <img width="100%" src="bootstrap/css/patterns/img2-hs.svg"
                                     class="image-border-bottom-right" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="ms-10 mt-5">
            <div class="text-up-pic w-100 fw-700">Thông tin phòng</div>

            <table class="table custom-table-pic mt-4" id="create-homestay-table">
                <tbody>
                <tr>
                    <td class="custom-td col-width">
                        <label for="code-homestay-label" class="input-place-label text-dark">Mã phòng:</label>
                    </td>
                    <td class="custom-td">
                        <p class="text-dark text-content-edit-homestay fw-500 m-0">{{ $room->MaP }}</p>
                    </td>
                </tr>

                <tr>
                    <td class="custom-td col-width">
                        <label for="code-homestay-label" class="input-place-label text-dark">Tên phòng:</label>
                    </td>
                    <td class="custom-td">
                        <p class="text-dark text-content-edit-homestay fw-500 m-0">{{ $room->TenPhong }}</p>
                    </td>
                </tr>

                <tr>
                    <td class="col-width">
                        <label for="code-homestay-label" class="input-place-label text-dark">Giới thiệu phòng:</label>
                    </td>

                    <td>
                        <p class="text-dark text-content-edit-homestay fw-400">{{ $room->GioiThieuPhong }}</p>
                    </td>
                </tr>

                <tr>
                    <td class="custom-td col-width">
                        <label for="code-homestay-lable" class="input-place-label text-dark m">Trạng thái phòng:</label>
                    </td>
                    <td class="custom-td">
                        <p class="text-dark text-content-edit-homestay fw-500 m-0">{{ $room->TinhTrang }}</p>
                    </td>
                </tr>

                <tr>
                    <td class="custom-td col-width">
                        <label for="code-homestay-lable" class="input-place-label text-dark">Đơn giá:</label>
                    </td>
                    <td class="custom-td">
                        <p class="text-dark text-content-edit-homestay fw-500 m-0">{{ $room->DonGia }}VND</p>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>

    </div>



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection

