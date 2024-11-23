@extends('layout')
@section('titlepage', ' Products')
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

<section class="shopPage">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="row shop_sort_count_row">
                    <div class="col-md-7">
                        <p class="woocommerce-result-count">Tất cả sản phẩm</p>
                    </div>

                </div>
                <div class="row">
                    @foreach ($allProducts as $item)
                        <div class="col-lg-4 col-md-6">
                            <div class="product_item text-center">
                                <div class="pi_thumb">
                                    <img src="{{ asset('upload/' . $item->image) }}" alt="" class="img-fluid"
                                        style="width: 300px; height: 200px; object-fit: cover;" />

                                    <div class="pi_01_actions">
                                        <a href="{{ route('detail', ['id' => $item->id]) }}"
                                            onclick="event.preventDefault(); document.getElementById('add-to-cart-form-{{ $item->id }}').submit();">
                                            <i class="icofont-cart-alt"></i>
                                        </a>
                                        <a href="{{ route('detail', ['id' => $item->id]) }}">
                                            <i class="icofont-eye"></i>
                                        </a>
                                    </div>

                                    <form id="add-to-cart-form-{{ $item->id }}" action="{{ route('cart.add', $item->id) }}"
                                        method="POST" style="display: none;">
                                        @csrf
                                    </form>


                                    <div class="prLabels">
                                        <p class="justin">New</p>
                                    </div>
                                </div>
                                <div class="pi_content">
                                    <p><a href="shop.html">
                                            @if ($item->category)
                                                {{ $item->category->name }}
                                            @endif
                                        </a></p>
                                    <h3><a href="single-product.html">{{ $item->name }}</a></h3>
                                    <div class="product_price clearfix">
                                        <span class="price">{{ number_format($item->price, 0, ',', '.') }} VNĐ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="make_pagination text-center">
                            {{ $allProducts->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="sidebar">
                    <div class="widget">
                        <h3 class="widget_title">Danh mục</h3>
                        <select name="category">
                        @foreach ($allCategories as $item)
                            <option value="1">{{ $item->name }}</option>
                         
                            @endforeach
                        </select>
                    </div>

                    <aside class="widget">
                        <h3 class="widget_title">Sản phẩm hot</h3>
                        @foreach ($lite as $item)
                        <div class="product_widget_item">
                            <img src="{{ asset('upload/' . $item->image) }}" alt="" />
                            <h5><a href="single-product.html">{{ $item->name }}</a></h5>
                            <div class="product_price clearfix">
                            <span class="price">{{ number_format($item->price, 0, ',', '.') }} VNĐ</span>
                            </div>
                        </div>
                        @endforeach
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection