<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('apartments')->truncate();
        \Illuminate\Support\Facades\DB::table('apartments')->insert([
            [
                'name' => 'Vinhomes Smart City',
                'address' => 'ĐCT08, Phường Tây Mỗ Quận, Nam Từ Liêm, Hà Nội',
                'price' => '80000000',
                'description' => 'Nằm trên trên Đại lộ Thăng Long – huyết mạch Tây thủ đô, Vinhomes Smart City sở hữu vị trí đắc địa, cách Trung tâm Hội nghị Quốc gia chỉ 7 phút di chuyển.
Đây được coi là tọa độ vàng cho cuộc sống hiện đại, năng động. Không chỉ thuận lợi để cư dân di chuyển về mọi phía, Vinhomes Smart City còn là tiềm năng thúc đẩy sự gia tăng giá trị bất động sản. Nơi đây cũng tập trung cộng đồng người nước ngoài đang sống và làm việc tại Việt Nam',
                'detail' => 'Vinhomes Smart City là Đại đô thị thông minh đẳng cấp quốc tế đầu tiên tại Việt Nam. Một sản phẩm tiên phong của Vinhomes ứng dụng các công nghệ thông minh vào dự án BĐS. Nổi bật với hệ sinh thái thông minh toàn diện trên 4 trục cốt lõi: An ninh – an toàn thông minh, Vận hành thông minh, Cộng đồng thông minh, Căn hộ thông minh.',
                'thumbnail' => 'https://nha.today/wp-content/uploads/2021/07/phoi-canh-the-miami-vinhomes-smart-city.jpg',
                'status' => '2'
            ],
            [
                'name' => 'The Golden Armor',
                'address' => '9 Nam Cao, Giảng Võ, Ba Đình, Hà Nội',
                'price' => '90000000',
                'description' => 'Nằm trên trên Đại lộ Thăng Long – huyết mạch Tây thủ đô, Vinhomes Smart City sở hữu vị trí đắc địa, cách Trung tâm Hội nghị Quốc gia chỉ 7 phút di chuyển.
Đây được coi là tọa độ vàng cho cuộc sống hiện đại, năng động. Không chỉ thuận lợi để cư dân di chuyển về mọi phía, Vinhomes Smart City còn là tiềm năng thúc đẩy sự gia tăng giá trị bất động sản. Nơi đây cũng tập trung cộng đồng người nước ngoài đang sống và làm việc tại Việt Nam',
                'detail' => 'Là dự án chung cư mới và đáng mong đợi nhất khu vực Ba Đình, trung tâm chính trị ngoại giao lớn và quan trọng bậc nhất. Dự án The Golden Armor – B6 Giảng Võ như khoác lên bộ áo mới cho thủ đô,bỏ lại những căn hộ tập thể đã cũ và không an toàn.',
                'thumbnail' => 'https://odinland.com/wp-content/uploads/2020/10/van-phong-cho-thue-toa-nha-golden-amor-6.jpg',
                'status' => '1'
            ],
            [
            'name' => 'Regal Maison Phu Yen ',
            'address' => 'Đại lộ Hùng Vương, P.9 và X. Bình Kiến, TP. Tuy Hòa, Phú Yên',
            'price' => '100000000',
            'description' => 'Sở hữu nhiều lợi thế về kinh tế và du lịch, “mảnh đất vàng” Phú Yên đang điểm đến lý tưởng thu hút hàng loạt các nhà đầu tư trong và ngoài nước. Theo thống kê năm 2018, tỉnh đã đón hơn 1,6 triệu lượt khách đến nghỉ dưỡng, doanh thu tăng 25% so với cùng kỳ năm ngoái. Đây được xem như bước đệm để Phú Yên phát triển bất động sản, nhất là khu vực ven biển.

Nắm bắt được tiềm năng của vùng đất này, Đất Xanh Miền Trung chính thức cho ra mắt dự án tâm điểm Regal Maison Phu Yen – Đóa hoa hồng trên cát bên bờ biển Tuy Hòa, sản phẩm đánh dấu bước đặt chân đầu tiên lên mảnh đất “vàng” Tuy Hòa (Phú Yên).',
            'detail' => 'Sở hữu nhiều lợi thế về kinh tế và du lịch, “mảnh đất vàng” Phú Yên đang điểm đến lý tưởng thu hút hàng loạt các nhà đầu tư trong và ngoài nước. Theo thống kê năm 2018, tỉnh đã đón hơn 1,6 triệu lượt khách đến nghỉ dưỡng, doanh thu tăng 25% so với cùng kỳ năm ngoái. Đây được xem như bước đệm để Phú Yên phát triển bất động sản, nhất là khu vực ven biển.',
            'thumbnail' => 'https://vcdn-kinhdoanh.vnecdn.net/2021/07/16/image001-1626428055-1626428205-9972-1626430833.jpg',
            'status' => '1'
        ],
            [
                'name' => 'Vinhomes Smart City',
                'address' => 'ĐCT08, Phường Tây Mỗ Quận, Nam Từ Liêm, Hà Nội',
                'price' => '80000000',
                'description' => 'Nằm trên trên Đại lộ Thăng Long – huyết mạch Tây thủ đô, Vinhomes Smart City sở hữu vị trí đắc địa, cách Trung tâm Hội nghị Quốc gia chỉ 7 phút di chuyển.
Đây được coi là tọa độ vàng cho cuộc sống hiện đại, năng động. Không chỉ thuận lợi để cư dân di chuyển về mọi phía, Vinhomes Smart City còn là tiềm năng thúc đẩy sự gia tăng giá trị bất động sản. Nơi đây cũng tập trung cộng đồng người nước ngoài đang sống và làm việc tại Việt Nam',
                'detail' => 'Vinhomes Smart City là Đại đô thị thông minh đẳng cấp quốc tế đầu tiên tại Việt Nam. Một sản phẩm tiên phong của Vinhomes ứng dụng các công nghệ thông minh vào dự án BĐS. Nổi bật với hệ sinh thái thông minh toàn diện trên 4 trục cốt lõi: An ninh – an toàn thông minh, Vận hành thông minh, Cộng đồng thông minh, Căn hộ thông minh.',
                'thumbnail' => 'https://nha.today/wp-content/uploads/2021/07/phoi-canh-the-miami-vinhomes-smart-city.jpg',
                'status' => '2'
            ],
            [
                'name' => 'The Golden Armor',
                'address' => '9 Nam Cao, Giảng Võ, Ba Đình, Hà Nội',
                'price' => '90000000',
                'description' => 'Nằm trên trên Đại lộ Thăng Long – huyết mạch Tây thủ đô, Vinhomes Smart City sở hữu vị trí đắc địa, cách Trung tâm Hội nghị Quốc gia chỉ 7 phút di chuyển.
Đây được coi là tọa độ vàng cho cuộc sống hiện đại, năng động. Không chỉ thuận lợi để cư dân di chuyển về mọi phía, Vinhomes Smart City còn là tiềm năng thúc đẩy sự gia tăng giá trị bất động sản. Nơi đây cũng tập trung cộng đồng người nước ngoài đang sống và làm việc tại Việt Nam',
                'detail' => 'Là dự án chung cư mới và đáng mong đợi nhất khu vực Ba Đình, trung tâm chính trị ngoại giao lớn và quan trọng bậc nhất. Dự án The Golden Armor – B6 Giảng Võ như khoác lên bộ áo mới cho thủ đô,bỏ lại những căn hộ tập thể đã cũ và không an toàn.',
                'thumbnail' => 'https://odinland.com/wp-content/uploads/2020/10/van-phong-cho-thue-toa-nha-golden-amor-6.jpg',
                'status' => '1'
            ],
            [
                'name' => 'Regal Maison Phu Yen ',
                'address' => 'Đại lộ Hùng Vương, P.9 và X. Bình Kiến, TP. Tuy Hòa, Phú Yên',
                'price' => '100000000',
                'description' => 'Sở hữu nhiều lợi thế về kinh tế và du lịch, “mảnh đất vàng” Phú Yên đang điểm đến lý tưởng thu hút hàng loạt các nhà đầu tư trong và ngoài nước. Theo thống kê năm 2018, tỉnh đã đón hơn 1,6 triệu lượt khách đến nghỉ dưỡng, doanh thu tăng 25% so với cùng kỳ năm ngoái. Đây được xem như bước đệm để Phú Yên phát triển bất động sản, nhất là khu vực ven biển.

Nắm bắt được tiềm năng của vùng đất này, Đất Xanh Miền Trung chính thức cho ra mắt dự án tâm điểm Regal Maison Phu Yen – Đóa hoa hồng trên cát bên bờ biển Tuy Hòa, sản phẩm đánh dấu bước đặt chân đầu tiên lên mảnh đất “vàng” Tuy Hòa (Phú Yên).',
                'detail' => 'Sở hữu nhiều lợi thế về kinh tế và du lịch, “mảnh đất vàng” Phú Yên đang điểm đến lý tưởng thu hút hàng loạt các nhà đầu tư trong và ngoài nước. Theo thống kê năm 2018, tỉnh đã đón hơn 1,6 triệu lượt khách đến nghỉ dưỡng, doanh thu tăng 25% so với cùng kỳ năm ngoái. Đây được xem như bước đệm để Phú Yên phát triển bất động sản, nhất là khu vực ven biển.',
                'thumbnail' => 'https://vcdn-kinhdoanh.vnecdn.net/2021/07/16/image001-1626428055-1626428205-9972-1626430833.jpg',
                'status' => '1'
            ],
            [
                'name' => 'Vinhomes Smart City',
                'address' => 'ĐCT08, Phường Tây Mỗ Quận, Nam Từ Liêm, Hà Nội',
                'price' => '80000000',
                'description' => 'Nằm trên trên Đại lộ Thăng Long – huyết mạch Tây thủ đô, Vinhomes Smart City sở hữu vị trí đắc địa, cách Trung tâm Hội nghị Quốc gia chỉ 7 phút di chuyển.
Đây được coi là tọa độ vàng cho cuộc sống hiện đại, năng động. Không chỉ thuận lợi để cư dân di chuyển về mọi phía, Vinhomes Smart City còn là tiềm năng thúc đẩy sự gia tăng giá trị bất động sản. Nơi đây cũng tập trung cộng đồng người nước ngoài đang sống và làm việc tại Việt Nam',
                'detail' => 'Vinhomes Smart City là Đại đô thị thông minh đẳng cấp quốc tế đầu tiên tại Việt Nam. Một sản phẩm tiên phong của Vinhomes ứng dụng các công nghệ thông minh vào dự án BĐS. Nổi bật với hệ sinh thái thông minh toàn diện trên 4 trục cốt lõi: An ninh – an toàn thông minh, Vận hành thông minh, Cộng đồng thông minh, Căn hộ thông minh.',
                'thumbnail' => 'https://nha.today/wp-content/uploads/2021/07/phoi-canh-the-miami-vinhomes-smart-city.jpg',
                'status' => '2'
            ],
            [
                'name' => 'The Golden Armor',
                'address' => '9 Nam Cao, Giảng Võ, Ba Đình, Hà Nội',
                'price' => '90000000',
                'description' => 'Nằm trên trên Đại lộ Thăng Long – huyết mạch Tây thủ đô, Vinhomes Smart City sở hữu vị trí đắc địa, cách Trung tâm Hội nghị Quốc gia chỉ 7 phút di chuyển.
Đây được coi là tọa độ vàng cho cuộc sống hiện đại, năng động. Không chỉ thuận lợi để cư dân di chuyển về mọi phía, Vinhomes Smart City còn là tiềm năng thúc đẩy sự gia tăng giá trị bất động sản. Nơi đây cũng tập trung cộng đồng người nước ngoài đang sống và làm việc tại Việt Nam',
                'detail' => 'Là dự án chung cư mới và đáng mong đợi nhất khu vực Ba Đình, trung tâm chính trị ngoại giao lớn và quan trọng bậc nhất. Dự án The Golden Armor – B6 Giảng Võ như khoác lên bộ áo mới cho thủ đô,bỏ lại những căn hộ tập thể đã cũ và không an toàn.',
                'thumbnail' => 'https://odinland.com/wp-content/uploads/2020/10/van-phong-cho-thue-toa-nha-golden-amor-6.jpg',
                'status' => '1'
            ],
            [
                'name' => 'Regal Maison Phu Yen ',
                'address' => 'Đại lộ Hùng Vương, P.9 và X. Bình Kiến, TP. Tuy Hòa, Phú Yên',
                'price' => '100000000',
                'description' => 'Sở hữu nhiều lợi thế về kinh tế và du lịch, “mảnh đất vàng” Phú Yên đang điểm đến lý tưởng thu hút hàng loạt các nhà đầu tư trong và ngoài nước. Theo thống kê năm 2018, tỉnh đã đón hơn 1,6 triệu lượt khách đến nghỉ dưỡng, doanh thu tăng 25% so với cùng kỳ năm ngoái. Đây được xem như bước đệm để Phú Yên phát triển bất động sản, nhất là khu vực ven biển.

Nắm bắt được tiềm năng của vùng đất này, Đất Xanh Miền Trung chính thức cho ra mắt dự án tâm điểm Regal Maison Phu Yen – Đóa hoa hồng trên cát bên bờ biển Tuy Hòa, sản phẩm đánh dấu bước đặt chân đầu tiên lên mảnh đất “vàng” Tuy Hòa (Phú Yên).',
                'detail' => 'Sở hữu nhiều lợi thế về kinh tế và du lịch, “mảnh đất vàng” Phú Yên đang điểm đến lý tưởng thu hút hàng loạt các nhà đầu tư trong và ngoài nước. Theo thống kê năm 2018, tỉnh đã đón hơn 1,6 triệu lượt khách đến nghỉ dưỡng, doanh thu tăng 25% so với cùng kỳ năm ngoái. Đây được xem như bước đệm để Phú Yên phát triển bất động sản, nhất là khu vực ven biển.',
                'thumbnail' => 'https://vcdn-kinhdoanh.vnecdn.net/2021/07/16/image001-1626428055-1626428205-9972-1626430833.jpg',
                'status' => '1'
            ],
            [
                'name' => 'Vinhomes Smart City',
                'address' => 'ĐCT08, Phường Tây Mỗ Quận, Nam Từ Liêm, Hà Nội',
                'price' => '80000000',
                'description' => 'Nằm trên trên Đại lộ Thăng Long – huyết mạch Tây thủ đô, Vinhomes Smart City sở hữu vị trí đắc địa, cách Trung tâm Hội nghị Quốc gia chỉ 7 phút di chuyển.
Đây được coi là tọa độ vàng cho cuộc sống hiện đại, năng động. Không chỉ thuận lợi để cư dân di chuyển về mọi phía, Vinhomes Smart City còn là tiềm năng thúc đẩy sự gia tăng giá trị bất động sản. Nơi đây cũng tập trung cộng đồng người nước ngoài đang sống và làm việc tại Việt Nam',
                'detail' => 'Vinhomes Smart City là Đại đô thị thông minh đẳng cấp quốc tế đầu tiên tại Việt Nam. Một sản phẩm tiên phong của Vinhomes ứng dụng các công nghệ thông minh vào dự án BĐS. Nổi bật với hệ sinh thái thông minh toàn diện trên 4 trục cốt lõi: An ninh – an toàn thông minh, Vận hành thông minh, Cộng đồng thông minh, Căn hộ thông minh.',
                'thumbnail' => 'https://nha.today/wp-content/uploads/2021/07/phoi-canh-the-miami-vinhomes-smart-city.jpg',
                'status' => '2'
            ],
            [
                'name' => 'The Golden Armor',
                'address' => '9 Nam Cao, Giảng Võ, Ba Đình, Hà Nội',
                'price' => '90000000',
                'description' => 'Nằm trên trên Đại lộ Thăng Long – huyết mạch Tây thủ đô, Vinhomes Smart City sở hữu vị trí đắc địa, cách Trung tâm Hội nghị Quốc gia chỉ 7 phút di chuyển.
Đây được coi là tọa độ vàng cho cuộc sống hiện đại, năng động. Không chỉ thuận lợi để cư dân di chuyển về mọi phía, Vinhomes Smart City còn là tiềm năng thúc đẩy sự gia tăng giá trị bất động sản. Nơi đây cũng tập trung cộng đồng người nước ngoài đang sống và làm việc tại Việt Nam',
                'detail' => 'Là dự án chung cư mới và đáng mong đợi nhất khu vực Ba Đình, trung tâm chính trị ngoại giao lớn và quan trọng bậc nhất. Dự án The Golden Armor – B6 Giảng Võ như khoác lên bộ áo mới cho thủ đô,bỏ lại những căn hộ tập thể đã cũ và không an toàn.',
                'thumbnail' => 'https://odinland.com/wp-content/uploads/2020/10/van-phong-cho-thue-toa-nha-golden-amor-6.jpg',
                'status' => '1'
            ],
            [
                'name' => 'Regal Maison Phu Yen ',
                'address' => 'Đại lộ Hùng Vương, P.9 và X. Bình Kiến, TP. Tuy Hòa, Phú Yên',
                'price' => '100000000',
                'description' => 'Sở hữu nhiều lợi thế về kinh tế và du lịch, “mảnh đất vàng” Phú Yên đang điểm đến lý tưởng thu hút hàng loạt các nhà đầu tư trong và ngoài nước. Theo thống kê năm 2018, tỉnh đã đón hơn 1,6 triệu lượt khách đến nghỉ dưỡng, doanh thu tăng 25% so với cùng kỳ năm ngoái. Đây được xem như bước đệm để Phú Yên phát triển bất động sản, nhất là khu vực ven biển.

Nắm bắt được tiềm năng của vùng đất này, Đất Xanh Miền Trung chính thức cho ra mắt dự án tâm điểm Regal Maison Phu Yen – Đóa hoa hồng trên cát bên bờ biển Tuy Hòa, sản phẩm đánh dấu bước đặt chân đầu tiên lên mảnh đất “vàng” Tuy Hòa (Phú Yên).',
                'detail' => 'Sở hữu nhiều lợi thế về kinh tế và du lịch, “mảnh đất vàng” Phú Yên đang điểm đến lý tưởng thu hút hàng loạt các nhà đầu tư trong và ngoài nước. Theo thống kê năm 2018, tỉnh đã đón hơn 1,6 triệu lượt khách đến nghỉ dưỡng, doanh thu tăng 25% so với cùng kỳ năm ngoái. Đây được xem như bước đệm để Phú Yên phát triển bất động sản, nhất là khu vực ven biển.',
                'thumbnail' => 'https://vcdn-kinhdoanh.vnecdn.net/2021/07/16/image001-1626428055-1626428205-9972-1626430833.jpg',
                'status' => '1'
            ],
            [
                'name' => 'Vinhomes Smart City',
                'address' => 'ĐCT08, Phường Tây Mỗ Quận, Nam Từ Liêm, Hà Nội',
                'price' => '80000000',
                'description' => 'Nằm trên trên Đại lộ Thăng Long – huyết mạch Tây thủ đô, Vinhomes Smart City sở hữu vị trí đắc địa, cách Trung tâm Hội nghị Quốc gia chỉ 7 phút di chuyển.
Đây được coi là tọa độ vàng cho cuộc sống hiện đại, năng động. Không chỉ thuận lợi để cư dân di chuyển về mọi phía, Vinhomes Smart City còn là tiềm năng thúc đẩy sự gia tăng giá trị bất động sản. Nơi đây cũng tập trung cộng đồng người nước ngoài đang sống và làm việc tại Việt Nam',
                'detail' => 'Vinhomes Smart City là Đại đô thị thông minh đẳng cấp quốc tế đầu tiên tại Việt Nam. Một sản phẩm tiên phong của Vinhomes ứng dụng các công nghệ thông minh vào dự án BĐS. Nổi bật với hệ sinh thái thông minh toàn diện trên 4 trục cốt lõi: An ninh – an toàn thông minh, Vận hành thông minh, Cộng đồng thông minh, Căn hộ thông minh.',
                'thumbnail' => 'https://nha.today/wp-content/uploads/2021/07/phoi-canh-the-miami-vinhomes-smart-city.jpg',
                'status' => '2'
            ],
            [
                'name' => 'The Golden Armor',
                'address' => '9 Nam Cao, Giảng Võ, Ba Đình, Hà Nội',
                'price' => '90000000',
                'description' => 'Nằm trên trên Đại lộ Thăng Long – huyết mạch Tây thủ đô, Vinhomes Smart City sở hữu vị trí đắc địa, cách Trung tâm Hội nghị Quốc gia chỉ 7 phút di chuyển.
Đây được coi là tọa độ vàng cho cuộc sống hiện đại, năng động. Không chỉ thuận lợi để cư dân di chuyển về mọi phía, Vinhomes Smart City còn là tiềm năng thúc đẩy sự gia tăng giá trị bất động sản. Nơi đây cũng tập trung cộng đồng người nước ngoài đang sống và làm việc tại Việt Nam',
                'detail' => 'Là dự án chung cư mới và đáng mong đợi nhất khu vực Ba Đình, trung tâm chính trị ngoại giao lớn và quan trọng bậc nhất. Dự án The Golden Armor – B6 Giảng Võ như khoác lên bộ áo mới cho thủ đô,bỏ lại những căn hộ tập thể đã cũ và không an toàn.',
                'thumbnail' => 'https://odinland.com/wp-content/uploads/2020/10/van-phong-cho-thue-toa-nha-golden-amor-6.jpg',
                'status' => '1'
            ],
            [
                'name' => 'Regal Maison Phu Yen ',
                'address' => 'Đại lộ Hùng Vương, P.9 và X. Bình Kiến, TP. Tuy Hòa, Phú Yên',
                'price' => '100000000',
                'description' => 'Sở hữu nhiều lợi thế về kinh tế và du lịch, “mảnh đất vàng” Phú Yên đang điểm đến lý tưởng thu hút hàng loạt các nhà đầu tư trong và ngoài nước. Theo thống kê năm 2018, tỉnh đã đón hơn 1,6 triệu lượt khách đến nghỉ dưỡng, doanh thu tăng 25% so với cùng kỳ năm ngoái. Đây được xem như bước đệm để Phú Yên phát triển bất động sản, nhất là khu vực ven biển.

Nắm bắt được tiềm năng của vùng đất này, Đất Xanh Miền Trung chính thức cho ra mắt dự án tâm điểm Regal Maison Phu Yen – Đóa hoa hồng trên cát bên bờ biển Tuy Hòa, sản phẩm đánh dấu bước đặt chân đầu tiên lên mảnh đất “vàng” Tuy Hòa (Phú Yên).',
                'detail' => 'Sở hữu nhiều lợi thế về kinh tế và du lịch, “mảnh đất vàng” Phú Yên đang điểm đến lý tưởng thu hút hàng loạt các nhà đầu tư trong và ngoài nước. Theo thống kê năm 2018, tỉnh đã đón hơn 1,6 triệu lượt khách đến nghỉ dưỡng, doanh thu tăng 25% so với cùng kỳ năm ngoái. Đây được xem như bước đệm để Phú Yên phát triển bất động sản, nhất là khu vực ven biển.',
                'thumbnail' => 'https://vcdn-kinhdoanh.vnecdn.net/2021/07/16/image001-1626428055-1626428205-9972-1626430833.jpg',
                'status' => '1'
            ],
            [
                'name' => 'Vinhomes Smart City',
                'address' => 'ĐCT08, Phường Tây Mỗ Quận, Nam Từ Liêm, Hà Nội',
                'price' => '80000000',
                'description' => 'Nằm trên trên Đại lộ Thăng Long – huyết mạch Tây thủ đô, Vinhomes Smart City sở hữu vị trí đắc địa, cách Trung tâm Hội nghị Quốc gia chỉ 7 phút di chuyển.
Đây được coi là tọa độ vàng cho cuộc sống hiện đại, năng động. Không chỉ thuận lợi để cư dân di chuyển về mọi phía, Vinhomes Smart City còn là tiềm năng thúc đẩy sự gia tăng giá trị bất động sản. Nơi đây cũng tập trung cộng đồng người nước ngoài đang sống và làm việc tại Việt Nam',
                'detail' => 'Vinhomes Smart City là Đại đô thị thông minh đẳng cấp quốc tế đầu tiên tại Việt Nam. Một sản phẩm tiên phong của Vinhomes ứng dụng các công nghệ thông minh vào dự án BĐS. Nổi bật với hệ sinh thái thông minh toàn diện trên 4 trục cốt lõi: An ninh – an toàn thông minh, Vận hành thông minh, Cộng đồng thông minh, Căn hộ thông minh.',
                'thumbnail' => 'https://nha.today/wp-content/uploads/2021/07/phoi-canh-the-miami-vinhomes-smart-city.jpg',
                'status' => '2'
            ],
            [
                'name' => 'The Golden Armor',
                'address' => '9 Nam Cao, Giảng Võ, Ba Đình, Hà Nội',
                'price' => '90000000',
                'description' => 'Nằm trên trên Đại lộ Thăng Long – huyết mạch Tây thủ đô, Vinhomes Smart City sở hữu vị trí đắc địa, cách Trung tâm Hội nghị Quốc gia chỉ 7 phút di chuyển.
Đây được coi là tọa độ vàng cho cuộc sống hiện đại, năng động. Không chỉ thuận lợi để cư dân di chuyển về mọi phía, Vinhomes Smart City còn là tiềm năng thúc đẩy sự gia tăng giá trị bất động sản. Nơi đây cũng tập trung cộng đồng người nước ngoài đang sống và làm việc tại Việt Nam',
                'detail' => 'Là dự án chung cư mới và đáng mong đợi nhất khu vực Ba Đình, trung tâm chính trị ngoại giao lớn và quan trọng bậc nhất. Dự án The Golden Armor – B6 Giảng Võ như khoác lên bộ áo mới cho thủ đô,bỏ lại những căn hộ tập thể đã cũ và không an toàn.',
                'thumbnail' => 'https://odinland.com/wp-content/uploads/2020/10/van-phong-cho-thue-toa-nha-golden-amor-6.jpg',
                'status' => '1'
            ],
            [
                'name' => 'Regal Maison Phu Yen ',
                'address' => 'Đại lộ Hùng Vương, P.9 và X. Bình Kiến, TP. Tuy Hòa, Phú Yên',
                'price' => '100000000',
                'description' => 'Sở hữu nhiều lợi thế về kinh tế và du lịch, “mảnh đất vàng” Phú Yên đang điểm đến lý tưởng thu hút hàng loạt các nhà đầu tư trong và ngoài nước. Theo thống kê năm 2018, tỉnh đã đón hơn 1,6 triệu lượt khách đến nghỉ dưỡng, doanh thu tăng 25% so với cùng kỳ năm ngoái. Đây được xem như bước đệm để Phú Yên phát triển bất động sản, nhất là khu vực ven biển.

Nắm bắt được tiềm năng của vùng đất này, Đất Xanh Miền Trung chính thức cho ra mắt dự án tâm điểm Regal Maison Phu Yen – Đóa hoa hồng trên cát bên bờ biển Tuy Hòa, sản phẩm đánh dấu bước đặt chân đầu tiên lên mảnh đất “vàng” Tuy Hòa (Phú Yên).',
                'detail' => 'Sở hữu nhiều lợi thế về kinh tế và du lịch, “mảnh đất vàng” Phú Yên đang điểm đến lý tưởng thu hút hàng loạt các nhà đầu tư trong và ngoài nước. Theo thống kê năm 2018, tỉnh đã đón hơn 1,6 triệu lượt khách đến nghỉ dưỡng, doanh thu tăng 25% so với cùng kỳ năm ngoái. Đây được xem như bước đệm để Phú Yên phát triển bất động sản, nhất là khu vực ven biển.',
                'thumbnail' => 'https://vcdn-kinhdoanh.vnecdn.net/2021/07/16/image001-1626428055-1626428205-9972-1626430833.jpg',
                'status' => '1'
            ],
            [
                'name' => 'Vinhomes Smart City',
                'address' => 'ĐCT08, Phường Tây Mỗ Quận, Nam Từ Liêm, Hà Nội',
                'price' => '80000000',
                'description' => 'Nằm trên trên Đại lộ Thăng Long – huyết mạch Tây thủ đô, Vinhomes Smart City sở hữu vị trí đắc địa, cách Trung tâm Hội nghị Quốc gia chỉ 7 phút di chuyển.
Đây được coi là tọa độ vàng cho cuộc sống hiện đại, năng động. Không chỉ thuận lợi để cư dân di chuyển về mọi phía, Vinhomes Smart City còn là tiềm năng thúc đẩy sự gia tăng giá trị bất động sản. Nơi đây cũng tập trung cộng đồng người nước ngoài đang sống và làm việc tại Việt Nam',
                'detail' => 'Vinhomes Smart City là Đại đô thị thông minh đẳng cấp quốc tế đầu tiên tại Việt Nam. Một sản phẩm tiên phong của Vinhomes ứng dụng các công nghệ thông minh vào dự án BĐS. Nổi bật với hệ sinh thái thông minh toàn diện trên 4 trục cốt lõi: An ninh – an toàn thông minh, Vận hành thông minh, Cộng đồng thông minh, Căn hộ thông minh.',
                'thumbnail' => 'https://nha.today/wp-content/uploads/2021/07/phoi-canh-the-miami-vinhomes-smart-city.jpg',
                'status' => '2'
            ],
            [
                'name' => 'The Golden Armor',
                'address' => '9 Nam Cao, Giảng Võ, Ba Đình, Hà Nội',
                'price' => '90000000',
                'description' => 'Nằm trên trên Đại lộ Thăng Long – huyết mạch Tây thủ đô, Vinhomes Smart City sở hữu vị trí đắc địa, cách Trung tâm Hội nghị Quốc gia chỉ 7 phút di chuyển.
Đây được coi là tọa độ vàng cho cuộc sống hiện đại, năng động. Không chỉ thuận lợi để cư dân di chuyển về mọi phía, Vinhomes Smart City còn là tiềm năng thúc đẩy sự gia tăng giá trị bất động sản. Nơi đây cũng tập trung cộng đồng người nước ngoài đang sống và làm việc tại Việt Nam',
                'detail' => 'Là dự án chung cư mới và đáng mong đợi nhất khu vực Ba Đình, trung tâm chính trị ngoại giao lớn và quan trọng bậc nhất. Dự án The Golden Armor – B6 Giảng Võ như khoác lên bộ áo mới cho thủ đô,bỏ lại những căn hộ tập thể đã cũ và không an toàn.',
                'thumbnail' => 'https://odinland.com/wp-content/uploads/2020/10/van-phong-cho-thue-toa-nha-golden-amor-6.jpg',
                'status' => '1'
            ],
            [
                'name' => 'Regal Maison Phu Yen ',
                'address' => 'Đại lộ Hùng Vương, P.9 và X. Bình Kiến, TP. Tuy Hòa, Phú Yên',
                'price' => '100000000',
                'description' => 'Sở hữu nhiều lợi thế về kinh tế và du lịch, “mảnh đất vàng” Phú Yên đang điểm đến lý tưởng thu hút hàng loạt các nhà đầu tư trong và ngoài nước. Theo thống kê năm 2018, tỉnh đã đón hơn 1,6 triệu lượt khách đến nghỉ dưỡng, doanh thu tăng 25% so với cùng kỳ năm ngoái. Đây được xem như bước đệm để Phú Yên phát triển bất động sản, nhất là khu vực ven biển.

Nắm bắt được tiềm năng của vùng đất này, Đất Xanh Miền Trung chính thức cho ra mắt dự án tâm điểm Regal Maison Phu Yen – Đóa hoa hồng trên cát bên bờ biển Tuy Hòa, sản phẩm đánh dấu bước đặt chân đầu tiên lên mảnh đất “vàng” Tuy Hòa (Phú Yên).',
                'detail' => 'Sở hữu nhiều lợi thế về kinh tế và du lịch, “mảnh đất vàng” Phú Yên đang điểm đến lý tưởng thu hút hàng loạt các nhà đầu tư trong và ngoài nước. Theo thống kê năm 2018, tỉnh đã đón hơn 1,6 triệu lượt khách đến nghỉ dưỡng, doanh thu tăng 25% so với cùng kỳ năm ngoái. Đây được xem như bước đệm để Phú Yên phát triển bất động sản, nhất là khu vực ven biển.',
                'thumbnail' => 'https://vcdn-kinhdoanh.vnecdn.net/2021/07/16/image001-1626428055-1626428205-9972-1626430833.jpg',
                'status' => '1'
            ],
            [
                'name' => 'Vinhomes Smart City',
                'address' => 'ĐCT08, Phường Tây Mỗ Quận, Nam Từ Liêm, Hà Nội',
                'price' => '80000000',
                'description' => 'Nằm trên trên Đại lộ Thăng Long – huyết mạch Tây thủ đô, Vinhomes Smart City sở hữu vị trí đắc địa, cách Trung tâm Hội nghị Quốc gia chỉ 7 phút di chuyển.
Đây được coi là tọa độ vàng cho cuộc sống hiện đại, năng động. Không chỉ thuận lợi để cư dân di chuyển về mọi phía, Vinhomes Smart City còn là tiềm năng thúc đẩy sự gia tăng giá trị bất động sản. Nơi đây cũng tập trung cộng đồng người nước ngoài đang sống và làm việc tại Việt Nam',
                'detail' => 'Vinhomes Smart City là Đại đô thị thông minh đẳng cấp quốc tế đầu tiên tại Việt Nam. Một sản phẩm tiên phong của Vinhomes ứng dụng các công nghệ thông minh vào dự án BĐS. Nổi bật với hệ sinh thái thông minh toàn diện trên 4 trục cốt lõi: An ninh – an toàn thông minh, Vận hành thông minh, Cộng đồng thông minh, Căn hộ thông minh.',
                'thumbnail' => 'https://nha.today/wp-content/uploads/2021/07/phoi-canh-the-miami-vinhomes-smart-city.jpg',
                'status' => '2'
            ],
            [
                'name' => 'The Golden Armor',
                'address' => '9 Nam Cao, Giảng Võ, Ba Đình, Hà Nội',
                'price' => '90000000',
                'description' => 'Nằm trên trên Đại lộ Thăng Long – huyết mạch Tây thủ đô, Vinhomes Smart City sở hữu vị trí đắc địa, cách Trung tâm Hội nghị Quốc gia chỉ 7 phút di chuyển.
Đây được coi là tọa độ vàng cho cuộc sống hiện đại, năng động. Không chỉ thuận lợi để cư dân di chuyển về mọi phía, Vinhomes Smart City còn là tiềm năng thúc đẩy sự gia tăng giá trị bất động sản. Nơi đây cũng tập trung cộng đồng người nước ngoài đang sống và làm việc tại Việt Nam',
                'detail' => 'Là dự án chung cư mới và đáng mong đợi nhất khu vực Ba Đình, trung tâm chính trị ngoại giao lớn và quan trọng bậc nhất. Dự án The Golden Armor – B6 Giảng Võ như khoác lên bộ áo mới cho thủ đô,bỏ lại những căn hộ tập thể đã cũ và không an toàn.',
                'thumbnail' => 'https://odinland.com/wp-content/uploads/2020/10/van-phong-cho-thue-toa-nha-golden-amor-6.jpg',
                'status' => '1'
            ],
            [
                'name' => 'Regal Maison Phu Yen ',
                'address' => 'Đại lộ Hùng Vương, P.9 và X. Bình Kiến, TP. Tuy Hòa, Phú Yên',
                'price' => '100000000',
                'description' => 'Sở hữu nhiều lợi thế về kinh tế và du lịch, “mảnh đất vàng” Phú Yên đang điểm đến lý tưởng thu hút hàng loạt các nhà đầu tư trong và ngoài nước. Theo thống kê năm 2018, tỉnh đã đón hơn 1,6 triệu lượt khách đến nghỉ dưỡng, doanh thu tăng 25% so với cùng kỳ năm ngoái. Đây được xem như bước đệm để Phú Yên phát triển bất động sản, nhất là khu vực ven biển.

Nắm bắt được tiềm năng của vùng đất này, Đất Xanh Miền Trung chính thức cho ra mắt dự án tâm điểm Regal Maison Phu Yen – Đóa hoa hồng trên cát bên bờ biển Tuy Hòa, sản phẩm đánh dấu bước đặt chân đầu tiên lên mảnh đất “vàng” Tuy Hòa (Phú Yên).',
                'detail' => 'Sở hữu nhiều lợi thế về kinh tế và du lịch, “mảnh đất vàng” Phú Yên đang điểm đến lý tưởng thu hút hàng loạt các nhà đầu tư trong và ngoài nước. Theo thống kê năm 2018, tỉnh đã đón hơn 1,6 triệu lượt khách đến nghỉ dưỡng, doanh thu tăng 25% so với cùng kỳ năm ngoái. Đây được xem như bước đệm để Phú Yên phát triển bất động sản, nhất là khu vực ven biển.',
                'thumbnail' => 'https://vcdn-kinhdoanh.vnecdn.net/2021/07/16/image001-1626428055-1626428205-9972-1626430833.jpg',
                'status' => '1'
            ]
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
