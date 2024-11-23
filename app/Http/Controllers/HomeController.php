<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Products;
use App\Models\Booking;
use App\Models\Service;
use App\Models\Package;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $popularPosts = Post::orderBy('views', 'desc')->take(3)->get();
        $services = Service::all(); // Giả sử bạn đã có bảng services
        $packages = Package::all(); // Lấy tất cả packages
        $serviceNew = Service::with('category')->orderBy('id', 'desc')->paginate(4);
        $serviceOld = Service::with('category')->orderBy('id', 'asc')->paginate(4);
        $allProducts = Products::with('category')->orderBy('id', 'asc')->paginate(6);
        $newProducts = Products::with('category')->orderBy('id', 'desc')->paginate(6);
        return view('home', compact('services','packages','popularPosts', 'serviceNew', 'serviceOld','allProducts','newProducts'));
    }
}