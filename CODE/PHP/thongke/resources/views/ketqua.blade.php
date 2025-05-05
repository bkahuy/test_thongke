<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Kết quả thống kê</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }
        .main-content {
            flex-grow: 1;
            padding: 2rem;
            overflow-y: auto;
        }
    </style>
</head>
<body class="bg-light">

<div class="d-flex min-vh-100">
    <!-- Sidebar -->
    <div class="bg-dark text-white p-4" style="width: 250px;">
        <h4 class="mb-4">Menu</h4>
        <ul class="list-unstyled">
            <li><a href="#" class="text-white text-decoration-none d-block mb-3">Quản trị hệ thống</a></li>
            <li><a href="#" class="text-white text-decoration-none d-block mb-3">Quản lý bán hàng</a></li>
            <li><a href="{{ url('/thong-ke') }}" class="text-white text-decoration-none d-block mb-3">Báo cáo thống kê</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content bg-white">
        <div class="container-fluid h-100 d-flex flex-column">
            <div class="mb-4">
                <h3 class="text-primary">
                    Kết quả thống kê cho thời gian từ ngày:
                    <span class="fw-semibold">
                        {{ \Carbon\Carbon::parse($ngaydau)->format('d/m/Y') }}
                    </span>
                    Đến ngày:
                    <span class="fw-semibold">
                        {{ \Carbon\Carbon::parse($ngaycuoi)->format('d/m/Y') }}
                    </span>
                </h3>
            </div>

            <div class="table-responsive flex-grow-1">
                <table class="table table-bordered table-hover align-middle">
                    <thead class="table-primary text-center text-uppercase small">
                    <tr>
                        <th scope="col">Tên khách hàng</th>
                        <th scope="col">Tên mặt hàng</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Đơn giá</th>
                        <th scope="col">Thành tiền</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($duLieu as $dong)
                        <tr>
                            <td>{{ $dong->ten_khach_hang }}</td>
                            <td>{{ $dong->ten_mat_hang }}</td>
                            <td class="text-end">{{ $dong->so_luong }}</td>
                            <td class="text-end">{{ number_format($dong->gia, 0, ',', '.') }} đ</td>
                            <td class="text-end text-success fw-semibold">{{ number_format($dong->thanh_tien, 0, ',', '.') }} đ</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-4 text-center">
                <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">
                    ← Quay lại
                </a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
