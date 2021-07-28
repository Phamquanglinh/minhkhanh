<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Camera Dome 4 in 1 hồng ngoại 4.0 Megapixel DAHUA HAC-HDBW1400EP-S2',
                'slug' => 'dahua-hac-hdbw1400ep-s2',
                'category_id' => 1,
                'trademark_id' => 1,
                'avatar' => 'img/products/camera/dahua/hdcvi/DH-HAC-HDBW1400EP-S2.png',
                'type' => 1,
                'description' => '<p>- Camera thế hệ S2 hỗ trợ HDCVI/ HDTVI/ AHD/ Analog.</p>
                    <p>- Cảm biến hình ảnh: 1/3 inch CMOS.&nbsp;</p>
                    <p>- Độ phân giải: 4.0 Megapixel.&nbsp;</p>
                    <p>- Tốc độ khung hình: 25fps@4MP, 25/30fps@1080p.</p>
                    <p>- Ống kính cố định: 3.6mm.&nbsp;</p>
                    <p>- Tầm quan sát hồng ngoại: 50 mét, công nghệ hồng ngoại thông minh.</p>
                    <p>- Độ nhạy sáng tối thiểu: 0.03Lux/F1.5, 0Lux IR on.&nbsp;</p>
                    <p>- Hỗ trợ chế độ <strong>camera quan sát</strong> ngày đêm (ICR).&nbsp;</p>
                    <p>- Chức năng tự động cân bằng trắng (AWB), tự động bù sáng (AGC).&nbsp;</p>
                    <p>- Chức năng chống chói sáng (BLC, HLC).&nbsp;</p>
                    <p>- Chức năng chống ngược sáng DWDR, chống nhiễu (3D-DNR).</p>
                    <p>- Tích hợp OSD.</p>
                    <p>- Tiêu chuẩn chống thấm nước và bụi: IP67 (thích hợp sử dụng trong nhà và ngoài trời).</p>
                    <p>- Tiêu chuẩn chống va đập: IK10.</p>
                    <p>- Chất liệu: Vỏ kim loại.</p>
                    <p><span><strong>- Sản xuất tại Trung Quốc.</strong></span></p>
                    <p><span><strong>- Bảo hành: 24 tháng.</strong></span></p>',
                'price' => '1200000',
                'code' => 'dhhachdb1400ep'
            ]
        ]);
    }
}
