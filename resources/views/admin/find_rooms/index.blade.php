@extends('layouts.admin')

@section('content')

<style>
    /* CSS code for styling the table */
    .table {
        width: 100%;
        border-collapse: collapse;
        border: 1px solid #ccc;
    }

    .table th {
        background-color: #f2f2f2;
        padding: 8px;
        border: 1px solid #ccc;
    }

    .table td {
        padding: 8px;
        border: 1px solid #ccc;
    }

    .table tr:nth-child(odd) {
        background-color: #f9f9f9;
    }
</style>

<div class="container">
    <h1>Find Rooms</h1>
    <!-- Hiển thị các form và thông tin cần thiết ở đây -->

    <!-- Form tìm kiếm danh mục -->
    <form action="{{ route('admin.find_rooms.search-category') }}" method="GET">
        <div class="form-group">
            <label for="category_search">Search Hotel:</label>
            <input type="text" class="form-control" id="category_search" name="category_search">
        </div>
        <button type="submit" class="btn btn-primary">Search Hotel</button>
    </form>

    <!-- Hiển thị danh sách các danh mục -->
    <h2>Hotels</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Form tìm kiếm khách hàng -->
    <form action="{{ route('admin.find_rooms.search-customer') }}" method="GET">
        <div class="form-group">
            <label for="customer_search">Search Customers:</label>
            <input type="text" class="form-control" id="customer_search" name="customer_search">
        </div>
        <button type="submit" class="btn btn-primary">Search Customers</button>
    </form>

    <!-- Hiển thị danh sách khách hàng -->
    <h2>Customers</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Full Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->full_name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
