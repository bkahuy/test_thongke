<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thống Kê</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="d-flex min-vh-100">

    <div class="bg-dark text-white p-4" style="width: 250px;">
        <h4 class="mb-4">Menu</h4>
        <ul class="list-unstyled">
            <li><a href="#" class="text-white text-decoration-none d-block mb-3">Quản trị hệ thống</a></li>
            <li><a href="#" class="text-white text-decoration-none d-block mb-3">Quản lý bán hàng</a></li>
            <li><a href="{{ url('/thong-ke') }}" class="text-white text-decoration-none d-block mb-3">Báo cáo thống kê</a></li>
        </ul>
    </div>


    <div class="flex-grow-1 d-flex align-items-center justify-content-center">
        <div class="bg-white p-4 p-md-5 rounded-4 shadow" style="max-width: 400px; width: 100%;">
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
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
