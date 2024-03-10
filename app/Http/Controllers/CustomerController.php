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
        $perPage = $request->page <= 1 ? 8 : $request->page * 8;
        $customers = $this->searchPhongs($request->search, $perPage);
        return view('frontend.staff.customerServiceManagement', compact('customers'));
    }

    private
    function searchPhongs($searchQuery, $perPage)
    {
        if ($searchQuery) {
            return Customer::where('TenKH', 'like', "%{$searchQuery}%")->take($perPage)->get();
        } else {
            return Customer::take($perPage)->get();
        }
    }

    public function show(string $id)
    {
        // Find the employee by MaNV (assuming MaNV is the primary key)
        $customer = Customer::find($id);

        // Check if the employee exists
        if ($customer) {
            return view("frontend.staff.manageCustomerAccounts", compact('customer'));
        } else {
            // Handle the case where the employee with the given ID is not found
            echo json_encode(['error' => 'Employee not found']);
        }
    }

    public
    function getcomfirmdeleteaccout(Request $request, $id)
    {
        // Uncomment the following lines if you want to fetch the customer and display the confirmation form
        $customer = Customer::find($id);
        return view('frontend/staff/DeleteAccountForm', compact('customer'));
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

        return view('frontend.staff.DeleteAccountSuccess');
    }

}
