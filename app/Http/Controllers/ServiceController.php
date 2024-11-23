<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Category_service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        $services = Service::with('packages')->get(); // Lấy tất cả dịch vụ và gói kèm theo
    
        // Khởi tạo biến $selectedService
        $selectedService = $request->old('service_id') ? Service::find($request->old('service_id')) : null;

        // Lấy các gói dịch vụ tương ứng với dịch vụ đã chọn
        $packages = $selectedService ? $selectedService->packages : collect();

        return view('booking.index', compact('services', 'selectedService', 'packages'));
    }
}
