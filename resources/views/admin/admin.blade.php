@extends('admin.layout')
@section('titlepage', 'Dashboard')
@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-3 mb-3">
                <a href="{{ route('productadmin') }}" style="text-decoration: none;">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-box"></i>
                                Tổng số sản phẩm</h5>
                            <p class="card-text">{{ $totalProducts }}</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="{{ route('admin.bookings') }}" style="text-decoration: none;">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-calendar-check"></i>
                                Tổng số lịch đặt dịch vụ</h5>
                            <p class="card-text">{{ $totalBookings }}</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="{{ route('service_admin') }}" style="text-decoration: none;">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-spa"></i>
                                Tổng số dịch vụ</h5>
                            <p class="card-text">{{ $totalServices }}</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="{{ route('packageadmin') }}" style="text-decoration: none;">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-boxes"></i>
                                Tổng số gói dịch vụ</h5>
                            <p class="card-text">{{ $totalPackages }}</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="{{ route('useradmin') }}" style="text-decoration: none;">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-users"></i>
                                Tổng số người dùng</h5>
                            <p class="card-text">{{ $totalUsers }}</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="{{ route('order') }}" style="text-decoration: none;">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-shopping-cart"></i>
                                Tổng số đơn hàng</h5>
                            <p class="card-text">{{ $totalOrders }}</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="{{ route('blogadmin') }}" style="text-decoration: none;">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-tags"></i>
                                Tổng số bài viết</h5>
                            <p class="card-text">{{ $totalBlogs }}</p>
                        </div>
                    </div>
                </a>
            </div>

        </div>
        <div class="">
            <div class="">
                <div class="" style="max-width: auto; margin: 0 auto;">
                    <h5 class=""> Doanh Thu Tổng</h5>
                    <canvas id="revenueChart" style="max-height: 300px;"></canvas> <!-- Phần tử chứa biểu đồ -->
                </div>
            </div>
        </div>

    </div>
</main>
<style>
    .card {
        background-color: #E6A4B4;
        border: 1px solid #ffc1c1;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        /* Đổ bóng nhẹ */
        transition: box-shadow 0.3s ease;
        /* Hiệu ứng chuyển đổi */
    }

    /* Hiệu ứng đổ bóng mạnh hơn khi hover */
    .card:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
    }

    .card-title,
    .card-text {
        color: #F5EEE6;
        /* Màu trắng cho tiêu đề và nội dung */
        text-shadow: 1px 1px 2px #000000;
        /* Viền nhẹ màu đen cho chữ */

    }

    .card .card-title i {
        color: #FFF8E3;

    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const ctx = document.getElementById('revenueChart').getContext('2d');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Doanh thu tổng'],
                datasets: [{
                    label: 'VNĐ',
                    data: [{{ $totalRevenue }}],
                    backgroundColor: 'rgba(255, 99, 132, 0.5)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                maintainAspectRatio: false,
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        max: {{ $totalRevenue * 1.2 }}, // Giới hạn tối đa của trục y để cột nhỏ lại
                        ticks: {
                            callback: function(value) { return value.toLocaleString() + ' VNĐ'; }
                        }
                    }
                },
                plugins: {
                    legend: { display: false }
                }
            }
        });
    });
</script>


@endsection