## 1. Xây dựng module quản lý Gia Phả ##
## (Module Gia Phả trên nền NukeViet) ##
### 1.1.	Tóm tắt ý tưởng: ###
Viết và quản lý Gia phả là nhu cầu của mọi dòng họ. Trong thời đại hiện nay, đưa gia phả dòng họ lên website là nhu cầu rất lớn, tuy nhiên các website như phahe.vn hay vietnamgiapha.com đã vài năm không còn được nâng cấp, việc đáp ứng khá hạn chế do người sử dụng không thể thay đổi cách thức cũng như quy trình viết, phải phụ thuộc một website cụ thể mà không thể quản lý trên website riêng của dòng họ. Module Gia Phả trên nền NukeViet sẽ giúp giải quyết vấn đề này.
### 1.2.	Kỹ năng yêu cầu: ###
  * Ngôn ngữ lập trình: PHP, MySQL
  * Đánh giá độ khó của ý tưởng: "trung bình"
**Ghi chú**: Độ khó trung bình được giả định với một nhóm khoảng 3 SV thành thạo các kỹ năng yêu cầu chắc chắn sẽ hoàn thành dự án trong 3 tháng, không cần làm toàn thời gian.
### 1.3.	Mô tả chi tiết: ###
#### 1.3.1. Tính năng cơ bản ####
> Cho phép người quản trị tạo gia phả.
**1. Tạo gia phả**
  * Nhan đề
  * Ngày tạo.
  * Tác giả (user tạo gia phả)
  * Danh sách ngày giỗ tổ tiên: Ngày, ghi chú.
  * Phả tựa (nguồn gốc xuất xứ của gia tộc, hành trạng của Thuỷ tổ) & Tộc ước (hay còn gọi là điều lệ của dòng họ. Đây là những quy định-quy ước trong tộc họ, đặt ra nhằm ổn định tộc họ, có công thưởng, có tội phạt, tất nhiên là phải phù hợp với luật pháp chung. Với một tộc họ lớn, có thể có nhiều tông nhánh, chi phái. Phần này sẽ ghi những thông tin chi phái, ai là bắt đâu chi, chi hiện ở đâu, nhà thờ chi...; Những thông tin khác về tài sản hương hỏa, bản đồ các khu mộ tiền nhân v.v.)
**2. Quản lý phả đồ (cây phả hệ)**
  * Phần này cho phép thêm hoặc sửa thông tin của một người trên cây phả hệ.
  * Thủy tổ phải bắt đầu bằng 1 người.
  * Để thêm một người vào cây phả hệ, ta chọn nút “thêm vợ/con” cạnh tên người).
  * Đánh số thứ tự tên đời thứ mấy trong dòng họ: Từ thủy tổ được đánh số 1. Các đời sau đánh số thứ tự tăng dần. Anh em được phân biệt thứ tự bằng số sau dấu chấm phân cách đời. Ví dụ: 2.2 là người con thứ 2 thuộc đời thứ 2.
  * Những người vợ được đánh số thứ tự và hiển thị theo tên chồng. Vợ thứ mấy được đánh số trong ngoặc đơn. Ví dụ 2.1(1)
**Thông tin một người bao gồm (tất cả thông tin không bắt buộc):**
  * Giới tính: Nam/Nữ/Chưa biết.
  * Người được chọn (Hiển thị tên và liên kết tới thông tin người được chọn)
  * Quan hệ với người được chọn: Vợ/Con.
  * Tình trạng: Còn sống/ đã mất/ không rõ.
  * Tên húy (Là tên trong khai sinh, tên cúng cơm).
  * Số mã hiệu (Là số mã hiệu trong gia phả, nếu có)
  * Tên tự (Là tên tự gọi)
  * Tên thụy/ thuỵ hiệu  (Là tên thụy phong, truy phong sau khi mất)
  * Tên gọi thường  (Là tên thường gọi)
  * Là con/vợ thứ mấy (Thứ 2, 3 hay cả, hai, ba , tư..)
  * Ngày giờ sinh
  * Ngày giờ mất
  * Hưởng thọ, hưởng dương (Nếu mất dưới 50 tuổi, gọi là hưởng dương)
  * Mộ táng tại
  * Ghi chú: Sự nghiệp, công đức của nguời này. (Nếu là nữ, ghi tên con, cháu ngoại cũng như các ghi chú khác vào đây.)
  * Hình ảnh. (Upload đính kèm ảnh chân dung)
**3. Trình bày gia phả / phả đồ**
  * Các thông tin chung về gia phả.
  * Phả đồ (trình bày dạng cây thư mục đa cấp)
  * Thông tin chi tiết về một người trên cây phả hệ + Quan hệ gần của người đó, bao gồm:
    * Danh sách anh em (nếu có).
    * Danh sách con cái.
    * Danh sách vợ và toàn bộ thông tin của (các) vợ. (Hiển thị trên cùng 1 trang, nếu có)
#### 1.3.2. Tính năng nâng cao ####
(độ khó "tương đối", không bắt buộc)
    * Tạo nhiều gia phả: Cho phép tất cả thành viên được tạo gia phả riêng.
    * Ghép các gia phả: Cho phép người quản trị ghép gia phả bằng cách chọn thủy tổ của gia phả này là con của một người trong gia phả khác.
    * Phân quyền quản lý gia phả: Cho phép người quản trị chọn thành viên quản lý một nhánh gia phả.
### 1.4.	Thông tin khác: ###
    * Nhờ việc sử dụng nhân NukeViet, tất cả các vấn đề về hệ thống vận hành, an ninh bảo mật… đều đã được NukeViet xử lý. Khối lượng code sẽ chỉ tập trung vào việc code tính năng như ý tưởng đề xuất.
    * Ngoài việc module có nhiệm vụ giúp xây dựng và quản lý gia phải của một dòng họ, Module có thể mở rộng chức năng bằng cách cho phép thành viên tạo và quản lý gia phả dòng họ mình (Quy mô website sẽ tương đương Vietnamgiapha.com hoặc phahe.vn, tuy nhiên vì là mã nguồn mở nên khả năng phát triển và nâng cấp sẽ linh hoạt hơn như hiện trạng của 2 website này)
**Các website tham khảo**
  * [Trung tâm Nghiên cứu và Thực hành gia phả TP.Hồ Chí Minh](http://giaphatphcm.com/giapha/)
  * [Gia Phả - Wikipedia.org](http://vi.wikipedia.org/wiki/Gia_ph%E1%BA%A3)
  * Ý tưởng này được Ban Quản Trị NukeViet phân tích dựa trên ý tưởng do thành viên đóng góp theo lời kêu gọi xây dựng ý tưởng cho cuộc thi MHST 2011 trên diễn đàn NukeViet.VN: http://nukeviet.vn/phpbb/viewtopic.php?f=18&t=16601&p=84613#p84889
### 1.5.	Mentor: ###
    * Công ty cổ phần phát triển nguồn mở Việt Nam.
    * Đội ngũ phát triển mã nguồn mở NukeViet.
    * Thí sinh tìm hiểu thông tin về ý tưởng để nhận ý tưởng hoặc nhận làm mentor, co-mentor... xin liên hệ: admin@nukeviet.vn

---

[Quay lại danh sách ý tưởng!](http://code.google.com/p/nuke-viet/wiki/ideasMHST2011)