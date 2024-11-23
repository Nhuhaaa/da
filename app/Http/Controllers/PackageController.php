<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\Package;
use App\Models\Category_service;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    function package(){
        $categories = Category_service::all(); // Lấy tất cả danh mục
        $serviceNew = Service::with('category')->orderBy('id', 'desc')->paginate(4); // Lấy dịch vụ và thông tin danh mục
        $serviceOld = Service::with('category')->orderBy('id', 'asc')->paginate(4);
        $services = Service::all(); // Lấy tất cả dịch vụ
        $allPackages = Package::with('service')->paginate(6);
        return view('package', compact('categories', 'serviceNew', 'serviceOld','allPackages','services'));
    }
}
