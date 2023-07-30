<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Room::all(); // Lấy danh sách các sản phẩm phòng từ CSDL

        // Truyền biến $categories vào view home.blade.php
        return view('home', ['categories' => $categories]);
    }
}
