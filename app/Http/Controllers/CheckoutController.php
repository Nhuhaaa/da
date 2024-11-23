<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CheckoutController extends Controller
{
    public function create(Request $request)
    {
        $cartItems = [
            'product_id' => $request->input('product_id'), // Chỉnh sửa ở đây
            'names' => $request->input('name'),
            'images' => $request->input('image'),
            'prices' => $request->input('price'),
            'quantities' => $request->input('quantity')
        ];

        session(['cartItems' => $cartItems]);

        return view('create', compact('cartItems'));
    }
    public function store(Request $request)
    {
        // Tạo đơn hàng mới
        $order = new Order();
        $order->user_id = Auth::id(); // Lấy thông tin người dùng đang đăng nhập
        $order->madh = 'LalisaSpa' .  mt_rand(10000, 99999); // Mã đơn hàng ngẫu nhiên
        $order->total = 0; // Khởi tạo tổng số tiền của đơn hàng
        $order->name = $request->input('name'); // Thêm giá trị mẫu cho trường name
        $order->email = $request->input('email'); // Email người đặt hàng
        $order->phone = $request->input('phone');
        $order->address = $request->input('address'); // Địa chỉ người đặt hàng
        $order->status = 1; // Gán trạng thái mặc định là "Chờ xác nhận"
    
        if ($order->save()) {
            $totalAmount = 0;
            // Lấy các mục trong giỏ hàng của người dùng
            $cartItems = Auth::user()->cart->items;
            // Duyệt qua từng mục trong giỏ hàng và thêm vào đơn hàng
            foreach ($cartItems as $cartItem) {
                $orderItem = new OrderItem();
                $orderItem->order_id = $order->id;
                $orderItem->product_id = $cartItem->product_id;
                $orderItem->price = $cartItem->product->price;
                $orderItem->quantity = $cartItem->quantity;
                $orderItem->save();
    
                // Cập nhật tổng số tiền của đơn hàng
                $totalAmount += $cartItem->product->price * $cartItem->quantity;
    
                // Xóa mục trong giỏ hàng sau khi chuyển sang đơn hàng
                $cartItem->delete();
            }
            // Cập nhật tổng số tiền cho đơn hàng
            $order->total = $totalAmount;
            $order->save();
    
            return redirect()->route('show', [$order->id])->with('success', 'Đã thanh toán thành công!');
        }
    
        return redirect()->route('cart')->with('error', 'Đã xảy ra lỗi trong quá trình thanh toán!');
    }
    

}
