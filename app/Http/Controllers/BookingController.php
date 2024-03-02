<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $books = $this->searchBooks($request->search);
        $books->appends(['search' => $request->search]);
        return view('backend.booking.index', compact('books'));

    }

    private function searchBooks($searchQuery)
    {
        $query = Booking::query();

        if ($searchQuery) {
            $query->where('MaKH', 'like', "%{$searchQuery}%")
                ->orWhere('MaPhong', 'like', "%{$searchQuery}%")
                ->orWhere('NgayDatPhong', 'like', "%{$searchQuery}%")
                ->orWhere('NgayCheckIn', 'like', "%{$searchQuery}%")
                ->orWhere('NgayCheckOut', 'like', "%{$searchQuery}%")
                ->orWhere('SoNguoi', 'like', "%{$searchQuery}%")
                ->orWhere('TinhTrangDatPhong', 'like', "%{$searchQuery}%")
                ->orWhere('TinhTrangThanhToan', 'like', "%{$searchQuery}%")
                ->with("customer")->with("room")->paginate(5);
        }

        return $query->with("customer")->with("room")->paginate(5);
    }


}
