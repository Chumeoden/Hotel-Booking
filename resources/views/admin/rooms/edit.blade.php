@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<!-- Content Row -->
        <div class="card shadow">
            <div class="card-header py-3 d-flex">
            <h1 class="h3 mb-0 text-gray-800">{{ __('create room') }}</h1>
                <div class="ml-auto">
                    <a href="{{ route('admin.rooms.index') }}" class="btn btn-primary">
                        <span class="text">{{ __('Go Back') }}</span>
                    </a>
                </div>
            </div>
            <div class="card-body">
            <form action="{{ route('admin.rooms.update', $room->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="room_number">{{ __('Room Number') }}</label>
        <input type="text" class="form-control" id="room_number" placeholder="{{ __('room number') }}" name="room_number" value="{{ old('room_number', $room->room_number) }}" />
    </div>
    <div class="form-group">
        <label for="price">{{ __('Price') }}</label>
        <input type="number" class="form-control" id="price" placeholder="{{ __('price') }}" name="price" value="{{ old('price', $room->price) }}" />
    </div>
    <div class="form-group">
        <label for="capacity">{{ __('Capacity') }}</label>
        <input type="number" class="form-control" id="capacity" placeholder="{{ __('capacity') }}" name="capacity" value="{{ old('capacity', $room->capacity) }}" />
    </div>
    <div class="form-group">
        <label for="category">{{ __('Category') }}</label>
        <select class="form-control" name="category_id" id="category">
            @foreach($categories as $id => $category)
                <option value="{{ $id }}" {{ $room->category_id == $id ? 'selected' : '' }}>{{ $category }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="floor">{{ __('Floor') }}</label>
        <input type="number" class="form-control" id="floor" placeholder="{{ __('floor') }}" name="floor" value="{{ old('floor', $room->floor) }}" />
    </div>
    <div class="form-group">
        <label for="description">{{ __('Description') }}</label>
        <textarea class="form-control" name="description" id="description" placeholder="description" cols="30" rows="10">{{ old('description', $room->description) }}</textarea>
    </div>
    <div class="form-group">
        <label for="image">{{ __('Image') }}</label>
        <input type="file" class="form-control-file" id="image" name="image">
    </div>
    <button type="submit" class="btn btn-primary btn-block">{{ __('Save') }}</button>
</form>

            </div>
        </div>
    

    <!-- Content Row -->

</div>
@endsection