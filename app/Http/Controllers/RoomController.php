<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Favorite;
use App\Models\ImgRoom;
use App\Models\Room;
use App\Models\ServiceRoom;
use Database\Seeders\ServiceRoomSeeder;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $rooms = $this->searchPhongs($request->search);
        $rooms->appends(['search' => $request->search]);
        return view('backend.rooms.index', compact('rooms'));

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
        return view('backend.rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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


        $room = Room::create([
            'TenPhong' => $validatedData['TenPhong'],
            'GioiThieuPhong' => $validatedData['GioiThieuPhong'],
            'DonGia' => $validatedData['DonGia'],
            'TinhTrang' => $validatedData['TinhTrang'],
        ]);
        return view('backend.rooms.show', compact('room'));
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
        $roomPrimaryKey = $room->getAttribute('MaP');

        // Delete related ImgRoom records
//        ImgRoom::where('MaPhong', '=', $roomPrimaryKey)->delete();
//        ServiceRoom::where('MaPhong', '=', $roomPrimaryKey)->delete();
//        Favorite::where('MaP', '=', $roomPrimaryKey)->delete();
//        Booking::where('MaPhong', '=', $roomPrimaryKey)->delete();

        // Delete the Room record
        $room->delete();

        // Redirect with success message
        return redirect()->route('rooms.index')->with('success', 'Phong deleted successfully.');
    }

}
