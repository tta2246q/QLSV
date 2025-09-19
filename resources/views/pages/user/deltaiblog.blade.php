@extends('index')
@section('title-user', 'Blog deltai')
@section('content-user')

    <div class="container py-5" style="background: #f8f9fa; min-height: 100vh;">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                    <div class="card-body">
                        <h2 class="card-title text-primary fw-bold mb-3">
                        {{ $blog->title }}
                    </h2>
                    </div>
                    <!-- Ảnh bài viết -->
                    <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="card-img-top"
                        style="height: 350px; object-fit: cover;">

                    <div class="card-body" style="background: #ffffff;">
                        <!-- Tiêu đề -->


                        <!-- Thông tin thêm -->
                        <p class="text-muted mb-4" style="font-size: 0.9rem;">
                            Đăng ngày: {{ $blog->created_at->format('d/m/Y') }}
                        </p>

                        <!-- Nội dung -->
                        <div class="card-text" style="line-height: 1.8; color: #333;">
                            {!! nl2br(e($blog->body)) !!}
                        </div>

                        <!-- Quay lại -->
                        <a href="{{ route('blog') }}" class="btn btn-outline-secondary mt-4 rounded-pill">
                            ← Quay lại danh sách
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
