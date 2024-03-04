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

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $userData = new AuthController();
        echo json_encode($userData->getSessionData()['Email']);
        $rooms = $this->searchPhongs($request->search);
        $rooms->appends(['search' => $request->search]);
        return view('backend.rooms.index', compact('rooms'));

//        return view('frontend/auth/login/index');
//        return view('frontend/auth/register/completeProfile');
//        return view('frontend/auth/register/registerEmail');
//        return view('frontend/auth/register/registerPhone');


    }

    private function searchPhongs($searchQuery)
    {
        if ($searchQuery) {
            return Room::where('TenPhong', 'like', "%{$searchQuery}%")
                ->orWhere('GioiThieuPhong', 'like', "%{$searchQuery}%")
                ->orWhere('TinhTrang', 'like', "%{$searchQuery}%")
                ->paginate(5);
        } else {
            return Room::paginate(5);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roomTypes = RoomType::all();
        return view('backend.rooms.create', ['roomTypes' => $roomTypes]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $processedData = $this->processDataBeforeValidation($request->all());
        $request->validate([
            'TenPhong' => 'required|string|max:255',
            'GioiThieuPhong' => 'required|string',
            'DonGia' => 'required|numeric',
            'TinhTrang' => 'required|string|max:50',
            'ViewHuongBien' => '',
            'CoBonTamNgoi' => '',
            'KichThuoc' => 'required|string',
            'MaLoaiPhong' => 'required|exists:loaiphong,MaLoaiPhong',
            'SoNguoiToiDa' => 'numeric',
            'SoPhongTam' => 'numeric',
            'WifiMienPhi' => '',
            'SoGiuong' => 'numeric',
            'TVTrongPhong' => '',
            'DienTichBalcon' => 'numeric',
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

            'KichThuoc.required' => 'Vui lòng nhập kích thước.',
            'KichThuoc.string' => 'Kích thước phải là chuỗi.',
            'SoGiuong.numeric' => 'phải là số.',
            'MaLoaiPhong.required' => 'Vui lòng chọn loại phòng.',
            'MaLoaiPhong.exists' => 'Loại phòng không hợp lệ.',

            'SoNguoiToiDa.numeric' => 'Số người tối đa phải là số.',

            'DienTichBalcon.numeric' => 'Diện tích ban công phải là số.',
        ]);


        // Tạo một đối tượng Room từ dữ liệu đầu vào
        $room = Room::create([
            'TenPhong' => $request->input('TenPhong'),
            'GioiThieuPhong' => $request->input('GioiThieuPhong'),
            'DonGia' => $request->input('DonGia'),
            'TinhTrang' => $request->input('TinhTrang'),
            'ViewHuongBien' => $request->has('ViewHuongBien'),
            'CoBonTamNgoi' => $request->has('CoBonTamNgoi'),
            'KichThuoc' => $request->input('KichThuoc'),
            'MaLoaiPhong' => $request->input('MaLoaiPhong'),
            'SoNguoiToiDa' => $request->input('SoNguoiToiDa'),
            'SoGiuong' => $request->input('SoGiuong'),
            'SoPhongTam' => $request->input('SoPhongTam'),
            'WifiMienPhi' => $request->has('WifiMienPhi'),
            'TVTrongPhong' => $request->has('TVTrongPhong'),
            'DienTichBalcon' => $request->input('DienTichBalcon'),
        ]);

        return view('backend.rooms.show', compact('room'));
    }

    private function processDataBeforeValidation(array $data)
    {
        // Chuyển đổi giá trị 'TVTrongPhong' từ "on" sang "1" và null sang "0"
        $data['ViewHuongBien'] = isset($data['TVTrongPhong']) ? '1' : '0';
        $data['CoBonTamNgoi'] = isset($data['TVTrongPhong']) ? '1' : '0';
        $data['WifiMienPhi'] = isset($data['TVTrongPhong']) ? '1' : '0';
        $data['TVTrongPhong'] = isset($data['TVTrongPhong']) ? '1' : '0';

        return $data;
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        return view('backend.rooms.show', compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        return view('backend.rooms.edit', compact('room'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Room $room)
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

        return view('backend.rooms.show', compact('room'));
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Room $room)
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

        $room->delete();

        // Redirect with success message
        return redirect()->route('rooms.index')->with('success', 'Phong deleted successfully.');
    }

}
