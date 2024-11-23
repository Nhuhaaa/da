@extends('layout')

@section('title', 'Chi tiết đơn hàng')

@section('content')
<section class="page_banner">

    <div class="container">
        <div class="row">
            <div class="col-lg-5 offset-lg-1">
                <h2 class="banner-title">Chi tiết lịch hẹn</h2>
                <p class="breadcrumbs"><a href="{{ route('home') }}">Home</a><span>/</span>Appointments</p>
            </div>

        </div>
    </div>
</section>

<div class="cartPage">
    <div class="container">
        <h1>Chi tiết lịch hẹn #{{ $bookings->id }}</h1>
        <p>Dịch vụ: {{ $bookings->service->service_name }}</p>
        <p>Gói dịch vụ: {{ $bookings->package->package_name }}</p>
        <p>Ngày & giờ: {{ $bookings->appointment_datetime ? \Carbon\Carbon::parse($bookings->appointment_datetime)->format('d-m-Y H:i') : 'Không có dữ liệu' }}</p>
        <p>Lời nhắn: {{ $bookings->message }}</p>
        <p>Trạng thái: {{ $bookings->status }}</p>
    </div>
</div>
@endsection
