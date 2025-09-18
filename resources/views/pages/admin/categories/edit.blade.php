@extends('pages.admin.index')
@section('title-admin', 'Quản lý danh mục')
@section('content-admin')
    <h1 class="mb-4">Chỉnh sửa danh mục sản phẩm</h1>
    <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Tên danh mục</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Mô tả</label>
            <textarea class="form-control" id="description" name="description" rows="3"
                required>{{ $category->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật danh mục</button>
    </form>
@endsection
