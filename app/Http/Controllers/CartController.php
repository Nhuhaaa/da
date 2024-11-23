<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cart()
    {
        if (Auth::check()) {
            $cart = Auth::user()->cart;
            if (!$cart) {
                $cart = Cart::create(['user_id' => Auth::id()]);
            }
            return view('cart', compact('cart'));  // Trỏ tới cart.blade.php
        } else {
            return redirect()->route('login')->with('error', 'Vui lòng đăng nhập để xem giỏ hàng.');
        }
    }

    public function addToCart(Request $request, $productId)
    {
        Products::findOrFail($productId);

        if (Auth::check()) {
            $cart = Auth::user()->cart;
            if (!$cart) {
                $cart = Cart::create(['user_id' => Auth::id()]);
            }

            $quantity = $request->input('quantity', 1); // Giá trị mặc định là 1 nếu không có giá trị truyền vào

            $cartItem = $cart->items()->where('product_id', $productId)->first();

            if ($cartItem) {
                $cartItem->quantity += $quantity;
                $cartItem->save();
            } else {
                CartItem::create([
                    'cart_id' => $cart->id,
                    'product_id' => $productId,
                    'quantity' => $quantity,
                ]);
            }

            return redirect()->route('cart')->with('success', 'Sản phẩm đã được thêm vào giỏ hàng!');
        } else {
            return redirect()->route('login')->with('error', 'Vui lòng đăng nhập để thêm sản phẩm vào giỏ hàng.');
        }
    }

    public function updateCart(Request $request, $itemId)
    {
        if (Auth::check()) {
            $cartItem = CartItem::findOrFail($itemId);

            if ($request->has('increment')) {
                $cartItem->quantity += 1;
            } elseif ($request->has('decrement')) {
                $cartItem->quantity -= 1;
                if ($cartItem->quantity < 1) {
                    $cartItem->quantity = 1; // Không cho phép số lượng nhỏ hơn 1
                }
            } else {
                $cartItem->quantity = $request->quantity;
            }

            $cartItem->save();

            return redirect()->route('cart')->with('success', 'Số lượng sản phẩm đã được cập nhật!');
        } else {
            return redirect()->route('login')->with('error', 'Vui lòng đăng nhập để cập nhật giỏ hàng.');
        }
    }

    public function removeFromCart($itemId)
    {
        if (Auth::check()) {
            $cartItem = CartItem::findOrFail($itemId);
            $cartItem->delete();

            return redirect()->route('cart')->with('success', 'Sản phẩm đã được xóa khỏi giỏ hàng!');
        } else {
            return redirect()->route('login')->with('error', 'Vui lòng đăng nhập để xóa sản phẩm khỏi giỏ hàng.');
        }
    }
}
