using System;
using System.Data;
using System.Data.SqlClient;
using System.Windows.Forms;

namespace QuanLyThongKe
{
    public partial class fQlythongke : Form
    {
        string constr = "Data Source=DESKTOP-73RUA09;Initial Catalog=QuanLyBanHang;Persist Security Info=True;User ID=sa;Password=1;TrustServerCertificate=True";
        SqlConnection conn = null;
        SqlCommand cmd = null;
        SqlDataAdapter adapter = new SqlDataAdapter();
        DataTable dt = new DataTable();

        public fQlythongke()
        {
            InitializeComponent();
        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void fQlythongke_Load(object sender, EventArgs e)
        {
            conn = new SqlConnection(constr);
            conn.Open();
            loadBang();
        }
        public void loadBang()
        {
            cmd = conn.CreateCommand();
            cmd.CommandText = "SELECT  kh.TenKH as 'Tên khách hàng', mh.TenHang as 'Tên mặt hàng', ct.SoLuong as 'Số lượng', mh.DonGia as 'Đơn giá', (ct.SoLuong * mh.DonGia) AS ThanhTien FROM DonHang dh JOIN KhachHang kh ON dh.MaKH = kh.MaKH JOIN ChiTietDonHang ct ON dh.MaDH = ct.MaDH JOIN MatHang mh ON ct.MaHang = mh.MaHang ORDER BY dh.NgayLap, kh.TenKH;";
            adapter.SelectCommand = cmd;
            dt.Clear();
            adapter.Fill(dt);
            dgvThongKe.DataSource = dt;
        }

        private void btnThongKe_Click(object sender, EventArgs e)
        {
            string date = dtpChonngay.Value.ToString("yyyy-MM-dd");
            cmd = conn.CreateCommand();
            cmd.CommandText = "SELECT kh.TenKH as 'Tên khách hàng', mh.TenHang as 'Tên mặt hàng', ct.SoLuong as 'Số lượng', mh.DonGia as 'Đơn giá', (ct.SoLuong * mh.DonGia) AS ThanhTien FROM DonHang dh JOIN KhachHang kh ON dh.MaKH = kh.MaKH JOIN ChiTietDonHang ct ON dh.MaDH = ct.MaDH JOIN MatHang mh ON ct.MaHang = mh.MaHang WHERE dh.NgayLap = '" + date + "' ORDER BY kh.TenKH;";
            adapter.SelectCommand = cmd;
            dt.Clear();
            adapter.Fill(dt);
            dgvThongKe.DataSource = dt;
        }
    }
}
