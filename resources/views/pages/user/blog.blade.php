@extends('index')
@section('title-user', 'Blog')
@section('content-user')

    <div class="container py-5" style="background: #f8f9fa;">
    <h2 class="mb-4 text-center text-primary fw-bold">Bài viết mới nhất</h2>

    <div class="row g-4">
        @forelse($blogs as $blog)
            <div class="col-md-4">
                <div class="card h-100 shadow-lg border-0" style="border-radius: 15px; overflow: hidden;">
                    <img src="{{ asset('storage/' . $blog->image) }}" 
                         class="card-img-top" 
                         alt="{{ $blog->title }}"
                         style="height: 200px; object-fit: cover;">

                    <div class="card-body d-flex flex-column" style="background: #ffffff;">
                        <h5 class="card-title text-dark">{{ $blog->title }}</h5>
                        <p class="card-text text-muted" 
                           style="max-height: 4.5rem; overflow: hidden;">
                            {{ $blog->body }}
                        </p>
                        <a href="{{ route('blogs.show', $blog->id) }}" 
                           class="btn btn-outline-primary mt-auto rounded-pill">
                           Xem chi tiết
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center text-muted">Không có bài viết nào.</p>
        @endforelse
    </div>
</div>
@endsection
