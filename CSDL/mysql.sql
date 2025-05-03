SELECT 
    khachhangs.ten_khach_hang AS ten_khach_hang,
    mathangs.ten_mat_hang AS ten_mat_hang,
    chi_tiet_don_hangs.so_luong,
    mathangs.gia,
    chi_tiet_don_hangs.so_luong * mathangs.gia AS thanh_tien
FROM 
    donhangs
JOIN 
    khachhangs ON donhangs.khach_hang_id = khachhangs.id
JOIN 
    chi_tiet_don_hangs ON donhangs.id = chi_tiet_don_hangs.don_hang_id
JOIN 
    mathangs ON chi_tiet_don_hangs.mat_hang_id = mathangs.id
WHERE 
    DATE(donhangs.ngay_dat) = '2020-12-12'; -- hoặc thay bằng biến ngày phù hợp
