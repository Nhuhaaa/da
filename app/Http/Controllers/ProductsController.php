<?php

namespace App\Http\Controllers;

use App\Models\Category_products;
use App\Models\Comment;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    public function products()
    {
        $allProducts = Products::with('category')->orderBy('name', 'desc')->paginate(9);
        $lite = Products::with('category')->orderBy('sold', 'desc')->paginate(3);
        $allCategories = Category_products::orderBy('name', 'asc')->get();
        return view('products', compact('allProducts', 'lite', 'allCategories'));
    }

    public function getProductsByCategory($category_id)
    {
        $allProducts = Products::where('category_id', $category_id)->with('category')->orderBy('name', 'asc')->paginate(9);
        $allCategories = Category_products::orderBy('name', 'asc')->get();
        $currentCategory = Category_products::find($category_id);
        $categoryName = $currentCategory ? $currentCategory->name : 'Danh mục không tồn tại';
        return view('products', compact('allProducts', 'allCategories', 'currentCategory', 'categoryName'));
    }

    public function detail($id)
    {
        $item = Products::with('category')->find($id);
        $relatedProducts = Products::where('category_id', $item->category_id)->where('id', '!=', $id)->limit(4)->get();
        $comments = Comment::where('product_id', $item->id)->orderBy('id', 'desc')->get();
        return view('detail', compact('item', 'relatedProducts', 'comments'));
    }

    // nhận yêu cầu từ người dùng để lưu bình luận vào sp
    public function comment(Request $request)
    {
        // Xác thực các trường dữ liệu đầu vào

        $request->validate([
            'comment_text' => 'required|string', // Xác thực các trường dữ liệu đầu vào
            'rating' => 'nullable|numeric|min:1|max:5', // 'rating' là tùy chọn và phải là số từ 1 đến 5 nếu có
            'user_id' => 'required|numeric|exists:users,id', // 'user_id' là bắt buộc và phải là số nguyên và tồn tại trong bảng 'users'
            'product_id' => 'required|numeric|exists:products,id' // 'product_id' là bắt buộc và phải là số nguyên và tồn tại trong bảng 'products'
        ]);

        $comment = new Comment();
        // Gán 'product_id' bằng với ID sản phẩm được truyền vào từ URL

        $comment->product_id = $request->product_id;
        // Gán 'user_id' bằng với ID người dùng đăng nhập

        $comment->user_id = $request->user_id;
        // Gán nội dung bình luận

        $comment->comment_text = $request->comment_text;
        // Gán số sao đánh giá từ yêu cầu (nếu có)
        $comment->rating = $request->rating;

        // Lưu bình luận vào cơ sở dữ liệu

        $comment->save();

        return redirect()->back()->with('message', 'Comment posted successfully');
    }

    public function getComment($productId)
    {
        // Lấy tất cả các bình luận liên quan đến sản phẩm có ID

        $comments = Comment::where('product_id', $productId)
            ->with('user') //Kèm theo thông tin của người dùng đã bình luận
            ->orderBy('id', 'desc')->get();// thứ tự giảm dần
        // Trả về các bình luận dưới dạng phản hồi JSON

        return response()->json($comments);

        return response()->json(['status' => 'success', 'message' => 'Comment posted successfully']);
    }



    public function deleteComment()
    {
        // Nhận 'id' của bình luận cần xóa từ yêu cầu
        $id = request('id');
        // tìm bình luận theo ID
        $comment = Comment::find($id);
        // Xóa bình luận
        $comment->delete();
        // phản hồi thành công
        return response()->json(['status' => 'success', 'message' => 'Comment deleted successfully']);
    }
}