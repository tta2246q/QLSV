@extends('pages.admin.index')
@section('title-admin', 'Product Management')
@section('content-admin')

    <section>
        <h1 class="mb-4">Chỉnh sửa sản phẩm</h1>
        <form action="{{ route('admin.product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Tên sản phẩm</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Giá</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}" required>
            </div>

            <div class="mb-3">
                <label for="category" class="form-label">Danh mục</label>
                <input type="text" class="form-control" id="category" name="category" value="{{ $product->category }}" required>
            </div>

            <div class="mb-3">
                <label for="brand" class="form-label">Thương hiệu</label>
                <input type="text" class="form-control" id="brand" name="brand" value="{{ $product->brand }}" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Mô tả</label>
                <textarea class="form-control" id="description" name="description">{{ $product->description }}</textarea>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Hình ảnh</label>
                @if ($product->image)
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="100">
                    </div>
                @endif
                <input type="file" class="form-control" id="image" name="image">
            </div>

            <button type="submit" class="btn btn-primary">Cập nhật sản phẩm</button>
        </form>
    </section>

@endsection
