-- Tạo Database
CREATE DATABASE QuanLyBanHang;
USE QuanLyBanHang;

-- Bảng Loại Mặt Hàng
CREATE TABLE LoaiMatHang (
    MaLoai INT PRIMARY KEY AUTO_INCREMENT,
    TenLoai VARCHAR(100)
);

-- Bảng Mặt Hàng
CREATE TABLE MatHang (
    MaHang INT PRIMARY KEY AUTO_INCREMENT,
    TenHang VARCHAR(100),
    DonGia FLOAT,
    MaLoai INT,
    FOREIGN KEY (MaLoai) REFERENCES LoaiMatHang(MaLoai)
);

-- Bảng Khách Hàng
CREATE TABLE KhachHang (
    MaKH INT PRIMARY KEY AUTO_INCREMENT,
    TenKH VARCHAR(100),
    DienThoai VARCHAR(20)
);

-- Bảng Đơn Hàng
CREATE TABLE DonHang (
    MaDH INT PRIMARY KEY AUTO_INCREMENT,
    NgayLap DATE,
    MaKH INT,
    FOREIGN KEY (MaKH) REFERENCES KhachHang(MaKH)
);

-- Bảng Chi Tiết Đơn Hàng
CREATE TABLE ChiTietDonHang (
    MaDH INT,
    MaHang INT,
    SoLuong INT,
    PRIMARY KEY (MaDH, MaHang),
    FOREIGN KEY (MaDH) REFERENCES DonHang(MaDH),
    FOREIGN KEY (MaHang) REFERENCES MatHang(MaHang)
);

-- Dữ liệu mẫu

-- Loại mặt hàng
INSERT INTO LoaiMatHang (TenLoai) VALUES 
('Đồ uống'), 
('Đồ ăn'), 
('Đồ gia dụng');

-- Mặt hàng
INSERT INTO MatHang (TenHang, DonGia, MaLoai) VALUES 
('Cà phê', 20000, 1),
('Trà sữa', 25000, 1),
('Bánh mì', 10000, 2),
('Nồi cơm điện', 2500000, 3);

-- Khách hàng
INSERT INTO KhachHang (TenKH, DienThoai) VALUES 
('Nguyễn Văn Đạt', '0123456789'),
('Đoàn Xuân Nhi', '0987654321'),
('Bùi Khắc Huy', '0837607568');

-- Đơn hàng
INSERT INTO DonHang (NgayLap, MaKH) VALUES 
('2023-12-11', 2),
('2024-04-01', 1), 
('2024-04-15', 2),
('2024-04-20', 1),
('2024-10-27', 2),
('2024-12-31', 3);

-- Chi tiết đơn hàng
INSERT INTO ChiTietDonHang (MaDH, MaHang, SoLuong) VALUES 
(1, 1, 2),
(1, 2, 3),
(2, 4, 1),
(3, 3, 5),
(3, 1, 1),
(3, 2, 1),
(4, 2, 5),
(5, 4, 2),
(5, 3, 5),
(6, 4, 3);

-- Truy vấn 1: Danh sách đơn hàng chi tiết
SELECT 
    dh.NgayLap,
    kh.TenKH,
    mh.TenHang,
    ct.SoLuong,
    mh.DonGia,
    (ct.SoLuong * mh.DonGia) AS ThanhTien
FROM DonHang dh
JOIN KhachHang kh ON dh.MaKH = kh.MaKH
JOIN ChiTietDonHang ct ON dh.MaDH = ct.MaDH
JOIN MatHang mh ON ct.MaHang = mh.MaHang
ORDER BY dh.NgayLap, kh.TenKH;

-- Truy vấn 2: Đơn hàng ngày 2023-12-11
SELECT 
    kh.TenKH AS 'Tên khách hàng', 
    mh.TenHang AS 'Tên mặt hàng', 
    ct.SoLuong AS 'Số lượng', 
    mh.DonGia AS 'Đơn giá', 
    (ct.SoLuong * mh.DonGia) AS ThanhTien 
FROM DonHang dh 
JOIN KhachHang kh ON dh.MaKH = kh.MaKH 
JOIN ChiTietDonHang ct ON dh.MaDH = ct.MaDH 
JOIN MatHang mh ON ct.MaHang = mh.MaHang
WHERE dh.NgayLap = '2024-12-31' 
ORDER BY kh.TenKH;
