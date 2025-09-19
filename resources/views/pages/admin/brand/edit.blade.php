@extends('pages.admin.index')

@section('title-admin', 'Chỉnh sửa thương hiệu')

@section('content-admin')
    <h1 class="mb-4 text-center">Chỉnh sửa thương hiệu</h1>

    <form action="{{ route('admin.brands.update', $brand->id) }}" method="POST" enctype="multipart/form-data" class="mx-auto" style="max-width: 600px;">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Tên thương hiệu</label>
            <input type="text" class="form-control" id="name" name="name"
                   value="{{ old('name', $brand->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Hình ảnh</label>
            @if ($brand->image)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $brand->image) }}" alt="{{ $brand->name }}" width="120" class="rounded shadow">
                </div>
            @endif
            <input type="file" class="form-control" id="image" name="image">
            <small class="text-muted">Để trống nếu không muốn thay đổi ảnh</small>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Mô tả</label>
            <textarea class="form-control" id="description" name="description" rows="4">{{ old('description', $brand->description) }}</textarea>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-success">Cập nhật thương hiệu</button>
            <a href="{{ route('admin.brands.index') }}" class="btn btn-secondary">Quay lại</a>
        </div>
    </form>
@endsection
