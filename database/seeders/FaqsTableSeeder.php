<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faqs')->insert([
            [
                'question' => 'Một hệ thống camera an ninh giám sát gồm những gì?',
                'answer' => ' ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'question' => 'Tại sao khi đã lắp đặt ổ cứng vẫn không xem lại hình ảnh được?',
                'answer' => '<p class=\"guide-faq text-info\">Trường hợp này có 2 nguyên nhân:</p>\r\n                    <ul class=\"m-0\">\r\n                        <li class=\"guide-faq\">1 là ổ cứng bị lỗi</li>\r\n                        <li class=\"guide-faq\">2 là bạn chưa format ổ cứng trong lần lắp đặt đầu tiên.</li>\r\n                    </ul>\r\n                    <p class=\"document-faq ml-4\">Bạn cần phải format lại ổ cứng. Hoặc có thể kiểm tra dây cáp và thử dùng ổ khác xem có bị gì không?\r\n                    </p>',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'question' => 'Ngoài ổ cứng có thể lưu video bằng cách nào khác không?',
                'answer' => '<ul class=\"m-0\">\r\n                        <li class=\"guide-faq\">Có thể lưu video trực tiếp trên máy tính. Nhưng với điều kiện bạn dùng đầu đọc hoặc lưu trên đám mây (Tùy một số đầu hỗ trợ, ví dụ như đầu ghi Hikvision).</li>\r\n                    </ul>',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'question' => 'Chọn mua ổ cứng dung lượng bao nhiêu để phù hợp với hệ thống camera quan sát?',
                'answer' => '<p class=\"guide-faq text-info\">Có một cách tính tương đối bạn có thể áp dụng:</p>\r\n\r\n                    <ul class=\"m-0\">\r\n                        <li class=\"guide-faq\">1 camera HD720P sẽ tốn khoảng 15GB một ngày. 1 camera HD1080P sẽ tốn khoảng 20GB một ngày.</li>\r\n\r\n                    </ul>\r\n                    <ul class=\"m-0\">\r\n                        <li class=\"guide-faq\">Từ đó hãy suy ra số camera nhà bạn để ước tính dung lượng cần lắp đặt. Đây chỉ là cách tính tương đối vì còn phụ thuộc vào chuẩn nén và cấu hình lưu video của thiết bị.\r\n                        </li>\r\n                    </ul>',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'question' => 'Tôi quên mật khẩu camera wifi thì phải làm sao để khôi phục?',
                'answer' => '<ul class=\"m-0\">\r\n                        <li class=\"guide-faq\">Nếu bạn quên mật khẩu camera wifi thì bạn chỉ cần chọc vào nút reset của camera. Sau đó tiến hành cài đặt camera wifi là được. Tất cả camera wifi đều có nút reset cứng.</li>\r\n                    </ul>',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'question' => 'Muốn xem hình ảnh của camera trên nhiều màn hình thì cần phải làm gì?',
                'answer' => '<ul class=\"m-0\">\r\n                        <li class=\"guide-faq\">Bạn cần phải dung bộ chia HDMI hoặc VGA để kết nối camera với nhiều màn hình.\r\n                        </li>\r\n                    </ul>',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'question' => 'Camera an ninh sử dụng nguồn điện gì?',
                'answer' => '<ul class=\"m-0\">\r\n                        <li class=\"guide-faq\">Camera an ninh sử dụng Adapter (Bộ đổi nguồn) để chuyển nguồn điện lưới AC 220V sang nguồn 12VDC hoặc 24VAC.\r\n                        </li>\r\n                    </ul>',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'question' => 'Khi mất điện camera có ghi hình được không?',
                'answer' => '<ul class=\"m-0\">\r\n                        <li class=\"guide-faq\">Không. Camera muốn hoạt động được cũng cần phải có nguồn điện. Khi không có điện đồng nghĩa việc camera sẽ ngưng hoạt động. Chính vì vậy nếu bạn muốn camera hoạt động được bạn có thể mua bộ lưu điện.\r\n                        </li>\r\n                    </ul>',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'question' => 'Tôi có một xưởng sản xuất ở Hà Nam, văn phòng ở Hà Nội. Làm thế nào tôi có thể giám sát được công việc ở xưởng?',
                'answer' => '<ul class=\"m-0\">\r\n                        <li class=\"guide-faq\">Nên lắp các camera analog hồng ngoại. Sử dụng đầu ghi để tập hợp hình ảnh các camera này. Tiếp sau đó thông qua mạng WAN của công ty, hoặc mạng internet bạn có thể giám sát được. Các hình ảnh và âm thanh có thể lưu vào đĩa cứng của đầu ghi.</li>\r\n                    </ul>',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'question' => 'Khi đầu ghi hình đang hoạt động có thể chụp hình được không?',
                'answer' => '<ul class=\"m-0\">\r\n                        <li class=\"guide-faq\">Bạn chụp được hình bình thường khi đầu ghi đang ghi hình. Bạn cũng có thể xem lại đoạn Video đã ghi mà không ảnh hưởng đến việc ghi hình.\r\n                        </li>\r\n                    </ul>',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'question' => 'Camera của ghi hình ảnh không rõ nét như ban đầu?',
                'answer' => '<ul class=\"m-0\">\r\n                        <li class=\"guide-faq\">Nên vệ sinh ống kính, bởi vì khói và bụi bám vào ống kính làm cho hình ảnh bị mờ đi. Nên sử dụng vải mềm chùi ống kính Camera và mặt kính của hộp bảo vệ.\r\n                        </li>\r\n                    </ul>',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'question' => 'Tại sao đầu ghi Camera DVR không thể nhận ổ cứng HDD?',
                'answer' => '<ul class=\"m-0\">\r\n                        <li class=\"guide-faq\">Nên xem lại dây nguồn hoặc cáp dữ liệu kết nối không tốt với HDD. Nếu ổ cứng HDD chưa Format thì bạn nhớ Format.\r\n\r\n                        </li>\r\n                    </ul>',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ], [
                'question' => 'Vì sao Remote điều khiển từ xa của đầu ghi DVR không hoạt động được nhưng khi cắm chuột vào điều khiển bằng chuột lại được?',
                'answer' => '<ul class=\"m-0\">\r\n                        <li class=\"guide-faq\">Có thể Remote của bạn hết hoặc chưa gắn pin.\r\n                        </li>\r\n                        <li class=\"guide-faq\">Pin trong Remote đã sẵng sàng nhưng Remote vẫn không hoạt động. Bạn thực hiện khai báo trong đầu ghi.\r\n                        </li>\r\n                        <li class=\"guide-faq\">Phần Remote đang ở chế độ “OFF”. Bạn mở Menu của hệ thống đầu ghi DVR, bật “ON” chế độ Remote..\r\n                        </li>\r\n                        <li class=\"guide-faq\">Hoặc thực hiện bằng cách: gắn chuột vào, Click phải chuột và nhìn bên góc phải màn hình xem biểu tượng Remote đang trong chế độ màu xanh hay đỏ. Nếu đỏ thì nó đang ở chế độ “OFF”. Bạn Click trái vào để chuyển sang màu xanh là sẽ sử dụng được.\r\n                        </li>\r\n                    </ul>',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'question' => 'Làm gì khi không thể tìm thấy các tập tin video trong menu tìm kiếm sau khi ghi?',
                'answer' => '<p class=\"guide-faq text-info\">Nguyên nhân có thể do:</p>\r\n                    <ul class=\"m-0\">\r\n                        <li class=\"guide-faq\">Thiết lập lịch trình ghi hình chưa đúng. Chọn lại thời gian ghi hình là ” 00:00 đến 24:00 ”.\r\n                        </li>\r\n                        <li class=\"guide-faq\">Cap kết nối HDD không tốt. Kiểm tra lại cáp kết nối HDD.\r\n                        </li>\r\n                        <li class=\"guide-faq\">Có thể ngày giờ hệ thống không đúng. Kiểm tra lại ngày giờ hệ thống.\r\n                        </li>\r\n                        <li class=\"guide-faq\">Chưa chuyển qua chế độ ghi hình. Nên chuyển qua chế độ ghi hình.\r\n                        </li>\r\n                        <li class=\"guide-faq\">Khoảng thời gian tìm kiếm của bạn không đúng. Chọn lại đúng thời ghi hình.\r\n                        </li>\r\n                    </ul>',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'question' => 'Camera ban ngày xem bình thường còn ban đêm chỉ có màu đen?',
                'answer' => '<ul class=\"m-0\">\r\n                        <li class=\"guide-faq\">Kiểm tra camera nhà bạn thuộc loại nào, có hồng ngoại hay không. Nếu có thì do nguồn cấp không đủ camera hoạt động, bạn đêm camera tiêu tốn điện hơn ban ngày do bóng hồng ngoại bật.\r\n                        </li>\r\n                    </ul>',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'question' => 'Tôi đã tải video về máy tính nhưng không biết video camera nằm ở đâu?',
                'answer' => '<ul class=\"m-0\">\r\n                        <li class=\"guide-faq\">Thông thường thì video tải về nằm ở ổ C (Ổ đĩa chứa hệ điều hành). Bạn tìm ở mục Videos trong Downloads hoặc trong thư mục phần mềm xem camera.</li>\r\n                    </ul>',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'question' => 'Đầu ghi camera bị treo thì phải làm sao?',
                'answer' => '<ul class=\"m-0\">\r\n                        <li class=\"guide-faq\">Bạn nên rút điện ra sau đó khởi động lại. Nếu bị treo thường xuyên bạn nên reset đầu ghi về mặc định và chạy lại phần mềm. Hãy để chế độ bảo trì khởi động để tránh tình trạng này.</li>\r\n                    </ul>',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ], [
                'question' => 'Lắp camera ghi hình bí mật có vi phạm pháp luật không?',
                'answer' => '<ul class=\"m-0\">\r\n                        <li class=\"guide-faq\">Có. Điều 38, Bộ luật Dân sự đã quy định “Bất cứ hành động nào xâm phạm đều là phạm tội. Quay lén người khác khi chưa được họ đồng ý có thể bị kiện và phải bồi thường. Trừ trường hợp cơ quan nhà nước ra quyết định điều tra”.</li>\r\n                        <li class=\"guide-faq\">Nếu như bạn bị quay lén có thể dưa vào điều 25 của Bộ Luật để bảo vệ mình và dùng điều 121 để kiện người tiến hành quay lén.</li>\r\n                    </ul>',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ], [
                'question' => 'Đầu ghi có chế độ báo động không?',
                'answer' => '<ul class=\"m-0\">\r\n                        <li class=\"guide-faq\">Có. Dường như các loại đầu ghi hình đều báo động qua email. Bạn cần thiết lập smtp mail cho đầu ghi để dùng được tính năng này.</li>\r\n                    </ul>',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ], [
                'question' => 'Tôi có thể cắm nhiều loại camera vào 1 đầu ghi không?',
                'answer' => '<ul class=\"m-0\">\r\n                        <li class=\"guide-faq\">Điều này tùy thuộc vào số loại camera mà đầu ghi đó hỗ trợ. Bạn có thể hỏi người bán hoặc đọc thông số kỹ thuật để biết được đầu ghi bạn muốn mua có thể cắm những loại camera gì.</li>\r\n                    </ul>',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }
}
