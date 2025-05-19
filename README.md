📅 mod_carlender – Joomla Calendar Module
📝 Giới thiệu
mod_carlender là một module lịch nhẹ và linh hoạt dành cho Joomla, cho phép hiển thị lịch tháng kèm các sự kiện hoặc ghi chú tuỳ chỉnh. Đặc biệt, module hỗ trợ thay đổi múi giờ để đồng bộ ngày/giờ với vị trí người dùng hoặc cấu hình hệ thống.

⚙️ Tính năng nổi bật
📆 Hiển thị lịch tháng theo thời gian thực.

🌐 Tùy chọn múi giờ linh hoạt – Hỗ trợ định dạng múi giờ tùy chỉnh (VD: Asia/Ho_Chi_Minh, UTC, America/New_York).

🗓️ Đánh dấu và mô tả sự kiện – Hiển thị ghi chú cho từng ngày cụ thể.

🎨 Tùy biến giao diện – Chỉnh sửa dễ dàng về màu sắc, kích thước, bố cục.

🌍 Hỗ trợ đa ngôn ngữ – Tuỳ chỉnh tên ngày, thứ và định dạng hiển thị.

🛠️ Tích hợp mượt mà với Joomla 4.x.

📦 Yêu cầu hệ thống
Joomla 4.x

PHP >= 7.4

Trình duyệt hiện đại hỗ trợ CSS Flexbox/Responsive

📥 Hướng dẫn cài đặt
Tải file mod_carlender.zip từ phần Releases.

Truy cập trang quản trị Joomla:

Vào Extensions → Manage → Install

Tải lên file .zip để cài đặt.

Kích hoạt module tại:

Extensions → Modules → Chọn mod_carlender

Cấu hình vị trí hiển thị, múi giờ, và danh sách sự kiện (nếu có).

Lưu và xuất bản module.

🧪 Tùy chỉnh & Sử dụng
Bạn có thể tùy chỉnh dữ liệu và múi giờ trong module:

Sự kiện: Thêm trực tiếp trong mã nguồn (mảng PHP, file JSON), hoặc mở rộng kết nối cơ sở dữ liệu.

Múi giờ: Chỉnh trong file cấu hình (mod_carlender.php, helper.php) hoặc thêm tham số XML để tùy chỉnh trong backend:

php
Copy
Edit
date_default_timezone_set('Asia/Ho_Chi_Minh'); // Hoặc tùy chỉnh theo lựa chọn người dùng
🔖 Ghi chú
Phiên bản hiện tại chưa hỗ trợ backend nâng cao cho sự kiện/múi giờ — có thể mở rộng nếu cần.

Mọi thay đổi về múi giờ sẽ ảnh hưởng đến cách hiển thị ngày, đặc biệt với các sự kiện theo giờ quốc tế.

📄 Giấy phép
Phát hành theo GPL-3.0 – Cho phép tự do sử dụng, chỉnh sửa và phân phối theo giấy phép mã nguồn mở.

👨‍💻 Tác giả & Đóng góp
🧑‍💻 Tác giả: HuynhSang-IT

💬 Đóng góp hoặc báo lỗi: tạo Pull Request hoặc mở Issue.
