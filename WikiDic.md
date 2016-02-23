## 1. Xây dựng hệ thống từ điển phân tán trong cộng đồng NukeViet ##
## (Module WikiDic) ##
### 1.1.	Tóm tắt ý tưởng: ###
> Các website giáo dục, đặc biệt là các chuyên ngành kỹ thuật thường cần nhu cầu xây dựng một từ điển riêng để sử dụng cho website của mình. Module mang tính cộng đồng nhờ việc đóng góp từ thành viên và có thể chia sẻ dữ liệu giữa các website cùng sử dụng module.
### 1.2.	Kỹ năng yêu cầu: ###
  * Ngôn ngữ lập trình: PHP, MySQL, xHTML, CSS…
  * Đánh giá độ khó của ý tưởng: "trung bình" - "tương đối" (tùy chọn của đội thi, xem mô tả chi tiết).
**Ghi chú**: Độ khó trung bình được giả định với một nhóm khoảng 3 SV thành thạo các kỹ năng yêu cầu chắc chắn sẽ hoàn thành dự án trong 3 tháng, không cần làm toàn thời gian.
### 1.3.	Mô tả chi tiết: ###
  * Tự do và chia sẻ là tính chất đặc thù của mã nguồn mở, Module WikiDic trên nền NukeViet sẽ phát huy tính chất đặc thù đó một cách hoàn hảo nhờ cơ chế sử dụng tuần hoàn “đóng góp phân tán - chia sẻ tập trung”. Dữ liệu từ điển được đóng góp và hoàn thiện nhờ cộng đồng và cũng trả về cộng đồng tất cả những gì mà cộng đồng đóng góp.
  * Bằng cách thiết lập một website (site chủ) để đóng vai trò tiếp nhận và phân phối dữ liệu giữa các website cùng sử dụng module (site khách), thành viên của bất kỳ website nào cũng có thể tự đóng góp cho từ điển trên website của mình. Dữ liệu do thành viên đóng góp lên site khách (nếu được liên kết đến site chủ) sẽ trả về site chủ để hoàn thiện dữ liệu trên site chủ, dữ liệu hoàn thiện trên site chủ sẽ được phân phối ngược lại cho site khách khác. Quá trình đó sẽ liên tục được tiếp diễn dưới sự đóng góp của cộng đồng và ta có một mạng xã hội người sử dụng đóng góp cho từ điển.
**Các chức năng cơ bản (độ khó trung bình):**
    * Chức năng tạo và quản lý từ điển.
    * Chức năng tạo mới và quản lý mục từ.
    * Chức năng cho phép thành viên tham gia sửa mục từ, đánh giá mục từ (thảo luận).
    * Khi mục từ bị sửa, ghi nhận và theo dõi các phiên bản sửa đổi của mục từ để có thể đối chiếu hoặc phục hồi mục từ bị sửa.
    * Chức năng kiểm duyệt mục từ bị thay đổi.
    * Chức năng tra cứu mục từ.
**Chức năng nâng cao nhằm xử lý việc liên kết site chủ và site khách (độ khó tương đối - không bắt buộc):**
    * Quản lý các website cùng sử dụng từ điển và có liên kết (xem có chấp nhận tiếp nhận dữ liệu hay không).
    * Nhập mục từ từ website liên kết.
    * Xuất dữ liệu liên kết dưới dạng API.
    * Cấu hình khác: có hay không việc tiếp nhận thêm dữ liệu từ site chủ; tần suất kết nối tới site chủ để xuất và nhận dữ liệu; loại dữ liệu tiếp nhận (Từ điển; mục từ; thảo luận của mục từ…)
### 1.4.	Thông tin khác: ###
> Nhờ việc sử dụng nhân NukeViet, tất cả các vấn đề về hệ thống vận hành, an ninh bảo mật… đều đã được NukeViet xử lý. Khối lượng code sẽ chỉ tập trung vào việc code tính năng như ý tưởng đề xuất.

> NukeViet 3 hiện có hơn 1 ngàn website sử dụng, các website trường học có xu thế sử dụng NukeViet nhiều, do đó có cơ hội xây dựng một mạng xã hội với hàng chục triệu thành viên là học sinh, sinh viên, tri thức trẻ tham gia đóng góp cho hệ thống dữ liệu này.

> Module là mô hình của một Wiki mạng xã hội với chức năng cụ thể là xây dựng từ điển. Khác với Wiki là làm việc tập trung tại một site, nhờ việc tương tác phân tán và đóng góp dễ dàng ngay trên nhiều website, lượng người tham gia sẽ tăng lên đáng kể do đó tăng cường sự đóng góp của cộng đồng. Đặc biệt site chủ đóng vai trò trung gian có khả năng tập hợp và cung cấp dữ liệu nguồn cho các site mới sẽ đem lại giá trị xã hội to lớn (như mô hình của Wikipedia hiện nay)
### 1.5.	Người hướng dẫn: ###
Mentor:
    * Phùng Công Định (Học viên cao học trường Đại học Công Nghệ - Đại học Quốc Gia HN, thành viên cộng đồng NukeViet)
    * Email: dinhpc.it@gmail.com
Co-mentor:
    * Đội ngũ phát triển mã nguồn mở NukeViet, cộng đồng http://nukeviet.vn/phpbb/index.php
    * Công ty cổ phần phát triển nguồn mở Việt Nam.
VIET NAM OPEN SOURCE DEVELOPMENT JOINT STOCK COMPANY (VINADES.,JSC)
  * Add: 67B (lane 35), Khuong Ha street, Khuong Dinh, Thanh Xuan, Hanoi, Vietnam.
  * Tel: (+84) (04) 85 87 2007
  * Fax: (+84) (04) 35 500 914
  * Emai: contact(at)vinades.vn
  * Website: http://www.vinades.vn

---

[Quay lại danh sách ý tưởng!](http://code.google.com/p/nuke-viet/wiki/ideasMHST2011)