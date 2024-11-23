@extends('admin.layout')
@section('titlepage', 'Đơn hàng')
@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="container mt-4">
        <div class="row">
            <h2>Danh Sách Đơn Hàng</h2>
            <table class="table table-striped table-bordered">
                <thead class="table" style="background-color: #ffe0e0;">
                    <tr>
                        <th>ID</th>
                        <th>Mã đơn hàng</th>
                        <th>Tên người đặt</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th>Ngày đặt</th>
                        <th>Địa chỉ</th>
                        <th>Trạng thái</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->madh }}</td>
                            <td>{{ $order->name }}</td>
                            <td>{{ $order->quantity }}</td>
                            <td>{{ number_format($order->total, 0, ',', '.') }} VNĐ</td>
                            <td>{{ $order->created_at }}</td>
                            <td>{{ $order->address }}</td>
                            <td>
                                @if ($order->status < 4)
                                    <form action="{{ route('admin.order.updateStatus', $order->id) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <select name="status" onchange="this.form.submit()">
                                            @foreach ($statuses as $key => $status)
                                                <option value="{{ $key }}" {{ $order->status == $key ? 'selected' : '' }}>{{ $status }}</option>
                                            @endforeach
                                        </select>
                                    </form>
                                @else
                                    <span class="text-success">Đơn hàng đã hoàn thành</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            
            <!-- Hiển thị liên kết phân trang -->
            {{ $orders->links('pagination::bootstrap-5') }}
        </div>
    </div>
</main>

@endsection
