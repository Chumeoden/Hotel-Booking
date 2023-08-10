<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function book(Request $request)
    {
        // Xử lý logic đặt phòng ở đây
        
        return redirect()->route('home')->with('success', 'Đặt Phòng Thành Công');
    }
}
