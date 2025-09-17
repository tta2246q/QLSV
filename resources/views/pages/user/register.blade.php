<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng ký</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-5">
        <div class="card shadow-lg rounded">
          <div class="card-body">
            <h3 class="text-center mb-4">Đăng ký</h3>
            <form>
              <div class="mb-3">
                <label for="registerName" class="form-label">Họ tên</label>
                <input type="text" class="form-control" id="registerName" placeholder="Nhập họ tên" required>
              </div>
              <div class="mb-3">
                <label for="registerEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="registerEmail" placeholder="Nhập email" required>
              </div>
              <div class="mb-3">
                <label for="registerPassword" class="form-label">Mật khẩu</label>
                <input type="password" class="form-control" id="registerPassword" placeholder="Nhập mật khẩu" required>
              </div>
              <div class="mb-3">
                <label for="registerConfirm" class="form-label">Nhập lại mật khẩu</label>
                <input type="password" class="form-control" id="registerConfirm" placeholder="Xác nhận mật khẩu" required>
              </div>
              <button type="submit" class="btn btn-success w-100">Đăng ký</button>
            </form>
            <p class="mt-3 text-center">
              Đã có tài khoản? <a href="login.html">Đăng nhập</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
