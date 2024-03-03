<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Customer;
use App\Models\Evaluate;
use App\Models\Payment;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $customers = $this->searchCustomers($request->search);
        $customers->appends(['search' => $request->search]);
        return view('backend.customers.index', compact('customers'));
    }

    private function searchCustomers($searchQuery)
    {
        if ($searchQuery) {
            return Customer::where('Email', 'like', "%{$searchQuery}%")
                ->paginate(15);
        } else {
            return Customer::paginate(15);
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customerId = $customer->MaKH;

        $bookingsToDelete = Booking::where('MaKH', $customerId)->get();

        foreach ($bookingsToDelete as $booking) {
            $maDatPhongToDelete = $booking->MaDatPhong;
            $thanhtoanRecords = Payment::where('MaDatPhong', $maDatPhongToDelete)->get();
            $reviewsToDelete = Evaluate::where('MaDatPhong', $maDatPhongToDelete)->get();

            // Delete Reviews
            foreach ($reviewsToDelete as $review) {
                $review->delete();
            }

            foreach ($thanhtoanRecords as $thanhtoan) {
                $thanhtoan->delete();
            }
            $booking->delete();
        }

        $customer->delete();

        echo "deleted";
    }

}
