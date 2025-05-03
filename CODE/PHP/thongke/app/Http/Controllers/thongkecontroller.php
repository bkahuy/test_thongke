<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class thongkecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome');
    }

    public function ketqua(Request $request)
    {
        $request->validate([
            'ngay' => 'required|date',
        ]);

        $ngay = $request->ngay;

        // Truy vấn đơn hàng chi tiết theo ngày
        $duLieu = DB::table('donhangs')
            ->join('khachhangs', 'donhangs.khach_hang_id', '=', 'khachhangs.id')
            ->join('chi_tiet_don_hangs', 'donhangs.id', '=', 'chi_tiet_don_hangs.don_hang_id')
            ->join('mathangs', 'chi_tiet_don_hangs.mat_hang_id', '=', 'mathangs.id')
            ->select(
                'khachhangs.ten_khach_hang as ten_khach_hang',
                'mathangs.ten_mat_hang as ten_mat_hang',
                'chi_tiet_don_hangs.so_luong',
                'mathangs.gia',
                DB::raw('chi_tiet_don_hangs.so_luong * mathangs.gia as thanh_tien')
            )
            ->whereDate('donhangs.ngay_dat', $ngay)
            ->get();


        return view('ketqua', compact('duLieu', 'ngay'));
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
