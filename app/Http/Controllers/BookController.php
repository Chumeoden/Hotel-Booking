<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class BookController extends Controller
{
    public function index()
    {
        $rooms = Room::all();

        return view('home.book', compact('rooms'))
            ->with('success', 'Đặt phòng thành công!');
    }
}
