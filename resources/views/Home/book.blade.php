@extends('layouts.app')

@section('styles')

@endsection

@section('content')
<div class="container">
    <h1>Trang Đặt Phòng</h1>

    <!-- Thông báo đặt phòng thành công -->
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <style>
    .room-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start;
    }
    
    .room-card {
        width: 25%;
        padding: 10px;
        box-sizing: border-box;
        display: flex; /* Thêm dòng này để các phòng nằm ngang */
        flex-direction: column; /* Thêm dòng này để các thông tin nằm dưới hình ảnh */
    }
    
    .book-button {
        margin-top: 10px;
        display: block;
        width: 100%;
        text-align: center;
    }
</style>
    <!-- Room Listing -->
    <div class="room_type"><h2>Phòng Hot</h2></div>
    <div class="room-container">
        @foreach ($rooms as $room)
            <div class="room-card" onclick="showModel(this)">
                <img src="{{ asset('storage/' . $room->image) }}" alt="Hình ảnh phòng">
                <div class="room-info">
                    <span class="room-number">Số phòng: {{ $room->room_number }}</span>
                    <span class="room-floor">Tầng: {{ $room->floor }}</span>
                    <p class="room-description">Mô tả: {{ $room->description }}</p>
                    <span class="room-price">Giá: ${{ $room->price }}</span>
                    <span class="room-capacity">Sức chứa: {{ $room->capacity }}</span>
                </div>
                <form action="{{ route('book') }}">
                    @csrf
                    <input type="hidden" name="room_id" value="{{ $room->id }}">
                    <button type="submit" class="btn btn-success book-button">Đặt Phòng</button>
                </form>
            </div>
        @endforeach
    </div>
</div>
@endsection
