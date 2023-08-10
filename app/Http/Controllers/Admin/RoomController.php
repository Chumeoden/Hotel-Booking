<?php

namespace App\Http\Controllers\Admin;

use App\Models\Room;
use App\Models\Booking;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\Admin\RoomRequest;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Storage;

class RoomController extends Controller
{
 
    public function index()
    {
        abort_if(Gate::denies('room_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $rooms = Room::all();

        return view('admin.rooms.index', compact('rooms'));
    }

 
    public function create()
    {
        abort_if(Gate::denies('room_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = Category::get()->pluck('name', 'id');

        return view('admin.rooms.create', compact('categories'));
    }

 
    public function store(RoomRequest $request)
    {
        abort_if(Gate::denies('room_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
    
        // Lấy thông tin phòng từ request và tạo mới
        $roomData = $request->validated();
        $room = Room::create($roomData);
    
        // Xử lý tải ảnh và lưu tên tệp vào cơ sở dữ liệu
        if ($request->hasFile('image')) {
            // $imagePath = $request->file('image')->store('', 'public');

            $file = $request->file('image');

        // Store the file in the public disk
        $path = Storage::disk('public')->put('', $file);
            
            $room->image = $path;
            $room->save();
        }
    
        return redirect()->route('admin.rooms.index')->with([
            'message' => 'successfully created !',
            'alert-type' => 'success'
        ]);
    }
 
    public function show(Room $room)
    {
        abort_if(Gate::denies('room_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $bookings = Booking::where('room_id', $room->id)->get();

        return view('admin.rooms.show', compact('room', 'bookings'));
    }

 
    public function edit(Room $room)
    {
        abort_if(Gate::denies('room_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = Category::get()->pluck('name', 'id');

        return view('admin.rooms.edit', compact('room', 'categories'));
    }

 
    public function update(RoomRequest $request, Room $room)
    {
        abort_if(Gate::denies('room_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
    
        // Lấy thông tin phòng từ request và cập nhật
        $roomData = $request->validated();
        $room->update($roomData);
    
        // Xử lý tải ảnh và lưu tên tệp vào cơ sở dữ liệu
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('rooms', 'public');
            $room->image = $imagePath;
            $room->save();
        }
    
        return redirect()->route('admin.rooms.index')->with([
            'message' => 'successfully updated !',
            'alert-type' => 'info'
        ]);
    }

 
    public function destroy(Room $room)
    {
        abort_if(Gate::denies('room_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $room->delete();

        return redirect()->route('admin.rooms.index')->with([
            'message' => 'successfully deleted !',
            'alert-type' => 'danger'
        ]);
    }

        /**
     * Delete all selected Permission at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        abort_if(Gate::denies('room_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        Room::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}
