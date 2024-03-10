<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\AuthController;
use App\Models\Booking;
use App\Models\Evaluate;
use App\Models\Favorite;
use App\Models\ImgRoom;
use App\Models\Payment;
use App\Models\Room;
use App\Models\RoomType;
use App\Models\ServiceRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use function Symfony\Component\String\u;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public
    function roommanagement(Request $request)
    {
        $perPage = $request->page <= 1 ? 8 : $request->page * 8;
        $rooms = $this->searchPhongs($request->search, $perPage);
        return view('frontend.staff.roomManagement', compact("rooms"));
    }

    public function index(Request $request)
    {
        $perPage = $request->page <= 1 ? 8 : $request->page * 8;
        $rooms = $this->searchPhongs($request->search, $perPage);
        return view('frontend.component.customer.post', compact("rooms"));
    }


    private
    function searchPhongs($searchQuery, $perPage)
    {
        if ($searchQuery) {
            return Room::with('imgroom')
                ->where('TenPhong', 'like', "%{$searchQuery}%")
                ->orWhere('GioiThieuPhong', 'like', "%{$searchQuery}%")
                ->orWhere('TinhTrang', 'like', "%{$searchQuery}%")->take($perPage)->get();
        } else {
            return Room::with('imgroom')->take($perPage)->get();
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public
    function create()
    {
        $roomTypes = RoomType::all();
        return view('backend.rooms.create', ['roomTypes' => $roomTypes]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public
    function store(Request $request)
    {
        $imagePath = $this->uploadImage($request);
//        $processedData = $this->processDataBeforeValidation($request->all());
        $request->validate([
            'TenPhong' => 'required|string|max:255',
            'GioiThieuPhong' => 'required|string',
            'DonGia' => 'required|numeric',
            'TinhTrang' => 'required|string|max:50',
//            'ViewHuongBien' => '',
//            'CoBonTamNgoi' => '',
//            'KichThuoc' => 'required|string',
//            'MaLoaiPhong' => 'required|exists:loaiphong,MaLoaiPhong',
//            'SoNguoiToiDa' => 'numeric',
//            'SoPhongTam' => 'numeric',
//            'WifiMienPhi' => '',
//            'SoGiuong' => 'numeric',
//            'TVTrongPhong' => '',
//            'DienTichBalcon' => 'numeric',
        ], [

            'TenPhong.required' => 'Vui lòng nhập tên phòng.',
            'TenPhong.string' => 'Tên phòng phải là chuỗi.',
            'TenPhong.max' => 'Tên phòng không được vượt quá 255 ký tự.',

            'GioiThieuPhong.required' => 'Vui lòng nhập mô tả phòng.',
            'GioiThieuPhong.string' => 'Mô tả phòng phải là chuỗi.',

            'DonGia.required' => 'Vui lòng nhập đơn giá.',
            'DonGia.numeric' => 'Đơn giá phải là số.',

            'TinhTrang.required' => 'Vui lòng nhập tình trạng phòng.',
            'TinhTrang.string' => 'Tình trạng phòng phải là chuỗi.',
            'TinhTrang.max' => 'Tình trạng phòng không được vượt quá 50 ký tự.',
//
//            'KichThuoc.required' => 'Vui lòng nhập kích thước.',
//            'KichThuoc.string' => 'Kích thước phải là chuỗi.',
//            'SoGiuong.numeric' => 'phải là số.',
//            'MaLoaiPhong.required' => 'Vui lòng chọn loại phòng.',
//            'MaLoaiPhong.exists' => 'Loại phòng không hợp lệ.',
//
//            'SoNguoiToiDa.numeric' => 'Số người tối đa phải là số.',
//
//            'DienTichBalcon.numeric' => 'Diện tích ban công phải là số.',
        ]);
        $room = Room::create([
            'TenPhong' => $request->input('TenPhong'),
            'GioiThieuPhong' => $request->input('GioiThieuPhong'),
            'DonGia' => $request->input('DonGia'),
            'TinhTrang' => $request->input('TinhTrang'),
            'ViewHuongBien' => 1,
            'CoBonTamNgoi' => 1,
            'KichThuoc' => 1,
            'MaLoaiPhong' => 1,
            'SoNguoiToiDa' => 1,
            'SoGiuong' => 1,
            'SoPhongTam' => 1,
            'WifiMienPhi' => 1,
            'TVTrongPhong' => 1,
            'DienTichBalcon' => 1,
        ]);

        ImgRoom::create([
            'MaPhong' => $room->MaP,  // Use the actual value of an existing record's MaP
            'DuongDanAnh' => $imagePath,
        ]);
        return view('frontend.employee.SuccessUpload');
    }

    private
    function uploadImage($request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images/room'), $imageName);

        $imagePath = asset("images/room/$imageName");
        $relativeImagePath = str_replace('http://127.0.0.1:8000/', '', $imagePath);
        return $relativeImagePath;
    }

//    private function processDataBeforeValidation(array $data)
//    {
//        // Chuyển đổi giá trị 'TVTrongPhong' từ "on" sang "1" và null sang "0"
//        $data['ViewHuongBien'] = isset($data['TVTrongPhong']) ? '1' : '0';
//        $data['CoBonTamNgoi'] = isset($data['TVTrongPhong']) ? '1' : '0';
//        $data['WifiMienPhi'] = isset($data['TVTrongPhong']) ? '1' : '0';
//        $data['TVTrongPhong'] = isset($data['TVTrongPhong']) ? '1' : '0';
//        $data['KichThuoc'] = isset($data['KichThuoc']) ? '1' : '1';
//        $data['MaLoaiPhong'] = isset($data['MaLoaiPhong']) ? '1' : '1';
//        $data['SoNguoiToiDa'] = isset($data['SoNguoiToiDa']) ? '1' : '0';
//        $data['SoGiuong'] = isset($data['SoGiuong']) ? '1' : '0';
//        $data['DienTichBalcon'] = isset($data['DienTichBalcon']) ? '1' : '0';
//        $data['SoPhongTam'] = isset($data['SoGiuong']) ? '1' : '0';
//
//        return $data;
//    }

    /**
     * Display the specified resource.
     */
    public
    function show(Room $room)
    {
        return view('frontend.employee.HomestayEdited', compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public
    function edit(Room $room)
    {

        return view('frontend.employee.EditHomestay', compact('room'));
    }

    /**
     * Update the specified resource in storage.
     */
    public
    function update(Request $request, Room $room)
    {
        $validatedData = $request->validate([
            'TenPhong' => 'required|string|max:255',
            'GioiThieuPhong' => 'required|string',
            'DonGia' => 'required|numeric',
            'TinhTrang' => 'required|string|max:50',
        ], [
            'TenPhong.required' => 'Vui lòng nhập tên phòng.',
            'TenPhong.string' => 'Tên phòng phải là chuỗi.',
            'TenPhong.max' => 'Tên phòng không được vượt quá 255 ký tự.',

            'GioiThieuPhong.required' => 'Vui lòng nhập mô tả phòng.',
            'GioiThieuPhong.string' => 'Mô tả phòng phải là chuỗi.',

            'DonGia.required' => 'Vui lòng nhập đơn giá.',
            'DonGia.numeric' => 'Đơn giá phải là số.',

            'TinhTrang.required' => 'Vui lòng nhập tình trạng phòng.',
            'TinhTrang.string' => 'Tình trạng phòng phải là chuỗi.',
            'TinhTrang.max' => 'Tình trạng phòng không được vượt quá 50 ký tự.',
        ]);

        $room->update($validatedData);

        return view('frontend.employee.SuccessEdit', compact('room'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public
    function getdeletehomestay(Request $request, $id)
    {
        $room = Room::find($id);
        return view('frontend.employee.DeleteForm', compact('room'));
    }

    public
    function destroy(Room $room)
    {
        $roomId = $room->MaP;

        $datphongRecords = Booking::where('MaPhong', $roomId)->get();

        foreach ($datphongRecords as $datphong) {
            // Delete the related records in datphong table first
            $maDatPhong = $datphong->MaDatPhong;
            $thanhtoanRecords = Payment::where('MaDatPhong', $maDatPhong)->get();

            foreach ($thanhtoanRecords as $thanhtoan) {
                // Delete the related records in thanhtoan table first
                $thanhtoan->delete();
            }
            $danhgiaRecords = Evaluate::where('MaDatPhong', $maDatPhong)->get();

            foreach ($danhgiaRecords as $danhgia) {
                // Delete the related records in danhgia_nhanxet table first
                $danhgia->delete();
            }
            $datphong->delete();
        }

        $dichvuPhongRecords = ServiceRoom::where('MaPhong', $roomId)->get();

        foreach ($dichvuPhongRecords as $dichvuPhong) {
            $dichvuPhong->delete();
        }
        // Assuming AnhPhong model has a relationship with Phong model
        $anhPhongRecords = ImgRoom::where('MaPhong', $roomId)->get();

        foreach ($anhPhongRecords as $anhPhongRecord) {
            $anhPhongRecord->delete();
        }
        $yeuThichRecords = Favorite::where('MaP', $roomId)->get();

        foreach ($yeuThichRecords as $yeuThichRecord) {
            $yeuThichRecord->delete();
        }

        $room->delete();

        // Redirect with success message
        return redirect()->route('roommanagement');
    }

    public function showRoom(string $id)
    {
        $query = Room::find($id);

        // Assuming you want to get the user data from the session

//        echo json_encode($query);

        return view('frontend.component.customer.detailRoom', compact('query'));
    }

}
