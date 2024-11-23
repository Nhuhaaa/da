@extends('layout')
@section('titlepage', 'Thanh toán')

@section('content')
<section class="page_banner">

    <div class="container">
        <div class="row">
            <div class="col-lg-5 offset-lg-1">
                <h2 class="banner-title">Sản phẩm</h2>
                <p class="breadcrumbs"><a href="{{ route('home') }}">Home</a><span>/</span>Products</p>
            </div>

        </div>
    </div>
</section>

<div class="cartPage">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="woocommerce">
                    <form action="{{ route('checkout.store') }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                            <label for="name" class="form-label">Họ và tên</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ Auth::user()->name }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ Auth::user()->email }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Số điện thoại</label>
                            <input type="text" class="form-control" id="phone" name="phone" required>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Địa chỉ</label>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="">Loại</label>
                            <select class="form-select" id="" name="" required>
                                <option value="loai1">Thanh toán khi nhận hàng</option>
                                <option value="loai2">VN Pay (đang cập nhật)</option>
                                <option value="loai3">Momo (đang cập nhật)</option>
                                <option value="loai4">Thanh toán bằng thẻ (đang cập nhật)</option>
                            </select>
                        </div>

                        <h5 class="text-danger">Thông tin sản phẩm</h5>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Hình</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Đơn giá</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cartItems['names'] as $index => $name)
                                    <tr>
                                        <td><img src="{{ asset('upload/' . $cartItems['images'][$index]) }}" alt=""
                                                width="100px"></td>
                                        <td>{{ $name }}</td>
                                        <td>{{ number_format($cartItems['prices'][$index], 0, ',', '.') }} VNĐ</td>
                                        <td>{{ $cartItems['quantities'][$index] }}</td>
                                        <td>{{ number_format($cartItems['prices'][$index] * $cartItems['quantities'][$index], 0, ',', '.') }}
                                            VNĐ</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <button type="submit" class="mo_btn"><i class="fa-solid fa-cart-shopping"></i>THANH TOÁN</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
    <br>
    <style>

    </style>
    @endsection