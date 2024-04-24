
# Mommy

Web bán hàng với các sản phẩm là workbook và các mẫu thẻ dạng pdf có thể download về máy thông qua email. Web song ngữ (Anh, Việt)

Tham khảo : https://www.myteachingstation.com/


## Khách hàng
#### Phân loại sản phẩm
Khách hàng vào trang xem danh sách các sản phẩm theo bộ lọc là các category, sub-category được mô tả ở tài liệu. Sản phẩm có 2 loại
- workbook: sản phẩm được đầu tư, có giá cao nhất, nằm trong tab nổi bật nhất. Có workbook mất tiền, có loại free. Các workbook đều sample tương ứng với loại đen trắng hoặc có màu.
- pdf: thường là các thẻ lẻ nằm trong các tab thuộc category tương ứng. Có thẻ mất tiền, có thẻ free, và 1 loại thẻ cho phép download khi đã mua 1 workbook có liên quan.

#### Profile cá nhân
- Profile khách hàng lưu đủ thông tin: name, email, subject_prefer (math, reading ...), role (teacher, worker ...), grade (cấp 1,2,3 vì có lọc theo grade), workbook_prefer (đen trắng hay có màu), gender (nam/nữ)
- Lịch sử đặt hàng: các đơn hàng đã đặt, chưa nhận (mua r chưa download)
- Lịch sử mua hàng: các đơn hàng đã nhận (đã download)
- Thay đổi password

#### Cách thức mua hàng
Mua thông qua cổng thanh toán. Sau khi thanh toán, sẽ có email bắn về kèm link download tài liệu.
Với sản phẩm free thì download trực tiếp tại web

## Quản lý
#### Danh sách customer
- Danh sách customer tương ứng với các thông tin profile cá nhân như ở phía khách hàng (thông tin cá nhân, lịch sử mua hàng)

#### Admin
- Chỉ có 1 admin (ko cần crud)

#### Sản phẩm
- Category, sub-category đã có trong tài liệu, tạm thời fix cứng, ko crud. Sản phẩm có thể gắn với 1 hoặc nhiều category hoặc sub-category
- Nội dung sp : package bao nhiêu file, size, description
- Phân loai: Nếu là PDF có 2 loại:  PDF mất tiền ko link tới wordbook,  PDF mất tiền link tới workbook, PDH free

#### Giá bán
- quản lý giá bán gắn với sản phẩm, giá bao gồm giá gốc, giá sale. Có active sale hay không

#### Đánh giá, comment
- Với workbook gắn reviews, mỗi review có thông tin tên, rate (1-5 sao), nội dung review.
- Với PDF gắn comment, mỗi comment gắn với PDF gồm thông tin tên, nội dung comment

#### Đơn hàng
- Quản lý danh sách đơn hàng có lọc theo trạng thái (đã download hay chưa), tiền đơn hàng
- Mỗi đơn hàng gắn 1 list sản phẩm, giá sale và tổng tiền hàng
- Hiển thị thông tin doanh thu (cơ bản) ngay ở trang đơn hàng

#### Bài viết
- Quản lý các bài viết trên trang khách hàng
