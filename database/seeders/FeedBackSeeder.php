<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeedBackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('feed_backs')->truncate();
        DB::table('feed_backs')->insert([
            [
                'name'=>'Phạm Trung Vàng',
                'email'=>'vang@gmail.com',
                'phone'=>'0927827654',
                'subject'=>1,
                'message'=>'Đồ ăn ở đây rất ngon, mọi người nên mua.Chắc chắn mình sẽ ủng hộ nhiều nữa.',
                'created_at'=>'2021-09-21'
            ],[
                'name'=>'Nguyễn Anh Minh',
                'email'=>'minhng@gmail.com',
                'phone'=>'0927827666',
                'subject'=>1,
                'message'=>'Đồ ăn ở đây rất ngon, Giá cả phải chăng, mọi người nên ủng hộ.',
                'created_at'=>'2021-09-28'
            ],[
                'name'=>'Nguyễn Anh Đức',
                'email'=>'anhduc@gmail.com',
                'phone'=>'0927899654',
                'subject'=>2,
                'message'=>'Đồ ăn ở đây rất ngon, mọi người nên mua.Chắc chắn mình sẽ ủng hộ nhiều nữa.',
                'created_at'=>'2021-09-21'
            ],[
                'name'=>'Lê Bảo Lâm',
                'email'=>'lamle@gmail.com',
                'phone'=>'0974927654',
                'subject'=>2,
                'message'=>'Các món ăn rất đa dạng, tôi đã mua rất nhiều và rất hài lòng.',
                'created_at'=>'2021-09-21'
            ],[
                'name'=>'Nguyễn Công Phượng',
                'email'=>'cphuong@gmail.com',
                'phone'=>'0927827001',
                'subject'=>2,
                'message'=>'Đồ ăn ở đây rất ngon, mọi người nên mua.Chắc chắn mình sẽ ủng hộ nhiều nữa.',
                'created_at'=>'2021-08-21'
            ],[
                'name'=>'Nguyễn Thị Vũ',
                'email'=>'thivu@gmail.com',
                'phone'=>'09628327654',
                'subject'=>2,
                'message'=>'Đồ chay bên bạn rất ngon! Cả nhà mình đều thích lắm.',
                'created_at'=>'2021-09-12'
            ],[
                'name'=>'Đào Quang Huy',
                'email'=>'huydao@gmail.com',
                'phone'=>'0927829289',
                'subject'=>2,
                'message'=>'Đồ ăn ở đây rất ngon.Chắc chắn mình sẽ ủng hộ nhiều nữa.',
                'created_at'=>'2021-09-21'
            ],[
                'name'=>'Huỳnh Thị Thanh',
                'email'=>'thanhthi@gmail.com',
                'phone'=>'0927898554',
                'subject'=>1,
                'message'=>'Bạn ơi mình đã ăn thử sp rồi. Thấy cũng ngon lắm. Cám ơn shop nhé.Mai mốt mình sẽ mua thêm.',
                'created_at'=>'2021-09-18'
            ],[
                'name'=>'Hoàng Mai Hoa',
                'email'=>'hoamai@gmail.com',
                'phone'=>'0962827654',
                'subject'=>1,
                'message'=>'Các mặt hàng con gởi đều ngon hơn ở chợ.',
                'created_at'=>'2021-09-13'
            ],[
                'name'=>'Phạm Đức Thắng',
                'email'=>'thangduc@gmail.com',
                'phone'=>'0927829999',
                'subject'=>1,
                'message'=>'Các món ăn mình đặt mình đều cảm thấy rất ngon. Mình sẽ quay lại ủng hộ.',
                'created_at'=>'2021-09-15'
            ],[
                'name'=>'Nguyễn Ánh Dương',
                'email'=>'duonganh@gmail.com',
                'phone'=>'0927189600',
                'subject'=>2,
                'message'=>'Em rất hài lòng với tất cả các món ăn tại đây.',
                'created_at'=>'2021-08-17'
            ],[
                'name'=>'Nguyễn Gia Linh',
                'email'=>'linhgia@gmail.com',
                'phone'=>'0927827988',
                'subject'=>2,
                'message'=>'Đồ ăn ngon giá cả hợp lí.',
                'created_at'=>'2021-07-19'
            ],[
                'name'=>'Phạm Ngọc Châu',
                'email'=>'ngocchau@gmail.com',
                'phone'=>'0927397392',
                'subject'=>2,
                'message'=>'Các món chay ở đây là mình cảm thấy yên tâm sử dụng nhất.',
                'created_at'=>'2021-09-03'
            ],[
                'name'=>'Nguyễn Linh Chi',
                'email'=>'linhchi@gmail.com',
                'phone'=>'0927397000',
                'subject'=>2,
                'message'=>'Món ăn ngon lắm.',
                'created_at'=>'2021-09-17'
            ],[
                'name'=>'Hoàng Minh Tâm',
                'email'=>'minhtam@gmail.com',
                'phone'=>'09273979828',
                'subject'=>2,
                'message'=>'Mình góp í là nên làm ra nhiều món hơn nữa',
                'created_at'=>'2021-08-29'
            ],[
                'name'=>'Đào Mẫn Nhi',
                'email'=>'mannhi@gmail.com',
                'phone'=>'0927398297',
                'subject'=>2,
                'message'=>'Các món ăn dù trải qua thời gian giao hàng khá dài nhưng chất lượng vẫn rất tuyệt vời.',
                'created_at'=>'2021-08-20'
            ],[
                'name'=>'Đỗ Tú Uyên',
                'email'=>'tuuyen@gmail.com',
                'phone'=>'092739762890',
                'subject'=>2,
                'message'=>'Rất hài lòng với món ăn tại đây.',
                'created_at'=>'2021-09-19'
            ],[
                'name'=>'Hà Vân Trang',
                'email'=>'vantrang@gmail.com',
                'phone'=>'0927397377',
                'subject'=>1,
                'message'=>'Tôi thấy các món ăn đều rất là ngon. Tôi sẽ quay lại',
                'created_at'=>'2021-07-18'
            ],[
                'name'=>'Nguyễn Thuỷ Tiên',
                'email'=>'thuytien@gmail.com',
                'phone'=>'0927390901',
                'subject'=>2,
                'message'=>'Các món ăn ở đây đều là các nguyên liệu sạch nên tôi thấy rất hài lòng.',
                'created_at'=>'2021-07-10'
            ],[
                'name'=>'Phạm Tú Duyên',
                'email'=>'duyendang@gmail.com',
                'phone'=>'0927396666',
                'subject'=>2,
                'message'=>'Các món ăn bên bạn ngon lắm đặc biệt là mấy món đậu hũ.',
                'created_at'=>'2021-07-14'
            ],[
                'name'=>'Đào Thiên Kim',
                'email'=>'thienkim@gmail.com',
                'phone'=>'0915385787',
                'subject'=>2,
                'message'=>'Mình thấy các món ăn rất ngon. Cảm ơn các bạn',
                'created_at'=>'2021-06-11'
            ],
        ]);
    }
}
