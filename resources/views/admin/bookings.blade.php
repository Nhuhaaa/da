@extends('admin.layout')
@section('titlepage', 'Quản lý Đặt Lịch')
@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="container mt-4">
        <div class="row">
            <h2>Danh Sách Đặt Lịch</h2>

            <!-- Thông báo thành công nếu có -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table table-striped table-bordered" style="border-radius: 10px; overflow: hidden;">
                <thead class="table" style="background-color: #ffe0e0;">
                    <tr>
                        <th>ID</th>
                        <th>Tên Người Dùng</th>
                        <th>Dịch Vụ</th>
                        <th>Gói Dịch Vụ</th>
                        <th>Ngày & Giờ</th>
                        <th>Trạng Thái</th>
                        <th>Thao Tác</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($bookings as $booking)
                    <tr>
                        <td>{{ $booking->id }}</td>
                        <td>{{ $booking->user->name }}</td>
                        <td>{{ $booking->service->service_name }}</td>
                        <td>
                            @if($booking->package)
                                {{ $booking->package->package_name }}
                            @else
                                <span class="text-danger">Chưa có gói dịch vụ</span>
                            @endif
                        </td>
                        <td>{{ $booking->appointment_datetime }}</td>
                        <td>
                            <!-- Form cập nhật trạng thái -->
                            <form action="{{ route('admin.updateBooking', $booking->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('PATCH')
                                <select name="status" class="form-select" onchange="this.form.submit()">
                                    <option value="pending" {{ $booking->status === 'pending' ? 'selected' : '' }}>Đang chờ</option>
                                    <option value="confirmed" {{ $booking->status === 'confirmed' ? 'selected' : '' }}>Đã xác nhận</option>
                                    <option value="cancelled" {{ $booking->status === 'cancelled' ? 'selected' : '' }}>Đã hủy</option>
                                </select>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('admin.deleteBooking', $booking->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>

@endsection
