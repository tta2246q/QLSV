<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light d-flex align-items-center" style="height: 100vh;">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-lg rounded">
                <div class="card-body">
                    <h3 class="text-center mb-4">Đăng ký</h3>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Họ tên</label>
                            <input name="name" type="text" class="form-control" id="name" placeholder="Nhập họ tên" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="Nhập email" required>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Số điện thoại</label>
                            <input name="phone" type="tel" class="form-control" id="phone" placeholder="Nhập số điện thoại">
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Địa chỉ</label>
                            <input name="address" type="text" class="form-control" id="address" placeholder="Nhập địa chỉ">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Mật khẩu</label>
                            <input name="password" type="password" class="form-control" id="password" placeholder="Nhập mật khẩu" required>
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Nhập lại mật khẩu</label>
                            <input name="password_confirmation" type="password" class="form-control" id="password_confirmation" placeholder="Xác nhận mật khẩu" required>
                        </div>

                        <button type="submit" class="btn btn-success w-100">Đăng ký</button>
                    </form>

                    <p class="mt-3 text-center">
                        Đã có tài khoản? <a href="{{ route('login') }}">Đăng nhập</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
