@extends('pages.admin.index')
@section('title-admin','Dashboard')
@section('content-admin')
<section>
     <div class="content">
    <h2 class="mb-4">Bảng điều khiển</h2>
    <div class="row g-4">
      <!-- Tổng người dùng -->
      <div class="col-md-4">
        <div class="card text-white bg-primary shadow-lg">
          <div class="card-body">
            <h5 class="card-title">👥 Tổng người dùng</h5>
            <p class="card-text fs-4">1200</p>
          </div>
        </div>
      </div>
      <!-- Tổng sản phẩm -->
      <div class="col-md-4">
        <div class="card text-white bg-warning shadow-lg">
          <div class="card-body">
            <h5 class="card-title">📦 Tổng sản phẩm</h5>
            <p class="card-text fs-4">350</p>
          </div>
        </div>
      </div>
      <!-- Tổng danh mục -->
      <div class="col-md-4">
        <div class="card text-white bg-danger shadow-lg">
          <div class="card-body">
            <h5 class="card-title">📂 Tổng danh mục</h5>
            <p class="card-text fs-4">25</p>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

@endsection
