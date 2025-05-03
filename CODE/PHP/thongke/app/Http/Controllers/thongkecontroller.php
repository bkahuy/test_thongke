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

        $duLieu = DB::table('DonHang')
            ->join('KhachHang', 'DonHang.MaKH', '=', 'KhachHang.MaKH')
            ->join('ChiTietDonHang', 'DonHang.MaDH', '=', 'ChiTietDonHang.MaDH')
            ->join('MatHang', 'ChiTietDonHang.MaHang', '=', 'MatHang.MaHang')
            ->select(
                'KhachHang.TenKH as ten_khach_hang',
                'MatHang.TenHang as ten_mat_hang',
                'ChiTietDonHang.SoLuong as so_luong',
                'MatHang.DonGia as gia',
                DB::raw('ChiTietDonHang.SoLuong * MatHang.DonGia as thanh_tien')
            )
            ->whereDate('DonHang.NgayLap', $ngay)
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
