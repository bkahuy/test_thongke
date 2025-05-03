<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thống Kê</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center min-vh-100">

<div class="bg-white p-4 p-md-5 rounded-4 shadow w-100" style="max-width: 400px;">
    <h1 class="text-center text-primary mb-4 fs-4 fw-bold">Thống Kê Theo Ngày</h1>

    <form method="POST" action="{{ url('/thong-ke') }}">
        @csrf
        <div class="mb-3">
            <label for="ngay" class="form-label">Chọn ngày</label>
            <input
                type="date"
                name="ngay"
                id="ngay"
                required
                class="form-control"
            >
        </div>

        <button type="submit" class="btn btn-primary w-100">
            Thống kê
        </button>
    </form>
</div>

<!-- Bootstrap JS (nếu cần) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
