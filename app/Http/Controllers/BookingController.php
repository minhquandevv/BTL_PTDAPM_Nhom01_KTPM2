<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BookingController extends Controller
{

    public function index1()
    {
        $template = 'frontend.component.customer.bookRoom';
        return view('frontend.component.customer.layout', compact('template'));
    }

    public function index(Request $request)
    {
        $perPage = $request->page <= 1 ? 8 : $request->page * 8;
        $sortOld = $request->old;
        $sortNew = $request->new;
        $books = $this->searchRooms($request->search, $perPage, $sortOld, $sortNew);
        return view('frontend.staff.invoiceManagement', compact('books'));

    }

    public function customerstatistics(Request $request)
    {
        $perPage = $request->page <= 1 ? 8 : $request->page * 8;
        $customers = $this->searchcustomerstatistics($request->search, $perPage);
        return view('frontend.manager.customerStatistics', compact('customers'));

    }

    private function searchcustomerstatistics($searchQuery, $perPage)
    {
        $query = Booking::query();
        if ($searchQuery) {
            $query->with('customer', 'datphong')
                ->whereHas('customer', function ($query) use ($searchQuery) {
                    $query->where('TenKH', 'like', "%{$searchQuery}%");
                });
        } else {
            $query->with('customer', 'datphong');
        }
        return $query->take($perPage)->get();
    }

    private function searchRooms($searchQuery, $perPage, $sortOld, $sortNew)
    {
        $query = Booking::query();

        if ($searchQuery) {
            $query->where('MaDatPhong', 'like', "%{$searchQuery}%")
                ->with('customer', 'room', 'datphong');
        } else {
            $query->with('customer', 'room', 'datphong');
        }

        // Apply sorting conditions
        if ($sortOld) {
            return $query->with('customer', 'room', 'datphong')->orderBy('NgayCheckOut', 'asc')->get();
        } elseif ($sortNew) {
            return $query->with('customer', 'room', 'datphong')->orderBy('NgayCheckOut', 'desc')->get();
        }

        // Execute the query and retrieve the results
        return $query->take($perPage)->get();
    }


    public function historyandreviews1(Request $request)
    {
        $perPage = $request->page <= 1 ? 8 : $request->page * 8;
        $books = $this->searchHistoryRooms($request->search, $perPage);
        return view('frontend.staff.historyAndReviews_1', compact('books'));

    }

    public function historyandreviews2(string $id)
    {
        $evaluate = Booking::with('customer', 'imgroom', 'danhgia', 'room')->where('MaDatPhong', 'like', "$id")->get();
        return view('frontend.staff.historyAndReviews_2', compact('evaluate'));
    }

    private function searchHistoryRooms($searchQuery, $perPage)
    {
        $query = Booking::query();

        if ($searchQuery) {
            $query->where('MaP', 'like', "%{$searchQuery}%")
                ->with('datphong', 'room', 'imgRoom');
        } else {
            $query
                ->with('datphong', 'room', 'imgRoom');
        }

        // Execute the query and retrieve the results
        return $query->take($perPage)->get();
    }

    public function store(Request $request)
    {
        if (!isset(Session::get('userData')['Ma'])) {
            return redirect()->route('login');
        } else {
            // Validate the incoming request data
            $request->validate([
                'TenPhong' => '',//
                'MaP' => '',//
                'GioiThieuPhong' => '',//
                'TinhTrang' => '',//
                'checkin' => 'required',//
                'checkout' => 'required',//
                'quantity' => '',
                'DonGia' => '',
            ]);
// Create a new Booking instance
            $booking = new Booking();
// Populate the Booking instance with data from the request
            $booking->MaKH = Session::get('userData')['Ma'];
            $booking->MaPhong = $request->input('MaP');
            $booking->NgayDatPhong = now();
            $booking->NgayCheckIn = $request->input('checkin');
            $booking->NgayCheckOut = $request->input('checkout');
            $booking->SoNguoi = $request->input('quantity');
            $booking->SoNguoi = $request->input('quantity');
            $booking->TinhTrangDatPhong = $request->input('TinhTrang');
            $booking->TinhTrangThanhToan = 'chua';


// Save the Booking instance to the database
            $booking->save();
            // Redirect to a view or route after creating the record
            return redirect()->route('showAllRoom');
        }
    }


    public
    function showAllRoom()
    {
        if (!isset(Session::get('userData')['Ma'])) {
            return redirect()->route('login');
        } else {
            $MaKH = Session::get('userData')['Ma'];
            $bookings = Booking::with('room')->where('MaKH', 'like', "$MaKH")->get();
            return view('frontend.component.customer.bookroomcancel', compact('bookings'));
        }
    }

}
