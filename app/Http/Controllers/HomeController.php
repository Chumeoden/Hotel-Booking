<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Booking;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\Admin\RoomRequest;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Storage;



class HomeController extends Controller
{
    public function index()
    {
        $rooms = Room::all(); // Lấy dữ liệu từ bảng "rooms"
        return view('Home', compact('rooms')); // Truyền dữ liệu vào view 'home.blade.php'
    }
}