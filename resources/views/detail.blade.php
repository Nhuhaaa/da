@extends('layout')
@section('titlepage', $item->name)
@section('content')

    <!-- Begin:: Single Products Section -->
    <section class="singleProduct">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="product_gallery">
                        <ul id="product_gallery" class="gallery_sliders cS-hidden">
                            <li data-thumb="{{ asset('upload/' . $item->image) }}">
                                <div class="pg_item"><img src="{{ asset('upload/' . $item->image) }}" alt="" /></div>
                            </li>
                            <li data-thumb="{{ asset('upload/' . $item->image) }}">
                                <div class="pg_item"><img src="{{ asset('upload/' . $item->image) }}" alt="" />
                                </div>
                            </li>
                            <li data-thumb="{{ asset('upload/' . $item->image) }}">
                                <div class="pg_item"><img src="{{ asset('upload/' . $item->image) }}" alt="" />
                                </div>
                            </li>
                            <li data-thumb="{{ asset('upload/' . $item->image) }}">
                                <div class="pg_item"><img src="{{ asset('upload/' . $item->image) }}" alt="" />
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product_details">
                        <h3>{{ $item->name }}</h3>
                        <div class="product_price clearfix">
                            <span class="price">
                                <del><span class="woocommerce-Price-amount amount"><bdi>{{ number_format($item->price, 0, ',', '.') }}
                                            VNĐ</bdi></span></del>
                                <ins><span class="woocommerce-Price-amount amount"><bdi>{{ number_format($item->price, 0, ',', '.') }}
                                            VNĐ</bdi></span></ins>
                            </span>
                        </div>
                        <div class="woocommerce-product-rating">
                            <!-- <div class="star-rating" role="img" aria-label="Rated 4.50 out of 5">
                                <span class="w80">
                                    Rated
                                    <strong class="rating">4.50</strong>
                                    out of 5 based on
                                    <span class="rating">2</span>
                                    customer ratings
                                </span>
                            </div> -->
                            <a href="#reviews" class="woocommerce-review-link" rel="nofollow"><span class="count"><p class="sicc_title" id="commentCount"></p></span>
                                </a>
                        </div>
                        <div class="pd_excrpt">
                            <p>
                                {{ $item->description }}
                            </p>
                        </div>
                        <div class="cart_quantity clearfix">
                            <div class="quantity quantityd clearfix">
                                <button type="button" class="minus qtyBtn btnMinus">-</button>
                                <input type="number" class="carqty input-text qty text" name="quantity" value="1">
                                <button type="button" class="plus qtyBtn btnPlus">+</button>
                            </div>

                            <form action="{{ route('cart.add', $item->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="quantity" id="quantityInput" value="1">
                                <button type="submit" class="mo_btn"><i class="icofont-cart-alt"></i>Thêm vào giỏ
                                    hàng</button>
                            </form>

                        </div>
                        <div class="pro_meta clearfix">
                            <h5>Info</h5>
                            <!-- <div class="mtItem">
                                SKU: 01
                            </div> -->
                            <div class="mtItem">
                                Category: <a href="">{{ $item->category->name }}</a>
                            </div>

                        </div>
                        <div class="pro_m_social">
                            <h5>Share:</h5>
                            <a target="_blank" href="https://www.facebook.com/"><i class="icofont-facebook"></i></a>
                            <a target="_blank" href="https://twitter.com/"><i class="icofont-twitter"></i></a>
                            <a target="_blank" href="https://bebo.com/"><i class="icofont-bebo"></i></a>
                            <a target="_blank" href=""><i class="icofont-dribbble"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="product_tabarea">
                        <ul class="nav nav-tabs productTabs" id="productTabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="active" id="description-tab" data-toggle="tab" href="#description" role="tab"
                                    aria-controls="description" aria-selected="true">Thông tin sản phẩm</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews"
                                    aria-selected="false">Đánh giá</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="description" role="tabpanel"
                                aria-labelledby="description-tab">
                                <div class="pdtci_content">
                                    <p>
                                        {{ $item->description }}
                                    </p>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                <div class="pdtci_content">
                                    <div class="comment_area">
                                        <div class="sic_comments">
                                            <h3 class="sicc_title" id="commentCount"></h3>
                                            <ol class="sicc_list">
                                            </ol>
                                        </div>
                                        @auth
                                            <div class="commentForm productCommentForm">
                                                <h3 class="sicc_title">Đánh giá của bạn</h3>
                                                <form action="#" method="post" class="row" id="commentForm">
                                                    <style>
                                                        .star-rating {
                                                            display: flex;
                                                            flex-direction: row-reverse;
                                                            justify-content: flex-start;
                                                        }

                                                        .star-rating input {
                                                            display: none;
                                                        }

                                                        .star {
                                                            font-size: 30px;
                                                            cursor: pointer;
                                                            color: #ddd;
                                                            transition: color 0.2s;
                                                        }

                                                        .star:hover,
                                                        .star:hover~.star,
                                                        .star-rating input:checked~.star {
                                                            color: #f5b301;
                                                        }
                                                    </style>

                                                    <!-- Phần chọn số sao -->
                                                    <div class="col-md-6 rating-section">
                                                        <div class="star-rating">
                                                            <!-- Lặp từ 1 đến 5 để chọn số sao -->
                                                            <input type="radio" id="star5" name="rating"
                                                                value="5">
                                                            <label for="star5" class="star">
                                                                <i class="icofont-star"></i>
                                                            </label>
                                                            <input type="radio" id="star4" name="rating"
                                                                value="4">
                                                            <label for="star4" class="star">
                                                                <i class="icofont-star"></i>
                                                            </label>
                                                            <input type="radio" id="star3" name="rating"
                                                                value="3">
                                                            <label for="star3" class="star">
                                                                <i class="icofont-star"></i>
                                                            </label>
                                                            <input type="radio" id="star2" name="rating"
                                                                value="2">
                                                            <label for="star2" class="star">
                                                                <i class="icofont-star"></i>
                                                            </label>
                                                            <input type="radio" id="star1" name="rating"
                                                                value="1">
                                                            <label for="star1" class="star">
                                                                <i class="icofont-star"></i>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <!-- Phần nhập nội dung bình luận -->
                                                    <div class="col-md-12">
                                                        <label for="comment">Nhập nội dung</label>
                                                        <textarea name="comment" id="comment" cols="30" rows="5"></textarea>
                                                    </div>

                                                    <!-- Nút gửi bình luận -->
                                                    <div class="col-md-12">
                                                        <button class="mo_btn" type="submit"><i
                                                                class="icofont-long-arrow-right"></i> Bình luận</button>
                                                    </div>
                                                </form>
                                            </div>

                                        @endauth
                                        @guest
                                            <div class="commentForm productCommentForm">
                                                <a href="{{ route('login', ['redirect' => $item->id]) }}" class="mo_btn">
                                                    <i class="icofont-long-arrow-right"></i>
                                                    Đăng nhập để đánh giá
                                                </a>
                                            </div>
                                        @endguest
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="related_area">
                        <h2>Sản phẩm liên quan</h2>
                        <div class="related_carousel owl-carousel">
                            @foreach ($relatedProducts as $item)
                                <div class="product_item text-center">
                                    <div class="pi_thumb">
                                        <img src="{{ asset('upload/' . $item->image) }}" alt=""
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
                                        <div class="prLabels">
                                            <p class="justin">New</p>
                                        </div>
                                    </div>
                                    <div class="pi_content">
                                        <p><a href="">
                                                @if ($item->category)
                                                    {{ $item->category->name }}
                                                @endif
                                            </a></p>
                                        <h3><a href="">{{ $item->name }}</a></h3>
                                        <div class="product_price clearfix">
                                            <span class="price">{{ number_format($item->price, 0, ',', '.') }} VNĐ</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End:: Single Products Section -->

@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const stars = document.querySelectorAll('.star');
            stars.forEach(star => {
                star.addEventListener('click', function() {
                    const ratingValue = this.previousElementSibling.value;
                    console.log('Bạn đã chọn số sao:', ratingValue);
                });
            });
        });


        function generateStars(rating) {
            rating = Math.max(1, Math.min(5, parseInt(rating, 10)));

            let stars = '';
            for (let i = 0; i < rating; i++) {
                stars += '<span>⭐</span>';
            }
            for (let i = rating; i < 5; i++) {
                stars += '<span>☆</span>';
            }
            return stars;
        }

        $(document).ready(function() {
            const BASEURL = "{{ env('APP_URL') }}";
            const authId = "{{ auth()->id() }}";

            function fetchComment() {
                $.ajax({
                    url: "{{ route('product.getComment', $item->id) }}", //  gửi tới hàm getComment trong ProductsController.
                    method: 'GET',
                    success: function(data) {
                        $('#commentCount').text(data.length + ' Comments');
                        let html = '';
                        data.forEach(item => {
                            const stars = generateStars(item.rating); // Hàm tạo số sao

                            html += `
                        <li>
                            <article class="single_comment productComent">
                                <img src="${BASEURL}/upload/${item.user.image}" alt="">
                                <h4 class="cm_author"><a href="javascript:void(0);">${item.user.name}</a></h4>
                                <span class="cm_date">
                                    ${new Date(item.created_at).toLocaleDateString('vi-VN')}
                                </span>
                                <div class="sc_content">
                                    <p>${item.comment_text}</p>
                                </div>
                                <div class="sc_rating">
                                    ${stars}
                                </div>

                                ${
                                    authId && authId == item.user_id ? `
                                                                    <a href="javascript:void(0);" class="deleteComment" data-id="${item.id}"
                                                                    style="position: absolute; right: 10px; top: 10px;">
                                                                        <i class="icofont-trash"></i>
                                                                    </a>
                                                                    ` : ''
                                }
                            </article>
                        </li>
                    `;
                        });
                        $('.sicc_list').html(html); // Hiển thị danh sách bình luận
                    }
                });
            }

// Khi người dùng nhập nội dung bình luận và chọn số sao, sau đó nhấn "Bình luận,"
// một yêu cầu AJAX được gửi để lưu bình luận vào cơ sở dữ liệu.
            $('#commentForm').submit(function(e) {
                e.preventDefault();
                const rating = $('input[name="rating"]:checked').val();
                const comment = $('#comment').val();

                $.ajax({
                    url: "{{ route('product.comment.post', $item->id) }}",
                    // Lấy giá trị rating và nội dung bình luận, sau đó gửi bằng phương thức POST tới route
                    method: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}",
                        rating: rating,
                        comment_text: comment
                    },
                    success: function(data) {
                        fetchComment(); // Làm mới danh sách bình luận
                        $('#comment').val('');// Xóa nội dung sau khi gửi
                        $('input[name="rating"]').prop('checked', false);
                    }
                });
            });

            $(document).on('click', '.deleteComment', function() {
                const id = $(this).data('id');
                $.ajax({
                    url: "{{ route('product.comment.delete') }}",
                  //  Khi người dùng nhấn vào biểu tượng xóa (deleteComment), gửi yêu cầu AJAX POST đến route product.comment.delete.
                    method: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: id
                    },
                    success: function(data) {
                        fetchComment();
                        // Sau khi xóa thành công, gọi lại hàm fetchComment() để làm mới danh sách bình luận.
                    }
                });
            });

            fetchComment();
        });
    </script>
@endpush
