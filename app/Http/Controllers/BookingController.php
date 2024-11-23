<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function booking(Request $request)
    {
        // Kiểm tra người dùng đã đăng nhập hay chưa
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Bạn cần đăng nhập trước khi đặt lịch.');
        }
    
        $request->validate([
            'service_id' => 'required|exists:service,id',
            'package_id' => 'required|exists:packages,id',
            'date_time' => 'required|date',
            'message' => 'nullable|string',
        ]);
    
        // Tạo một bản ghi mới trong bảng booking
        Booking::create([
            'user_id' => Auth::id(), // Lấy ID người dùng đã đăng nhập
            'service_id' => $request->service_id, 
            'package_id' => $request->package_id,
            'appointment_datetime' => \Carbon\Carbon::parse($request->date_time),
            'status' => 'pending',
        ]);
    
        return redirect()->route('booking.index')->with('success', 'Đặt lịch thành công!');
    }

    public function showbooking()
    {
        $appointments = Booking::where('user_id', Auth::id())->with(['service', 'package'])->get();
        return view('showbooking', compact('appointments'));
    }
    

}