<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Kết quả thống kê</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-4">

<div class="container">
    <div class="bg-white p-5 rounded-4 shadow-sm">
        <h3 class="mb-4 text-primary">
            Kết quả thống kê cho ngày:
            <span class="fw-semibold">
                {{ \Carbon\Carbon::parse($ngay)->format('d/m/Y') }}
            </span>
        </h3>

        <div class="table-responsive mb-4">
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

        <!-- Nút quay lại -->
        <div class="text-center">
            <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">
                ← Quay lại
            </a>
        </div>
    </div>
</div>

<!-- Bootstrap JS (optional if you need dropdowns, modals, etc.) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
