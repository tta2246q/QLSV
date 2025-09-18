@extends('pages.admin.index')
@section('title-admin', 'Quản lý danh mục')
@section('content-admin')
    <h1 class="mb-4">Danh mục sản phẩm</h1>

    <a href="{{ route('admin.categories.create') }}" class="btn btn-primary mb-4">
        <i class="bi bi-plus-circle"></i> Thêm danh mục
    </a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">tên danh mục</th>
                <th scope="col">Mota</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <th scope="row">{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td>
                        <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-sm btn-warning">
                            <i class="bi bi-pencil-square"></i> Sửa
                        </a>
                        <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Bạn có chắc muốn xóa?')">
                                <i class="bi bi-trash"></i> Xóa
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
