## 2. Xây dựng chức năng kiểm tra chính tả trên NukeViet ##
## (NukeVietSpell) ##
### 2.1.	Tóm tắt ý tưởng: ###
NukeViet 3 được sử dụng chủ yếu làm website tin tức, do đó chức năng kiểm tra chính tả vô cùng quan trọng, với NukeVietSpell, website sẽ hạn chế được lỗi chính tả, bộ mặt website các trường học và doanh nghiệp đang sử dụng NukeViet sẽ trở lên "đẹp" hơn trong mắt khách truy cập.
### 2.2.	Kỹ năng yêu cầu: ###
  * PHP, MySQL, JavaScript…
  * Đánh giá độ khó của ý tưởng: "trung bình" đến "khó".

**Ghi chú**: Độ khó trung bình được giả định với một nhóm khoảng 3 SV thành thạo các kỹ năng yêu cầu chắc chắn sẽ hoàn thành dự án trong 3 tháng, không cần làm toàn thời gian.
### 2.3.	Mô tả chi tiết: ###
  * NukeViet 3 là một hệ quản trị nội dung nguồn mở (Opensource CMS) tương tác trên nền web thông qua trình duyệt. NukeViet hiện đang sử dụng CKeditor để làm trình soạn thảo và MUDIM làm bộ gõ tích hợp, tuy nhiên chưa có một chương trình kiểm tra chính tả nào.
  * Hiện tại nhân hệ thống NukeViet có tích hợp sẵn giải pháp so sánh từ khóa để lọc các từ tiếng Việt (phụ vụ cho việc tạo từ khóa tự động cho bài viết). Có thể sử dụng cơ chế này cùng với một từ điển các từ đúng và 1 từ điển các từ sai để kiểm tra các lỗi chính tả thường gặp, các lỗi trình bày... Cao cấp hơn là có thể kiểm tra chính tả ngay khi gõ, đề xuất từ gợi ý cho người biên tập, biên soạn, định nghĩa và bổ sung các từ điển từ ngay trên nền web. Cụ thể các công việc như sau:
**Nghiên cứu và xử lý chính tả:**
  * Lập thư viện (danh sách) từ đúng, từ sai (các lỗi chính tả thường gặp, ví dụ "bổ sung" sai thành "bổ xung"...)
  * Nghiên cứu quy tắc chính tả tiếng Việt để đưa ra các đề xuất lập trình xử lý kiểu khác.
**Lập trình chức năng cơ bản:**
  * Chức năng kiểm tra, hiển thị và đối chiếu chính tả trên văn bản đang soạn thảo.
**Lập trình chức năng nâng cao:**
  * Chức năng tạo mới và quản lý danh sách từ, ghi ra tệp phục vụ việc đối chiếu văn bản.
### 2.4.	Thông tin khác: ###
  * **Về NukeViet**: Mã nguồn mở NukeViet 3 đang vận hành khoảng 1 ngàn website, nếu tính trung bình như website của chính NukeViet là NukeViet.VN mỗi ngày có khoảng 2 ngàn lượt truy cập, thì số lượt truy cập là 2 triệu lượt. Giả sử mỗi lượt truy cập chỉ đọc 1 bài viết và NukeVietSpell giúp mỗi bài viết bớt đi một lỗi chính tả, như vậy mỗi ngày NukeVietSpell sẽ giúp 2 triệu lượt đọc bớt tức mắt vì lỗi chính tả. Như vậy với tính năng này sẽ giúp ích rất nhiều cho người biên tập nhằm nhanh chóng kiểm tra lỗi thường gặp.
  * **Về độ khó của ý tưởng**: NukeVietSpell nếu viết đơn giản thì không yêu cầu cầu kỳ (một lập trình viên biết PHP, MySQL, JavaScript, có kiến thức về cấu trúc NukeViet có thể làm trong 1 tuần), tuy nhiên nếu nghiên cứu sâu, lập trình các chức năng nâng cao thì sẽ đòi hỏi một nhóm mạnh, làm việc và nghiên cứu chuyên sâu vì ngoài việc xử lý thuật toán để kiểm tra chính tả thì bản thân chính tả tiếng Việt cũng đã là một lĩnh vực có thể đào sâu nghiên cứu để làm thành một công trình khoa học rồi. Do đó, với ý tưởng này tùy mức độ đáp ứng mà sinh viên có thể lựa chọn mức độ triển khai phù hợp.
### 1.5.	Người hướng dẫn: ###
Mentor:
  * Họ và tên: Vũ Văn Thảo
  * Chức vụ: Lập trình viên chính - Công ty cổ phần phát triển nguồn mở Việt Nam.
  * Email: thao@vinades.vn
Co-mentor:
  * Đội ngũ phát triển mã nguồn mở NukeViet, cộng đồng http://nukeviet.vn/phpbb/index.php
  * Công ty cổ phần phát triển nguồn mở Việt Nam.
VIET NAM OPEN SOURCE DEVELOPMENT JOINT STOCK COMPANY (VINADES.,JSC)
  * Add: 67B (lane 35), Khuong Ha street, Khuong Dinh, Thanh Xuan, Hanoi, Vietnam.
  * **Tel: (+84) (04) 85 87 2007
  *** Fax: (+84) (04) 35 500 914
  * **Emai: contact(at)vinades.vn
  *** Website: http://www.vinades.vn

---

[Quay lại danh sách ý tưởng!](http://code.google.com/p/nuke-viet/wiki/ideasMHST2011)