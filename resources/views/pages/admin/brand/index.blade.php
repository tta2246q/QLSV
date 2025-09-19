@extends('pages.admin.index')
@section('title-admin', 'Quản lý danh mục')
@section('content-admin')
    <h1 class="mb-4">Danh mục sản phẩm</h1>

    <a href="{{ route('admin.brands.create') }}" class="btn btn-primary mb-4">
        <i class="bi bi-plus-circle"></i> Thêm thương hiệu
    </a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">tên thuong hieu</th>
                <th>hình ảnh</th>
                <th scope="col">Mota</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($brands as $brand)
                <tr>
                    <th scope="row">{{ $brand->id }}</th>
                    <td>{{ $brand->name }}</td>
                    <td><img src="{{ asset('storage/' . $brand->image) }}" alt="{{ $brand->name }}" width="50"></td>
                    <td>{{ $brand->description }}</td>
                    <td>
                        <a href="{{ route('admin.brands.edit', $brand->id) }}" class="btn btn-sm btn-warning">
                            <i class="bi bi-pencil-square"></i> Sửa
                        </a>
                        <form action="{{ route('admin.brands.destroy', $brand->id) }}" method="POST" style="display:inline-block">
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
