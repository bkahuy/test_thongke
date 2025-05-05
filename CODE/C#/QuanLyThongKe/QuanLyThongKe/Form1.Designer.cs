namespace QuanLyThongKe
{
    partial class fQlythongke
    {
        /// <summary>
        ///  Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        ///  Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        ///  Required method for Designer support - do not modify
        ///  the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            panel1 = new Panel();
            btnThongKe = new Button();
            lbChonngay = new Label();
            dtpChonngaydau = new DateTimePicker();
            dgvThongKe = new DataGridView();
            label1 = new Label();
            dtpChonngaycuoi = new DateTimePicker();
            panel1.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)dgvThongKe).BeginInit();
            SuspendLayout();
            // 
            // panel1
            // 
            panel1.AutoScroll = true;
            panel1.Controls.Add(dtpChonngaycuoi);
            panel1.Controls.Add(label1);
            panel1.Controls.Add(btnThongKe);
            panel1.Controls.Add(lbChonngay);
            panel1.Controls.Add(dtpChonngaydau);
            panel1.Location = new Point(12, 12);
            panel1.Name = "panel1";
            panel1.Size = new Size(891, 30);
            panel1.TabIndex = 0;
            // 
            // btnThongKe
            // 
            btnThongKe.Location = new Point(357, 3);
            btnThongKe.Name = "btnThongKe";
            btnThongKe.Size = new Size(108, 23);
            btnThongKe.TabIndex = 2;
            btnThongKe.Text = "Thống kê";
            btnThongKe.UseVisualStyleBackColor = true;
            btnThongKe.Click += btnThongKe_Click;
            // 
            // lbChonngay
            // 
            lbChonngay.AutoSize = true;
            lbChonngay.Font = new Font("Segoe UI", 9.75F, FontStyle.Regular, GraphicsUnit.Point, 0);
            lbChonngay.Location = new Point(29, 5);
            lbChonngay.Name = "lbChonngay";
            lbChonngay.Size = new Size(99, 17);
            lbChonngay.TabIndex = 1;
            lbChonngay.Text = "Chọn ngày đầu:";
            lbChonngay.Click += label1_Click;
            // 
            // dtpChonngaydau
            // 
            dtpChonngaydau.Location = new Point(137, 3);
            dtpChonngaydau.Name = "dtpChonngaydau";
            dtpChonngaydau.Size = new Size(200, 23);
            dtpChonngaydau.TabIndex = 0;
            // 
            // dgvThongKe
            // 
            dgvThongKe.AllowUserToAddRows = false;
            dgvThongKe.AllowUserToDeleteRows = false;
            dgvThongKe.Anchor = AnchorStyles.Top | AnchorStyles.Bottom | AnchorStyles.Left | AnchorStyles.Right;
            dgvThongKe.AutoSizeColumnsMode = DataGridViewAutoSizeColumnsMode.Fill;
            dgvThongKe.BackgroundColor = SystemColors.Control;
            dgvThongKe.ColumnHeadersHeightSizeMode = DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            dgvThongKe.Enabled = false;
            dgvThongKe.GridColor = SystemColors.ScrollBar;
            dgvThongKe.Location = new Point(12, 48);
            dgvThongKe.Name = "dgvThongKe";
            dgvThongKe.ReadOnly = true;
            dgvThongKe.Size = new Size(891, 478);
            dgvThongKe.TabIndex = 1;
            // 
            // label1
            // 
            label1.AutoSize = true;
            label1.Font = new Font("Segoe UI", 9.75F, FontStyle.Regular, GraphicsUnit.Point, 0);
            label1.Location = new Point(485, 6);
            label1.Name = "label1";
            label1.Size = new Size(101, 17);
            label1.TabIndex = 2;
            label1.Text = "Chọn ngày cuối:";
            // 
            // dtpChonngaycuoi
            // 
            dtpChonngaycuoi.Location = new Point(592, 3);
            dtpChonngaycuoi.Name = "dtpChonngaycuoi";
            dtpChonngaycuoi.Size = new Size(200, 23);
            dtpChonngaycuoi.TabIndex = 2;
            // 
            // fQlythongke
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            AutoScroll = true;
            ClientSize = new Size(915, 538);
            Controls.Add(dgvThongKe);
            Controls.Add(panel1);
            Name = "fQlythongke";
            StartPosition = FormStartPosition.CenterScreen;
            Text = "Quản Lý Thống Kê";
            Load += fQlythongke_Load;
            panel1.ResumeLayout(false);
            panel1.PerformLayout();
            ((System.ComponentModel.ISupportInitialize)dgvThongKe).EndInit();
            ResumeLayout(false);
        }

        #endregion

        private Panel panel1;
        private Label lbChonngay;
        private DateTimePicker dtpChonngaydau;
        private DataGridView dgvThongKe;
        private Button btnThongKe;
        private Label label1;
        private DateTimePicker dtpChonngaycuoi;
    }
}
