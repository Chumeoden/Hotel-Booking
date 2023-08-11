<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Customer;

class FindRoomController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        $customers = Customer::all();
        $selectedCategory = $request->input('category_search');
        $selectedCustomer = $request->input('customer_search');

        // Thực hiện logic tìm phòng dựa trên $selectedCategory và $selectedCustomer

        return view('admin.find_rooms.index', compact('categories', 'customers', 'selectedCategory', 'selectedCustomer'));
    }

    public function searchCategory(Request $request)
    {
        $searchTerm = $request->input('category_search');
    
        $categories = Category::where('name', 'like', '%' . $searchTerm . '%')->get();
    
        $customers = Customer::all(); // Đảm bảo truy vấn tất cả khách hàng ở đây
    
        return view('admin.find_rooms.index', compact('categories', 'customers'));
    }
    
    public function searchCustomer(Request $request)
    {
        $searchTerm = $request->input('customer_search');
    
        $customers = Customer::where('last_name', 'like', '%' . $searchTerm . '%')->get();
    
        $categories = Category::all(); // Đảm bảo truy vấn tất cả danh mục ở đây
    
        return view('admin.find_rooms.index', compact('customers', 'categories'));
    }
    
    
    
}
