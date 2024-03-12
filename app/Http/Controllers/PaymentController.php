<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $fromDate = $request->fromDate;
        $toDate = $request->toDate;
        $statistics = Payment::select(
            DB::raw('YEAR(NgayThanhToan) AS Nam'),
            DB::raw('MONTH(NgayThanhToan) AS Thang'),
            DB::raw('SUM(TongTien) AS TongSoTien')
        )
            ->whereBetween('NgayThanhToan', [$fromDate, $toDate])
            ->groupBy('Nam', 'Thang')
            ->get();
        $data = json_decode($statistics, true);

        $monthsYearsArray = [];
        $totalAmountsArray = [];
        $backgroundColor = [];
        $borderColor = [];

        foreach ($data as $item) {
            $monthYear = $item['Thang'] . '/' . $item['Nam'];
            $totalAmount = $item['TongSoTien'];

            $monthsYearsArray[] = $monthYear;
            $totalAmountsArray[] = $totalAmount;
            $randomColor = rand(0, 255) . ", " . rand(0, 255) . ", " . rand(0, 255);
            $backgroundColor[] = "rgba($randomColor, 0.2)";
            $borderColor[] = "rgba($randomColor, 1)";
        }

        return view('frontend.manager.statistics', compact('monthsYearsArray', 'totalAmountsArray', 'backgroundColor', 'borderColor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
