@extends('frontend.component.layout-employee')
@section('content')
    <div class="custom-container-employee my-5" id="create-motel-container">
        <div class="d-flex ">
            <a class="text-dark text-decoration-none edit-icon-image" href="/createhomestay">
                <i class="fa-solid fa-angle-left"></i>
            </a>

            <div class="ms-10 text-edit-pic w-100 fw-500">Xe cắm trại/RV tại Half Moon Bay, California, Hoa Kỳ</div>
        </div>


        <div class="ms-10 mt-4 ">
            <div class="row gap-3 ">
                <div class="col p-0"><img src="{{asset("bootstrap/css/patterns/img2-hs.svg")}}"
                                          class="image-border-left col w-100"
                                          alt=""></div>
                <div class="col ">
                    <div class="row gap-3">
                        <div class="row gap-3">
                            <div class=" col p-0">
                                <img width="100%" src="{{asset("bootstrap/css/patterns/img2-hs.svg")}}"
                                     class="img-default-homestay "
                                     alt="">
                            </div>
                            <div class=" col p-0 ">
                                <img width="100%" src="{{asset("bootstrap/css/patterns/img2-hs.svg")}}"
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
        <form action="{{ route('rooms.update', $room) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="ms-10 mt-5">
                <div class="text-up-pic w-100 fw-700">Thông tin phòng</div>

                <table class="table custom-table-pic mt-4" id="create-homestay-table">
                    <tbody>
                    <tr>
                        <td class="custom-td col-width"><label for="code-homestay-label"
                                                               class="input-place-label text-dark">Mã phòng:</label>
                        </td>
                        <td class="custom-td"><input type="text"
                                                     class="border rounded input-code-homestay border-input-pic text-input-pic"
                                                     id="" value="{{$room->MaP}}" readonly></td>
                    </tr>

                    <tr>
                        <td class="custom-td col-width"><label for="code-homestay-label"
                                                               class="input-place-label text-dark">Tên phòng:</label>
                        </td>
                        <td class="custom-td"><input type="text" name="TenPhong"
                                                     class="border rounded input-name-homestay border-input-pic" id=""
                                                     value="{{$room->TenPhong}}"> @error('TenPhong')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror</td>
                    </tr>

                    <tr>
                        <td class="col-width"><label for="code-homestay-label" class="input-place-label text-dark">Giới
                                thiệu phòng:</label></td>

                        <td><textarea id="" cols="44" rows="10" name="GioiThieuPhong"
                                      class="border rounded input-introduce-homestay border-input-pic"
                                      value="{{$room->GioiThieuPhong}}">{{$room->GioiThieuPhong}}</textarea>@error('GioiThieuPhong')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror</td>
                    </tr>

                    <tr>
                        <td class="custom-td col-width"><label for="code-homestay-lable"
                                                               class="input-place-label text-dark">Trạng thái
                                phòng:</label></td>
                        <td class="custom-td"><input type="text" name="TinhTrang"
                                                     class="border rounded input-code-homestay border-input-pic" id=""
                                                     value="{{$room->TinhTrang}}">@error('TinhTrang')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror</td>
                    </tr>

                    <tr>
                        <td class="custom-td col-width"><label for="code-homestay-lable"
                                                               class="input-place-label text-dark">Đơn giá:</label></td>
                        <td class="custom-td"><input type="text" name="DonGia"
                                                     class="border rounded input-code-homestay border-input-pic" id=""
                                                     value="{{$room->DonGia}}">@error('DonGia')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror</td>
                    </tr>

                    </tbody>
                </table>
                <div class="text-center ms-10">
                    <button type="submit" class="btn btn-danger text-light rounded btn-color fw-500"
                            id="accept-upload-button">Cập nhật thông tin phòng
                    </button>
                </div>
            </div>
        </form>
    </div>



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection



