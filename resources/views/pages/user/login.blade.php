<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng nhập</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-5">
        <div class="card shadow-lg rounded">
          <div class="card-body">
            <h3 class="text-center mb-4">Đăng nhập</h3>
            <form>
              <div class="mb-3">
                <label for="loginEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="loginEmail" placeholder="Nhập email" required>
              </div>
              <div class="mb-3">
                <label for="loginPassword" class="form-label">Mật khẩu</label>
                <input type="password" class="form-control" id="loginPassword" placeholder="Nhập mật khẩu" required>
              </div>
              <button type="submit" class="btn btn-primary w-100">Đăng nhập</button>
            </form>
            <p class="mt-3 text-center">
              Chưa có tài khoản? <a href="register.html">Đăng ký</a>
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
