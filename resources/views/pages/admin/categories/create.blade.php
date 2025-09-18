@extends('pages.admin.index')
@section('title-admin', 'Quản lý danh mục')
@section('content-admin')
    <h1 class="mb-4">Thêm danh mục mới</h1>
    <form action="{{ route('admin.categories.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Tên danh mục</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Mô tả</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Thêm danh mục</button>
    </form>
@endsection
