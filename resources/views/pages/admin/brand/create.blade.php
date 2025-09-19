@extends('pages.admin.index')

@section('title-admin', 'Quản lý thương hiệu')

@section('content-admin')
    <h1 class="mb-4">Thêm thương hiệu mới</h1>

    <form action="{{ route('admin.brands.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Tên thương hiệu</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Hình ảnh</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Mô tả</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Thêm thương hiệu</button>
    </form>
@endsection
