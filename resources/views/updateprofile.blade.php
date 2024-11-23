@extends('layout')
@section('titlepage', 'Control Pannel')
@section('content')
<div class="cartPage">
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <h2>Sửa người dùng</h2>

                <form class="form-container" action="{{ route('update_profile', $profile->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label" for="name">Tên </label>
                        <input class="form-control" type="text" id="name" name="name" value="{{ $profile->name }}"
                            required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="phone">Số điện thoại </label>
                        <input class="form-control" type="number" id="phone" name="phone" value="{{ $profile->phone }}"
                            required>

                    </div>
                    <div class="mb-3">
                            <label class="form-label" for="image">Ảnh đại diện </label>
                            <input class="form-control" type="file" id="image" name="image">
                            <small class="form-text text-muted">Nếu không thay đổi, hãy để trống.</small>
                        </div>

                    <button class="btn btn-primary" type="submit">Sửa</button>
                </form>
            </div>
            <div class="col-lg-2"></div>


        </div>
    </div>

</main>
</div>
@endsection