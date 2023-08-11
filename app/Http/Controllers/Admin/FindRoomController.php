<?php

namespace App\Http\Controllers\Admin;

use App\Models\Room;
use App\Models\Category;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FindRoomController extends Controller
{
    public function index(Request $request)
    {
        $time_from = $request->input('time_from');
        $time_to = $request->input('time_to');

        if ($request->isMethod('POST')) {
            $rooms = Room::with('booking')->whereHas('booking', function ($q) use ($time_from, $time_to) {
                $q->where(function ($q2) use ($time_from, $time_to) {
                    $q2->where('time_from', '>=', $time_to)
                       ->orWhere('time_to', '<=', $time_from)
                       ->orWhere('status', 'completed')
                       ->orWhere('status', 'cancelled');
                });
            })->orWhereDoesntHave('booking')->get();
        } else {
            $rooms = [];
        }

        $categories = Category::all();
        $customers = Customer::all();

        return view('admin.find_rooms.index', compact('rooms', 'categories', 'customers', 'time_from', 'time_to'));
    }
}
