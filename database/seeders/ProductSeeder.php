<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('products')->truncate();
        DB::table('products')->insert([
            [
                'id' => 1,
                'image' => 'https://imgamp.travelmag.vn/center/1200x800/files/thuthuy/2020/06/02/lau-chay-lang-dai-hoc-1510.jpg',
                'price' => 270.000,
                'name' => 'lẩu chay chua cay',
                'description' => 'Cách nấu lẩu Thái chay khá đơn giản với đậu hũ, các loại nấm và rau ăn kèm. Đây là món ăn chay thanh đạm, rất phù hợp để làm mới những bữa ăn hàng ngày. Ngoài ra lẩu Thái chay cũng là món ăn bổ sung nhiều dưỡng chất cho những người ăn chay trường cần bổ sung năng lượng.',
                'category_id' => '8',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 2,
                'image' => 'http://vilai.vn/data/media/1827/images/quan-lau-chay-1.jpg',
                'price' => 450.000,
                'name' => 'Lẩu chay nấm kiểu Nhật',
                'description' => 'Lẩu như một món ăn không thể thiếu trong cuộc sống của người Việt, dù là mùa đông hay mùa hè, dù tiết trời ấm áp hay rét buốt. Còn điều gì tuyệt vời hơn khi ngồi quây quần bên bạn bè, người thân quanh nồi lẩu nóng hổi, cùng có những phút giây quý giá và vui vẻ cùng nhau. Có thể nói, “văn hóa lẩu” đã đi sâu vào trong tiềm thức của người Việt Nam, trở thành một thứ “gia vị” không thể thiếu trong ẩm thực người Việt. Thế nhưng, trong cuộc sống hiện nay, phần lớn các món lẩu được phục vụ là lẩu mặn. Chính vì vậy, những người ăn chay thường gặp khó khăn để thưởng thức món lẩu trọn vẹn.Được chế biến từ những loại nấm đầy hương vị như nấm mỡ gà, nấm hương, nấm rơm.v.v. món lẩu chay với nấm này đem đến một hương vị riêng không đâu có được đến với người dùng. Với nước lẩu chay được làm hoàn toàn từ các loại rau củ tươi ngon; sự trong, thanh mát, ngọt vị của nước lẩu chay chính là điều sẽ gây ấn tượng với bạn từ ban đầu.

Đặc biệt, phần nguyên liệu nhúng lẩu chay, bao gồm hơn 5 loại nấm thiên nhiên khác nhau, được sơ chế kỹ trước khi đưa lên; sẽ góp phần mang đến cho thực khách sự phong phú khi dùng bữa, một liều thuốc bổ giúp tiếp thêm năng lượng cho người ăn sau những ngày làm việc mệt mỏi.',
                'category_id' => '8',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 3,
                'image' => 'http://vilai.vn/data/media/1827/images/quan-lau-chay-ngon-2(3).jpg',
                'price' => 210.00,
                'name' => 'Lẩu chay chua cay cải ngọt',
                'description' => 'Vị chua cay nồng nàn trong các món lẩu chay thường khiến những người ăn thích thú. Dưới đây là một công nấu món lẩu chay chua cay đơn giản, giúp bạn tiết kiệm thời gian trong khâu chuẩn bị các món chay ngon vào những khoảng thời gian bận rộn.',
                'category_id' => '8',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 4,
                'image' => 'http://vilai.vn/data/media/1827/images/quan-lau-chay-ngon-3.jpg',
                'price' => 340.000,
                'name' => 'Lẩu chay mắm',
                'description' => 'Có một điều khá lạ là miền Tây không có mùa đông. Tuy nhiên, những món lẩu chay nơi đây lại rất ngon và ấm áp như tình người ở đó.Bạn sẽ cảm thấy thật tuyệt vời khi được thưởng thức nồi lẩu này.Nước dùng đun từ hoa boa rô, chao, quyện với mắm đậu chay đặc chế làm cho hương vị của món ăn như “túm lấy” người dùng, thôi thúc con người ta tiến đến và thưởng thức món ăn. Rau củ tưới được nhúng vào nước dùng lẩu chay mắm, khi chín, mang theo cái vị mắn ngọt hiếm nơi đâu có được. Để rồi khi ăn, chút dư vị vẫn còn đọng trên đầu lưỡi, làm thực khách khó có thể quên được.',
                'category_id' => '8',
                'created_at' => Carbon::now()
            ],[
                'id' => 5,
                'image' => 'http://vilai.vn/data/media/1827/images/quan-lau-chay-ngon-4.jpg',
                'price' => 420.000,
                'name' => 'Lẩu chay Vị Lai',
                'description' => 'Trong nhịp sống bộn bề của xã hội hiện đại, việc tự chuẩn bị những món lẩu chay ngon cho bữa ăn thường tốn nhiều thời gian từ chuẩn bị nguyên liệu đến khâu chế biến. Đặc biệt, với những người bị hạn chế về thời gian. Chính vì vậy, những nhà hàng phục vụ lẩu chay như Vị Lai là điểm đến hoàn hảo cho bạn.Đối với những người yêu thích ẩm thực chay, việc tìm được những địa điểm để thưởng thức lẩu chay ngon là điều khá khó khăn. Tại Hà Nội, dọc các con phố từ lớn đến nhỏ, các nhà hàng thưởng chỉ phục vụ những món lẩu mặn để đáp ứng nhu cầu của số đông. Chính vì thế, số lượng những cửa hàng phục vụ lẩu chay là rất ít.

Với mong muốn mang lại trải nghiệm hoàn hảo nhất về ẩm thực chay, Vị Lai đã đưa vào thực đơn của nhà hàng những món lẩu chay bổ dưỡng, đầy hương vị. Với thực đơn lẩu chay đặc sắc, Vị Lai mong rằng những phút giây hội họp, quây quần bên người thân và bạn bè sẽ thêm phần ấm cúng. Điều mà nhà hàng “thắp lên” sẽ không chỉ là một món lẩu chay đơn thuần, mà đó chính là hơi ấm, tình cảm giữa bạn và người thân bên bàn ăn.',
                'category_id' => '8',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 6,
                'image' => 'https://wna.cdnxbvn.com/wp-content/uploads/2020/07/cach-nau-lau-thai-chay.jpg',
                'price' => 500.000,
                'name' => 'Lẩu chay thái',
                'description' => 'Lẩu là món ăn đã quá quen thuộc trong nền ẩm thực Việt Nam, từ xuất hiện trong thực đơn món ngon đãi tiệc lớn cho đến những bữa ăn nhỏ hàng ngày. Vào những dịp gặp gỡ bạn bè, tụ họp gia đình, lẩu là món ăn dễ ăn với nhiều loại “topping” đa dạng.Với các thành phần quen thuộc xung quanh ta.',
                'category_id' => '8',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 7,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/05/lau-chay-chua-cay.jpg',
                'price' => 340.000,
                'name' => 'LẨU NẤM THIÊN NHIÊN CHUA CAY',
                'description' => 'https://amthucdochay.com/wp-content/uploads/2021/05/lau-chay-chua-cay.jpg',
                'category_id' => '8',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 8,
                'image' => 'https://tutrithuc.com/upload/img/ckeditor/22892.gif',
                'price' => 320.000,
                'name' => 'Lẩu nui chay',
                'description' => 'Nui xào chay là món ăn thanh đạm, dễ làm nhưng vẫn mang hương vị thơm ngon đặc biệt. Đây chắc chắn sẽ là lựa chọn tuyệt vời để làm mới thực đơn cho bữa cơm nhà bạn. Bắt tay vào cùng chế biến món ăn này với cách làm món nui xào chay được ẩm thực đồ chay giới thiệu nhé!Và chắc chắn trong số món ăn chế biến từ nui sẽ có món lẩu nui chay',
                'category_id' => '8',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 9,
                'image' => 'https://wna.cdnxbvn.com/wp-content/uploads/2021/01/lau-chao-khoai-mon-nau-chay.jpg',
                'price' => 210.000,
                'name' => ' lẩu khoai môn nấu chao chay',
                'description' => 'Món lẩu chao khoai môn là sự lựa chọn tuyệt vời cho những ngày ngán mặn thèm món chay thanh đạm. Vị ngọt của nước dùng béo ngậy của chao, bùi bùi của khoai môn, beo béo của đậu hủ, mùi thơm của gừng kết hợp với nấm ngon ngọt và các loại rau, tạo thành một nồi lẩu nóng hổi với mẹt rau tươi xanh trong thực đơn các món chay đãi tiệc khiến cho mọi người không thể chối từ.',
                'category_id' => '8',
                'created_at' => Carbon::now()
            ],[
                'id' => 10,
                'image' => 'https://cdn.huongnghiepaau.com/wp-content/uploads/2019/01/mon-canh-kim-chi-chay.jpg',
                'price' => 310.000,
                'name' => 'Lẩu nấm kim chi',
                'description' => 'Mùa chay, quanh đi quẩn lại cũng chỉ mỗi rau với đậu, bạn đang không biết phải ăn gì? Và bạn cũng chính là một tín đồ ẩm thực Hàn Quốc. Vậy tại sao bạn không thử nấu ngay món lẩu kim chi chay? Với nguyên liệu đơn giản, món lẩu xuất xứ Hàn Quốc này, hứa hẹn sẽ làm phong phú thực đơn bữa ăn gia đình và giúp bạn chinh phục được vị giác của cả những người khó tính nhất đấy',
                'category_id' => '8',
                'created_at' => Carbon::now()
            ],[
                'id' => 11,
                'image' => 'https://yummyday.vn/uploads/images/nam-rom-kho-dau-hu.jpg',
                'price' => 50.000,
                'name' => 'Đậu phụ xào nấm',
                'description' => 'Đậu hũ kho nấm rơm là món ăn thanh đạm khá quen thuộc đối với nhiều bữa cơm Việt của chúng ta, món ăn có thể được chế biến vào những ngày rằm, lễ hay chỉ đơn giản là bữa ăn hàng ngày.

Bởi tính thơm ngon và thanh đạm của món ăn cộng thêm nguyên liệu cũng như cách chế biến dễ dàng mà món đậu hũ kho nấm rơm ngày càng được nhiều người ưa chuộng, món ăn không chỉ đem lại cho chúng ta sự ngon, lạ miệng mà còn chứa hàm lượng dinh dưỡng cao.',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 12,
                'image' => 'https://image.thanhnien.vn/2048/uploaded/ngocthanh/2018_07_25/canh-muop-nam-rom-2_nbao.jpg',
                'price' => 20.000,
                'name' => 'mướp xào nấm rơm',
                'description' => 'Mưa mùa hạ đã về nhưng vắng bóng trẻ thơ tìm nhặt nấm rơm như chúng tôi thuở trước. Cuộc sống giờ sung túc hơn nên các bà nội trợ thường mua nấm rơm cấy trồng về chế biến bữa cơm gia đình. Với tôi cùng những người bạn thuở thiếu thời, dù được thưởng thức nhiều món ngon từ nấm rơm nhưng vẫn không thể quên tô canh nấm rơm nấu với mướp hương phảng phất mùi rơm rạ đồng quê ngày ấy.',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 13,
                'image' => 'https://monan.foodhub.vn/wp-content/uploads/2020/12/unnamed-1.jpg',
                'price' => 15.000,
                'name' => 'Đậu bắp nướng bơ chay',
                'description' => 'Đậu bắp không còn xa lạ với người nội trợ bởi lượng chất xơ dồi dào, ổn định đường trong máu, bảo vệ thận… Đậu bắp có vị thơm ngọt, mùi như bắp tự nhiên, thường được sử dụng cùng với nhiều món nướng. Hôm nay, Foodhub xin mách nhỏ bạn cách làm Đậu bắp nướng chay vô cùng đơn giản, một lựa chọn cho bữa ăn chay của gia đình hoặc người có nhu cầu ăn kiêng, giảm cân…',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 14,
                'image' => 'https://useful.vn/wp-content/uploads/2020/04/1551756183597_7922897.jpg',
                'price' => 35.000,
                'name' => 'Bún xào chay',
                'description' => 'Nếu đang muốn đổi vị bữa sáng hay có thêm một công thức mới cho thực đơn ăn chay nhà mình, bún xào chay sẽ là gợi ý phù hợp cho bạn đấy. Món ăn thanh đạm này có cách làm đơn giản với những nguyên liệu dễ mua nhưng vẫn rất giàu dinh dưỡng và cực kích thích vị giác.

Ngày nay, ăn chay đang là một xu hướng được đông đảo mọi người hưởng ứng và phổ biến trong các bữa ăn của các gia đình Việt. Ăn chay có nhiều tác dụng tốt cho sức khỏe, là một biện pháp giảm cân hiệu quả và ngăn ngừa được nhiều bệnh tật. Món chay ngon vì thế cũng được sáng tạo rất phong phú, đa đạng để đáp ứng nhu cầu ăn chay của các tầng lớp đa dạng.',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],[
                'id' => 15,
                'image' => 'https://suckhoedoisong.qltns.mediacdn.vn/Images/nguyenkhanh/2016/11/11/an_chay.jpg',
                'price' => 10.000,
                'name' => 'rau củ luộc',
                'description' => 'với caccs loại rau củ quả quanh ta chúng ta sẽ có ngay một đĩa rau củ quả luộc.không những thanh đạm mà còn bổ sung nhiều vitamin và chất sơ để bù đắp những khoáng chất mà cơ thể cần',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],[
                'id' => 16,
                'image' => 'http://www.elle.vn/wp-content/uploads/2016/03/17/dau-phu-xot-nam-cay.jpg',
                'price' => 50.000,
                'name' => 'Đậu hũ sốt chua ',
                'description' => 'Đậu sốt cà chua là món ăn đơn giản trong bữa cơm của gia đình. Mặc dù không có nhiều chất đạm, chất béo như trong thịt, cá nhưng món đậu sốt cà chua vẫn được nhiều gia đình lựa chọn trong những bữa cơm nhất là ngày hè nóng nực.

Đậu phụ hay còn gọi là đậu hũ sốt cà chua không những thơm ngon, hấp dẫn về hương vị mà còn thanh mát, nhẹ nhàng, dễ ăn và không bị ngán.',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],[
                'id' => 17,
                'image' => 'https://benhvienthammykangnam.vn/wp-content/uploads/2020/02/an-chay-giam-can.jpg',
                'price' => 30.000,
                'name' => 'Đậu hũ xào súp lơ',
                'description' => 'bạn nghĩ sao về 1 món ăn thơm ngon mà lại giòn của súp lơ',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 18,
                'image' => 'https://toplist.vn/images/800px/dau-phu-cuon-la-lot-387855.jpg',
                'price' => 35.000,
                'name' => 'Đậu phụ cuốn lá lốt',
                'description' => 'Đậu phụ cuốn lá lốt rất thích hợp để bạn dùng làm món chay đầu tháng. Đậu phụ béo ngậy, thoang thoảng mùi nấm hương và mộc nhĩ giòn sần sật khiến bạn có thể ăn rất nhiều mà không chán.
Theo Y học dân tộc, lá lốt vị cay, mùi thơm, tính rất ấm, có tác dụng trừ thấp, ấm bụng, tiêu thực, hạ khí trừ hôi tanh nên rất tốt cho sứa khỏe.
Khi ăn tùy sở thích bạn có thể dùng kèm tương ớt hoặc xì dầu chấm tùy khẩu vị. Tuy là một món chay nhưng đậu phụ cuốn lá lốt rất dễ ăn và thơm ngon không kém gì chả lá lốt thông thường nên bạn hãy làm cho cả gia đình được thưởng thức món ăn thanh đạm ngày đầu tháng nhé.',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],[
                'id' => 19,
                'image' => 'https://toplist.vn/images/800px/canh-dau-phu-rau-cu-41043.jpg',
                'price' => 40.000,
                'name' => 'Canh đậu phụ rau củ',
                'description' => 'Canh đậu phụ rau củ là món ăn chay không chỉ tốt cho sức khỏe mà còn rất thích hợp để ăn trong những ngày hè nóng bức, vị ngọt mát từ đậu phụ và các loại rau củ sẽ giúp bạn giải nhiệt cơ thể một cách hiệu quả.
Cách làm canh đậu phụ nấu rau củ ngon đơn giản dễ làm cực thanh mát lại đơn giản dễ thực hiện tại nhà. Với các nguyên liệu chính là đậu phụ và các loại rau củ tự nhiên như cà rốt, súp lơ,… rất tốt cho sức khỏe, các chị em sẽ tạo nên một món ăn cực ngon, cực mát cho bạn đấy.
Hơn nữa những loại rau củ này cực tốt giúp lọc cơ thể loại bỏ những chất độc hại rất tốt cho cả gia đình một cơ thể khỏe mạnh. ',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],[
                'id' => 20,
                'image' => 'https://cdn.daynauan.info.vn/wp-content/uploads/2019/05/sup-chay.jpg',
                'price' => 100.000,
                'name' => 'súp chay nấm',
                'description' => 'Súp chay dinh dưỡng có nhiều cách nấu khác nhau. Có thể bạn vẫn chưa biết nhưng súp chay cũng đa dạng không kém các loại súp mặn. Bạn có thể sử dụng các nguyên liệu phổ biến để nấu các món ăn chay hàng ngày như rau, củ, quả, các loại nấm để nấu thành món súp.',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],[
                'id' => 21,
                'image' => 'https://giamcanantoan.com/images/minhquan/thuocgiamcan/11-2013/ha-cao-chay.jpg',
                'price' => 100.000,
                'name' => '',
                'description' => 'Há cảo chay là món ngon giúp giảm cân hiệu quả được chọn cho thực đơn giảm cân với các món chay cho bữa xế của gia đình. Với vị thanh ngọt của rau củ, dai dai của bánh há cảo nóng hổi chấm với nước sốt tương ớt rất hấp dẫn người thưởng thức.',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],[
                'id' => 22,
                'image' => 'https://product.hstatic.net/1000232601/product/c_ch-l_m-m_n-c_i-th_a-x_o-n_m-d_ng-c_-4_1024x1024.jpg',
                'price' => 1,
                'name' => 'Cải thìa xào nấm đông cô',
                'description' => 'Sự kết hợp của hai loại nguyên liệu này trong món cải thìa xào nấm đông cô tạo nên món ăn vô cùng tốt cho sức khỏe mà lại rất ngon miệng. Vị ngon của món ăn càng thêm đậm đà hơn khi thêm nước xốt dầu hào và một ít vị mặn từ nước tương.
Cải thìa và nấm đông cô vô cùng tốt cho sức khỏe nên các bạn cũng nên bổ sung vào thực đơn nấu ăn của mình nhé!',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],[
                'id' => 23,
                'image' => 'https://thucduongbaoan.com.vn/wp-content/uploads/2021/08/Nem-Lui-Chay.jpg',
                'price' => 50.000,
                'name' => 'Nem lụi chay',
                'description' => 'Những chiếc nem lụi chay với mùi thơm đặc trưng của sả, kết hợp với phần nhân làm từ bột gạo thực dưỡng, bột yến mạch, bột mỳ nguyên cám, cà rốt, một số nguyên liệu và gia vị thực dưỡng. Là một món ăn giàu dinh dưỡng, có thể dùng cho các bữa tiệc hoặc bữa cơm gia đình hàng ngày.',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],[
                'id' => 24,
                'image' => 'https://afamilycdn.com/thumb_w/600/E88MOq9iOdccccccccccccjjVmV53G/Image/2016/09/Dau-hu-non-sot-chua-ngot%20(10)-571a1.jpg',
                'price' => 120.000,
                'name' => 'Đậu phụ sốt ớt chuông chua ngọt',
                'description' => 'Đậu phụ sốt chua ngọt là món ăn hấp dẫn rất nhiều tín đồ ẩm thực, nhưng với những người ăn chay hay những ngày ăn chay thì khẩu vị ấy được biến tấu thay thế bằng đậu phụ sốt chua ngọt để giúp họ thỏa lòng. Món ăn chắc chắn sẽ "hút mắt" các thành viên trong nhà bởi màu sắc tươi tắn và nước sốt óng ả, vị ngon thì miễn bàn rồi. Miếng đậu phụ chiên vàng giòn phủ đều một lớp sốt chua ngọt đẫm mượt trông vô cùng hấp dẫn, ăn kèm ớt chuông, dứa và hành tây đem đến sự ngon miệng pha chút thích thú.',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],[
                'id' => 25,
                'image' => 'https://cdn.tgdd.vn/Files/2018/12/14/1138156/cach-nau-xoi-lac-bang-noi-com-dien-cuc-nhanh-ma-ngon-6-760x367.jpg',
                'price' => 1,
                'name' => 'Xôi lạc',
                'description' => 'Từng hạt xôi căng bóng, mềm dẻo quyện với lạc mềm, bùi bùi tạo nên món ăn sáng thơm ngon, nhanh chóng trong thời kỳ giãn cách.Xôi dẻo thơm, căng mọng, lạc mềm bùi không khác gì đồ xôi bằng chõ.',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],[
                'id' => 26,
                'image' => 'https://toinayangi.vn/wp-content/uploads/2015/09/v%C3%A1ng-%C4%91%E1%BA%ADu-cu%E1%BB%99n-c%E1%BB%A7-t%E1%BB%AB.jpg',
                'price' => 40.000,
                'name' => 'Váng đậu cuộn chay',
                'description' => 'Nếu bạn muốn tìm hiểu một món ăn ngon cho ngày rằm chay tịnh hàng tháng thì váng đậu cuộn củ từ là một gợi ý thích hấp dẫn đấy. Váng đậu cuộn củ từ có vị dai giòn của váng đậu, vị mềm, bùi ngậy của củ từ cùng vị chua ngọt kích thích vị giác của nước sốt bên ngoài ngon miễn chê.',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],[
                'id' => 27,
                'image' => 'https://cdn.tuoitre.vn/thumb_w/586/2019/6/12/624279131944661881457794235875808796737536n-1560335838201357024960.jpg',
                'price' => 70.000,
                'name' => 'Cơm hấp lá sen',
                'description' => 'Trong các loại hoa hiếm có loại hoa nào được sử dụng được tất cả các bộ phận một cách đa dạng như hoa sen: hoa để cúng Phật và trang trí; lá để gói và hấp thực phẩm cho thơm; cánh hoa dùng ướp trà; hạt sen dùng làm mứt, nấu chè, trộn với cơm, ngó sen dùng làm gỏi; củ sen để hầm thịt, nhồi tôm thịt chiên; hoa sen để ướp trà....

Sen cũng được sử dụng để làm rất nhiều món trong cung đình Huế; điển hình là món cơm hấp lá sen mà ngày nay đã được phổ biến và yêu thích ở rất nhiều địa phương vì sự tinh tế và thanh tao của món ăn này',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],[
                'id' => 28,
                'image' => 'https://cdn.tgdd.vn/Files/2018/03/21/1076224/cach-lam-com-gao-lut-cuon-rong-bien-don-gian-nhung-giau-dinh-duong4.jpg',
                'price' => 40.000,
                'name' => 'Cơm gạo lứt cuộn rong biển',
                'description' => 'Bạn thường xuyên phải ăn cơm ở văn phòng hay cơm ngoài hàng và nhiều khi bạn cảm giác nó kém vệ sinh và thiếu dinh dưỡng. Hãy thưởng thức cơm gạo lứt cuộn rong biển đơn giản nhưng giàu dinh dưỡng cho bữa cơm văn phòng của mình nhé!',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],[
                'id' => 29,
                'image' => 'https://cdn.tgdd.vn/Files/2017/03/16/961372/ca-tim-chien-tam-nuoc-tuong-toi-la-mieng-dua-com-7_730x411.jpg',
                'price' => 35.000,
                'name' => 'Cà tím chiên tỏi ớt',
                'description' => 'bạn cảm giác nhàm chán khi ăn chay hãy thử ngay cà tím chiên tỏi ớt sẽ cho bạn 1 cảm giác ngon miệng hơn đấy!',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],[
                'id' => 30,
                'image' => 'https://atuankhang.vn/wp-content/uploads/2020/05/cach-lam-nam-dui-ga-kho.jpg',
                'price' => 50.000,
                'name' => 'nấm đùi gà kho',
                'description' => 'Nếu đã quá chán ngấy những món nhiều đạm như cá thịt thì hãy chuyển sang thưởng thức những món ăn làm từ rau củ nhé. Và nấm đùi gà kho chính là một món ăn hấp dẫn không kém.
Nấm đùi gà là thực phẩm cũng có nhiều chất dinh dưỡng như protein, vitamin rất tốt cho sức khỏe con người. Đặc biệt hơn, món ăn này bạn cũng có thể thay đổi khẩu vị cho những ngày ăn chay, ngày rằm sắp tới.',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],[
                'id' => 31,
                'image' => 'https://monngonsaigon.net/wp-content/uploads/2018/11/Mi%E1%BA%BFn-x%C3%A0o-%C4%91%E1%BA%ADu-ng%E1%BB%B1-th%C6%A1m-ngon-cho-ng%C3%A0y-chay.jpg',
                'price' => 50.000,
                'name' => 'miến xào đậu ngự',
                'description' => 'Các món ăn chay không chỉ có mỗi rau củ quả mà còn được chế biến đa dạng từ nhiều nguồn thực phẩm khác nhau, tạo nên nhiều món ăn mang hương vị hấp dẫn, thanh đạm và giàu dinh dưỡng. Nếu bạn vẫn băn khoăn không biết nên nấu món chay gì cho ngày rằm sắp tới thì hãy thử tham khảo qua món chay miến xào đậu ngự để thêm vào thực đơn ăn uống hàng ngày. Giúp bạn thay đổi khẩu vị và cảm thấy lạ miệng, ăn ngon hơn.',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],[
                'id' => 32,
                'image' => 'https://cdn.tgdd.vn/2020/08/CookRecipe/GalleryStep/tha%CC%80nh-pha%CC%89m-50.jpg',
                'price' => 45.000,
                'name' => 'Hoành thánh chay',
                'description' => 'Bữa sáng cần đầy đủ chất dinh dưỡng, hoành thánh chay rau củ vừa thơm ngon lại thanh đạm giúp cho cả ngày của bạn luôn tươi mát và đầy năng lượng.',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 33,
                'image' => 'https://monngonsaigon.net/wp-content/uploads/2018/12/Ch%E1%BA%BF-bi%E1%BA%BFn-m%C3%B3n-b%C3%BAn-g%E1%BA%A1o-x%C3%A0o-chao-%C4%91%E1%BB%8F-chay.png',
                'price' => 60.000,
                'name' => 'Bún gạo xào chao đỏ',
                'description' => 'Bún gạo là nguyên liệu không thể thiếu trong các món ăn ngon hàng ngày. Chỉ với 1 bịch bún gạo là bạn có thể chế biến thành đa dạng món ăn hấp dẫn để làm mới thực đơn ăn uống hàng ngày. Nếu bạn quá ngán với bún gạo xào rau củ như hàng ngày thì hãy thử qua món bún gạo xào chao đỏ chay. Với món bún gạo xào chao đỏ, bạn có thể thay thế cho bữa sáng hoặc ăn vào buổi chiều vừa giúp no bụng, ngon miệng lại cung cấp đầy đủ dinh dưỡng thiết yếu cho một ngày làm việc tràn đầy năng lượng.',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 34,
                'image' => 'https://monngonsaigon.net/wp-content/uploads/2018/12/S%C3%BAp-l%C3%A0-m%C3%B3n-%C4%83n-%C4%91%C6%B0%E1%BB%A3c-nhi%E1%BB%81u-ng%C6%B0%E1%BB%9Di-%C6%B0a-chu%E1%BB%99ng.jpg',
                'price' => 23.000,
                'name' => 'Súp chua cay chay',
                'description' => 'Súp chay là món ăn không thể thiếu trong thực đơn của những người muốn ăn chay. Súp chay thường được nấu từ các loại rau củ nên có vị thanh mát vừa có tác dụng bồi bổ sức khỏe vừa giúp giải nhiệt cho những ngày tiết trời se lạnh. Nếu bạn đang trong giai đoạn ăn chay và muốn đổi khẩu vị với món súp thì hãy thử qua món súp chua cay chay. Không chỉ dễ ăn mà súp chua cay chay còn giúp cân bằng đường huyết, làm ấm cơ thể và giải độc cơ quan tiêu hóa.',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 35,
                'image' => 'https://monngonsaigon.net/wp-content/uploads/2018/12/C%C6%A1m-sen-c%E1%BB%91m.jpg',
                'price' => 45.000,
                'name' => 'Cơm sen cốm',
                'description' => 'Cơm sen cốm là món ăn với cái tên vừa bình dị, dân dã vừa mang lại sự cao sang, quyền quý. Không chỉ là món ăn hấp dẫn cho người ăn chay mà phù hợp với mọi đối tượng muốn thay đổi khẩu vị hàng ngày. Đặc biệt cơm sen cốm còn có tác dụng thanh nhiệt, giải độc và rất tốt cho tim mạch,…Món ăn được kết hợp hài hòa từ hạt sen béo ngậy, các loại rau củ thanh mát và có mùi hương phảng phất giúp bữa cơm của gia đình bạn tràn ngập tình yêu thương, sự gắn kết giữa các thành viên trong gia đình với nhau.',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],[
                'id' => 36,
                'image' => 'https://monngonsaigon.net/wp-content/uploads/2018/12/3-3.jpg',
                'price' => 55.000,
                'name' => 'Canh bí đỏ rong biển',
                'description' => 'Canh bí đỏ rong biển là món ăn kết hợp hài hòa giữa hai nguyên liệu bí đỏ và rong biển. Trong đó, bí đỏ chứa hàm lượng vitamin cao, có tác dụng chữa bệnh nên phù hợp với nhiều người. Rong biển là nguyên liệu chứa nhiều dinh dưỡng và rất tốt cho sức khỏe nên được nhiều người chế biến thành nhiều món ăn hấp dẫn. Rong biển thường được nấu chung với nhiều loại nguyên liệu bổ dưỡng như: hạt sen, đậu hũ, bí đỏ, nấm,…',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],[
                'id' => 37,
                'image' => 'https://cdn.daotaobeptruong.vn/wp-content/uploads/2019/12/ha-cao.jpg',
                'price' => 70.000,
                'name' => 'Bánh há cảo chay',
                'description' => 'Há cảo (Shrimp Dumplings) hoặc dimsum. Là món ăn quen thuộc trong ẩm thực Trung Hoa, có nguồn gốc từ Triều Châu, Trung Quốc và được dùng phổ biến trong các bữa ăn sáng, điểm tâm. Há cảo gồm 2 phần là vỏ và nhân bánh. Vỏ bánh được làm từ bột mì, bột năng, nhân bánh có thể là tôm, thịt hoặc các loại rau, củ, quả. Há cảo dễ chế biến, dễ ăn, có thể dùng làm món khai vị, ăn chay hay ăn mặn đều hợp.

Những chiếc há cảo được chăm chút tỉ mỉ xuất hiện nhiều trong những dịp đặc biệt, lễ Tết của các gia đình Trung Hoa vì họ quan niệm há cảo tượng trưng cho sự may mắn, đoàn tụ, hình dáng của những chiếc há cảo chính là cầu nối cho tiền tài, cuộc sống sung túc, đủ đầy quanh năm.',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 38,
                'image' => 'https://monngonsaigon.net/wp-content/uploads/2018/12/1-7.jpg',
                'price' => 1,
                'name' => 'Sushi đậu hũ',
                'description' => 'Sushi là một trong những món ăn nổi tiếng của nền ẩm thực Nhật Bản được làm từ các nguyên liệu tươi ngon, hình thức đẹp mắt và hương vị đa dạng phong phú khiến nhiều người mê mẩn món ăn này. Nếu bạn là tín đồ của các món ăn chay thì bạn vẫn có thể thưởng thức món sushi chay ngon miệng và đầy đủ dinh dưỡng.',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],[
                'id' => 39,
                'image' => 'https://monngonsaigon.net/wp-content/uploads/2018/12/1-16.jpg',
                'price' => 90.000,
                'name' => 'Củ sen xào ngũ vị',
                'description' => 'Củ sen là một trong những nguyên liệu chứa nhiều công dụng tuyệt vời không phải ai cũng biết. Nguyên liệu này vừa có tác dụng thanh nhiệt, tiêu sưng, giúp bổ khí huyết, giúp ăn ngon và ngủ ngon cùng nhiều tác dụng tuyệt vời đối với sức khỏe. Nhiều người thường sử dụng củ sen để chế biến thành nhiều món ăn hấp dẫn như chiên xào, nướng, dùng nấu chè,…Chính vì chứa nhiều công dụng như vậy nên  chúng tôi xin giới thiệu  món củ sen xào ngũ vị vô cùng hấp dẫn, cho bữa cơm hàng ngày của bạn đậm đà, đầy đủ dinh dưỡng .',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 40,
                'image' => 'https://monngonsaigon.net/wp-content/uploads/2018/12/2-15.jpg',
                'price' => 30.000,
                'name' => 'gỏi cuốn chay',
                'description' => 'Gỏi cuốn chay là món ăn thanh mát được rất nhiều người ăn chay ưa chuộng bởi không chỉ được làm từ nguyên liệu rau củ tươi sạch, thuần chay đầy đủ chất dinh dưỡng mà còn giúp người ăn luôn cảm thấy nhẹ bụng, ăn ngon miệng không kém gì so với các loại gỏi cuốn mặn.Thay vì ăn cuốn từ các loại thịt, hải sản thì bạn hãy thử qua món cuốn rau đậu hũ để thay đổi khẩu vị và thanh lọc cơ thể và cải thiện sức khỏe tốt hơn.',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ],[
                'id' => 41,
                'image' => 'https://cdnmedia.thethaovanhoa.vn/Upload/tyTrfgkgEUQwPYuvZ4Kn1g/files/2020/03/2403/5ryuy.jpg',
                'price' => 20.000,
                'name' => 'Bánh trôi chay',
                'description' => 'Chắc chắn bạn sẽ cần một đĩa bánh trôi chay vào ngày tết Hàn thực',
                'category_id' => '2',
                'created_at' => Carbon::now()
            ],[
                'id' => 42,
                'image' => 'https://banhchungngon.vn/wp-content/uploads/2015/09/banh-chung-chay.jpg',
                'price' => 20.000,
                'name' => 'bánh chưng nhân đậu ',
                'description' => 'Bánh Chưng chay là bánh Chưng cổ truyền, nhân chay, vị ngọt, gồm các nguyên liệu: gạo nếp, đỗ xanh, gấc tươi, dừa, bí đao, hạt sen, vừng, nước hoa bưởi. Tất cả đều được làm từ nguyên liệu sạch, không dùng chất bảo quản, đảm bảo vệ sinh an toàn thực phẩm. Bánh ăn rất mềm, dẻo, thơm, ngọt dịu, bày lên đẹp mắt.',
                'category_id' => '2',
                'created_at' => Carbon::now()
            ],[
                'id' => 43,
                'image' => 'https://thucthan.com/media/2018/05/banh-bao-chay/banh-bao-chay.jpg',
                'price' => 10.000,
                'name' => 'bánh bao chay',
                'description' => 'Bánh bao chay được người Trung Quốc phát minh từ khá lâu rồi, món này thường dùng để mọi người làm món điểm tâm hoặc làm món ăn vặt. Đối với các Phật Tử thì việc dùng bánh bao chay thay cho các bữa ăn chính. Mặt khác cách làm bánh bao chay cũng khá dễ và đơn gian nên được nhiều người ưa thích, vả lại nó được làm từ bột mì nên rất gần gủi với chúng ta nên ăn hoài mà không biết chán.',
                'category_id' => '2',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 44,
                'image' => 'https://cdn.tgdd.vn/2020/10/CookRecipe/GalleryStep/thanh-pham-363.jpg',
                'price' => 10.000,
                'name' => 'Bánh bao trà xanh',
                'description' => 'bạn muốn ăn chay mà không nhàm chán ! bạn hay thử bánh bao trà xanh của chúng tôi',
                'category_id' => '2',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 45,
                'image' => 'https://cdn.daylambanh.edu.vn/wp-content/uploads/2019/08/banh-ran-ngot-hap-dan-600x400.jpg',
                'price' => 2.000,
                'name' => 'Bánh rán mè ',
                'description' => 'Những hôm trời se lạnh, được ngồi cạnh bếp than hồng vừa rán bánh vừa nhâm nhi chiếc bánh tròn nhỏ xinh, giòn tan và ngọt bùi trong miệng thì thú vị không gì bằng.

Bánh rán lúc lắc được làm từ các nguyên liệu là những sản vật từ đồng quê của Việt Nam như: bột nếp, đậu xanh, đường và vừng trắng. Vỏ bánh làm bằng bột nếp, còn nhân bánh làm bằng đậu xanh.',
                'category_id' => '2',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 46,
                'image' => 'https://vnn-imgs-f.vgcloud.vn/2018/03/05/12/tro-tai-lam-banh-nep-chay-nhin-la-muon-an-ngay.jpg',
                'price' => 3.000,
                'name' => 'Bánh nếp chay ',
                'description' => 'Những hôm trời se lạnh, được ngồi cạnh bếp than hồng vừa rán bánh vừa nhâm nhi chiếc bánh tròn nhỏ xinh, giòn tan và ngọt bùi trong miệng thì thú vị không gì bằng.

Bánh rán lúc lắc được làm từ các nguyên liệu là những sản vật từ đồng quê của Việt Nam như: bột nếp, đậu xanh, đường và vừng trắng. Vỏ bánh làm bằng bột nếp, còn nhân bánh làm bằng đậu xanh.',
                'category_id' => '2',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 47,
                'image' => 'https://wikiohana.net/wp-content/uploads/2019/10/huong-dan-lam-banh-dau-xanh-nuong.jpg',
                'price' => 40.000,
                'name' => 'Bánh đậu xanh nướng',
                'description' => 'Bánh đậu xanh là một loại bánh (bánh ngọt) làm từ bột đậu xanh quết nhuyễn với đường và dầu thực vật hay mỡ động vật, thường là mỡ lợn. Bánh được cắt thành từng khối vuông nhỏ, gói giấy bạc thành hộp nhỏ, lớn hay gói giấy thấm mỡ thành từng thỏi vàng. Bánh thường được dùng khi uống trà tàu hay chè xanh, khi đó sẽ tạo cảm giác thư thái. Địa phương làm bánh đậu xanh nổi tiếng là Hải Dương.',
                'category_id' => '2',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 48,
                'image' => 'https://thanglongdaoquan.vn/wp-content/uploads/le-vu-lan-lam-banh-gi-1.jpg',
                'price' => 30.000,
                'name' => 'Bánh mật',
                'description' => 'Xưa nay, quà quê có nhiều loại bánh trái, như bánh nếp, bánh tẻ, bánh sắn, bánh khoai, bánh gai, bánh rán… cùng những thứ bánh thông dụng kia, từ cầu chợ cho đến quán hàng còn phải kể đến bánh mật. Bánh mật, tên gọi đã dễ hiểu, là làm từ mật mía. Trước kia, đường không có hoặc khan hiếm chỉ có mật từ các làng nghề đem về bán ở chợ phiên mà thôi.',
                'category_id' => '2',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 49,
                'image' => 'https://afamilycdn.com/k:thumb_w/400/Qalypm8xccccccccccccW2vZ1VroR/Image/2013/11/25/7-763a8/am-long-voi-mon-banh-mat-dan-da.jpg',
                'price' => 20.000,
                'name' => ' Bánh mật vàng',
                'description' => 'Bánh vàng óng màu mật mía và thơm mùi gừng, ăn rất ấm bụng, đặc biệt đây là một món ăn nhẹ đơn giản dễ làm rất thích hợp trong tiết trời lạnh. Bánh mật ngon nhất khi ăn nóng, xắn từng thìa nhỏ cho vào miệng, hít hà vì hơi nóng, miếng bánh dẻo thấm đẫm vị ngọt của mật mía quyến luyến trong miệng, món này tuy ngọt mà không dễ ngán bởi còn có sự góp mặt của vị cay nhẹ, thơm nồng từ gừng.',
                'category_id' => '2',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 50,
                'image' => 'https://cdn.tgdd.vn/2020/06/CookProduct/1-1200x676-5.jpg',
                'price' => 40.000,
                'name' => ' Bánh bao nhân bí đỏ',
                'description' => 'Món bánh bao bí đỏ với phần nhân thơm mịn cùng lớp vỏ bánh mềm, ngọt ngào chắc chắn sẽ làm mọi thực khách say mê chỉ trong 1 lần thưởng thức',
                'category_id' => '2',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 51,
                'image' => 'https://file.hstatic.net/200000079049/file/banh-kem-trai-cay-1_dd6ab0ea55844c1fa81071bdf6c1bcbf_grande.jpg',
                'price' => 150.000,
                'name' => 'Bánh kem cam',
                'description' => 'Hương vị trái cây tươi chua ngọt hòa quyện với cốt bánh mềm mịn, béo ngậy. Mới nghe thôi cũng đã cảm thấy hấp dẫn rồi chẳng trách tại sao bánh kem trái cây lại được nhiều người thích thú đến vậy.',
                'category_id' => '2',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 52,
                'image' => 'https://cdn.tgdd.vn/2020/08/CookProduct/75-1200x676.jpg',
                'price' => 40.000,
                'name' => 'https://cdn.huongnghiepaau.com/wp-content/uploads/2019/03/banh-trung-thu-dau-xanh.jpg',
                'description' => 'Tết Trung thu còn gọi là Tết Đoàn viên, đây là dịp để mọi người trong gia đình sum vầy bên nhau cùng thưởng thức chiếc bánh trung thu nhỏ xinh trong ngày Rằm tháng 8 nhưng không phải ai cũng hiểu được ý nghĩa của chiếc bánh này.
Bánh Trung thu có nguồn gốc xuất xứ từ Trung Quốc và được truyền bá đến Việt Nam. Cứ đến ngày Rằm tháng 8, người dân Việt không ai quên mua những chiếc bánh Trung thu nhỏ xinh về để cúng bàn thờ tổ tiên, sau đó cùng nhau thưởng thức. Ngày Tết Trung thu cũng được coi là ngày lễ lớn thứ 3 trong năm tại Việt Nam.',
                'category_id' => '2',
                'created_at' => Carbon::now()
            ],
            [
            'id' => 53,
            'image' => 'http://www.vikybomi.com.vn/upload/images/info/lam-banh-xeo-chay-banh-khot-chay-trong-mua-vu-lan.jpg',
            'price' => 15.000,
            'name' => 'Bánh xèo chay',
            'description' => 'Ăn chay trong tháng Vu Lan (tháng 7 âm lịch) đã trở thành phong tục tín ngưỡng của tất cả phật tử trong nước. Món chay ngày nay cũng phong phú hơn và được chế biến cầu kỳ hơn để đảm bảo dinh dưỡng và nhu cầu đa dạng về hình thức trong văn hóa ẩm thực.

Bánh xèo chay, bánh khọt chay - một món bánh truyền thống được cải biên, tuy giản đơn nhưng hết sức hấp dẫn thực khách trong mùa Vu Lan.',
            'category_id' => '2',
            'created_at' => Carbon::now()
        ],
            [
                'id' => 54,
                'image' => 'https://pastaxi-manager.onepas.vn/content/uploads/articles/2amthuc/amthuccuocsong/9monchay16/9-mon-chay-2.jpg',
                'price' => 10.000,
                'name' => 'Bánh đa nem chay',
                'description' => 'Bánh đa nem chay là món ăn biến thể từ món nem với những loại nguyên liệu quen thuộc như miến, trứng, tôm, thịt,... Đối với những bữa cơm chay thì đây là món bánh chay ngon không thể thiếu bởi nó đại diện cho món nem truyền thống và sức hấp dẫn khó để chối từ. ',
                'category_id' => '2',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 55,
                'image' => 'https://afamilycdn.com/2019/8/5/banh-dau-xanh-5-15650159260661416119018.jpg',
                'price' => 1,
                'name' => 'Bánh đậu ngày vu lan',
                'description' => 'Bánh đậu xanh là món bánh ngọt được nhiều người yêu thích. Bánh thơm ngon lại có vị ngọt thanh nhẹ vừa miệng. Tạo hình bánh khá đẹp mắt, rất thích hợp chế biến vào ngày lễ Vu Lan.',
                'category_id' => '2',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 56,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWMVA3iu6QzST8zwN8nExjDBzU2dx9MDGPhg&usqp=CAU',
                'price' => 30.000,
                'name' => 'Bánh giò chay',
                'description' => 'trong những ngày tết vu lan báo hiếu chắc không thể thiếu món bánh giò chay.Với truyền thông vuông tượng trưng cho trời tròn tượng trưng cho đất của người dân việt nam nên chúng tôi đã làm nên món bánh để trưng thờ vào dịp lễ này',
                'category_id' => '2',
                'created_at' => Carbon::now()
            ],[
                'id' => 57,
                'image' => 'https://tinlogi.com/wp-content/uploads/2020/03/cach-lam-banh-troi-banh-chay-ngu-sac-03-24-tinlogi.jpg',
                'price' => 1,
                'name' => 'Bánh trôi chay màu thập cẩm',
                'description' => 'Mâm cúng bạn sẽ sặc sỡ hơn khi có những đĩa bánh trôi chay được tẩm màu tự nhiên ',
                'category_id' => '2',
                'created_at' => Carbon::now()
            ],[
                'id' => 58,
                'image' => 'https://minhhouseware.com.vn/wp-content/uploads/2020/12/kho-qua-xao-dau-hu-ca-rot-chay-recipe-main-photo.jpg',
                'price' => 45.000,
                'name' => 'khổ qua xào đậu phụ',
                'description' => 'Rau củ là món thường nhật có mặt trong món chay, kết hợp cà rốt, bắp, khổ qua tạo một món rau củ cho bữa chay đủ chất. Bổ sung vitamin A, chất sắt từ cà rốt thêm nguồn vitamin C dồi dào, nguồn Protein thay thế thịt từ khổ qua sẽ giúp người ăn chay có một hệ miễn dịch tốt nhất.',
                'category_id' => '3',
                'created_at' => Carbon::now()
            ],[
                'id' => 59,
                'image' => 'https://minhhouseware.com.vn/wp-content/uploads/2020/12/dua-chuot-muoi-chay.jpg',
                'price' => 70.000,
                'name' => 'dưa chuột muối',
                'description' => 'Lượng nước chứa đến 90%, ngoài ra là hàng loạt các khoáng chất, vitamin cần bổ sung vào cơ thể mỗi ngày mà ăn chay cần có như:
– Chất xơ, vitamin C, vitamin B1, B2, B5, B6, vitamin V3,
– Folic acid, magie, canxi, kali, sắt, kẽm…',
                'category_id' => '3',
                'created_at' => Carbon::now()
            ],[
                'id' => 60,
                'image' => 'https://minhhouseware.com.vn/wp-content/uploads/2020/12/bap-cai-cuon-chay.jpg',
                'price' => 30.000,
                'name' => 'bắp cải cuốn',
                'description' => 'Thực phẩm này là rất thấp trong chất béo bão hòa và cholesterol. Nó cũng là một nguồn tốt của thiamin , canxi , sắt, magiê , phốt pho và kali. Đồng thời một nguồn rất tốt của chất xơ , Vitamin C , Vitamin K , Vitamin B6 , folate và mangan.',
                'category_id' => '3',
                'created_at' => Carbon::now()
            ],[
                'id' => 61,
                'image' => 'https://minhhouseware.com.vn/wp-content/uploads/2020/12/khoai-tay-xao.jpg',
                'price' => 35.000,
                'name' => 'khoai tây xào',
                'description' => 'Trong củ khoai tây chứa một nguồn dồi dào xơ và các khoáng chất cần thiết như Vitamin B6 và kali, và một nguồn rất tốt của Vitamin C. Khoai tây chứa ít Chất béo bão hòa, cholesterol và natri nên rất tốt cho tim mạch.',
                'category_id' => '3',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 62,
                'image' => 'https://minhhouseware.com.vn/wp-content/uploads/2020/12/dau-co-ve-xao-vung.jpg',
                'price' => 35.000,
                'name' => 'đậu cove xào gừng',
                'description' => 'Đậu cô ve không chỉ có chứa nhiều nguyên tố vi lượng như protein, canxi, sắt, mà còn có nhiều kali, magie, ít natri.',
                'category_id' => '3',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 63,
                'image' => 'https://minhhouseware.com.vn/wp-content/uploads/2020/12/dau-bap-xao-dau-hanh.jpg',
                'price' => 30.000,
                'name' => 'đậu bắp dầu hành',
                'description' => 'Đậu bắp rất giàu vitamin K, vitamin B, sắt, kali, kẽm, canxi, mangan và magiê… giúp tạo ra nhiều tế bào hồng cầu trong cơ thể. Đây là món giúp bổ sung chất sắt cho người ăn chay thường rất thiếu.',
                'category_id' => '3',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 64,
                'image' => 'https://minhhouseware.com.vn/wp-content/uploads/2020/12/nam-rom-kho-tieu.jpg',
                'price' => 60.000,
                'name' => 'nấm rơm kho tiêu',
                'description' => 'một món ăn rất giàu dinh dưỡng và đầy sựu tinh tế chắc chắn bạn sẽ rất hài lòng về món này',
                'category_id' => '3',
                'created_at' => Carbon::now()
            ],[
                'id' => 65,
                'image' => 'https://minhhouseware.com.vn/wp-content/uploads/2020/12/canh-bi-do-nuoc-cot-dua.jpg',
                'price' => 90.000,
                'name' => 'Canh bí đỏ nước cốt dừa',
                'description' => 'một món ăn rất bổ cho máu và mắt được lấy nguyên liệu từ những gì xung quanh ta và thân thuộc nhất với người dân việt nam',
                'category_id' => '3',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 66,
                'image' => 'https://minhhouseware.com.vn/wp-content/uploads/2020/12/nam-rom-chien-gion.jpg',
                'price' => 1,
                'name' => 'nấm rơm chiên chay',
                'description' => 'Thực đơn tiếp tục đến món nấm rơm chiên chay .nấm rơm rất giàu dinh dưỡng dừ chiên qua dầu nhưng vẫn dữ nguyên độ dinh dưỡng cần thiết ',
                'category_id' => '3',
                'created_at' => Carbon::now()
            ],[
                'id' => 67,
                'image' => 'https://img-global.cpcdn.com/recipes/a72a12103f3d6f8a/680x482cq70/mi-xao-n%E1%BA%A5m-h%C6%B0%C6%A1ng-rau-c%E1%BB%A7-chay-recipe-main-photo.webp',
                'price' => 50.000,
                'name' => 'Mì xào nấm hương rau củ (chay)',
                'description' => 'sự kết hợp giữa mì và nấm cho ta một món ăn giàu dinh dưỡng và thơm ngon .quí khách có thể lựa chọn cúa loại nấm và các loại mì tùy vào khẩu vị của quí khách',
                'category_id' => '3',
                'created_at' => Carbon::now()
            ],[
                'id' => 68,
                'image' => 'https://hapivegan.com/wp-content/uploads/2021/04/2-xao-300x199.jpg.webp',
                'price' => 60.000,
                'name' => 'Rau quả xào chay',
                'description' => 'Từ lâu món ăn chay không còn xa lạ đối với chúng ta nữa ,nó xuất hiện hàng ngày trên mâm cơm gia đình không phải chỉ những ngày ăn chay ,những ngày đầu tháng nữa.Món chay hiện nay được chế biến rất công phu và trang trí đẹp mắt khiến người nhìn là muốm ăn ngay không chỉ thế mà còn rất ngon rất lạ nữa nhé.Đã xuất hiện những nhà hàng đồ ăn chay ở khắp mọi nơi và nhà hàng nào cũng hút khách và đem lại sự ưng ý cho khách.Món chay ngày càng độc đáo đã có rất nhiều chuyên gia nghiên cứu chế biến ra món ăn ngon và hấp dẫn .Trong gia đình ,có rất nhiều gia đình đã sử dụng món chay để đãi khách trong những ngày đặc biệt như giỗ tết,cưới hỏi,..và được thực khách đón nhận hết sức nhiệt tình và vui vẻ.Thực đơn món chay vô cùng đa dạng cũng có gà ,cá, và vô vàn những món ăn đặc sắc khác.Hôm nay chúng tôi sẽ giới thiệu với các bạn một món chay vô cùng đơn giản mà ngon phù hợp với những món ăn hàng ngày đó là món rau củ xào thập cẩm.Nghe đã thấy ngon và hấp dẫn đúng không các bạn.',
                'category_id' => '3',
                'created_at' => Carbon::now()
            ],[
                'id' => 69,
                'image' => 'https://hapivegan.com/wp-content/uploads/2021/04/3-chien-300x223.jpg.webp',
                'price' => 120.00,
                'name' => 'nấm bào ngư chiên giòn',
                'description' => 'Không thể thiếu trong danh sách chính là món nấm bào ngư lăn bột chiên giòn. Món ăn này dễ gây nghiện với vị ngọt ngọt, dai ngon của nấm.

Ưu điểm khác nữa là thời gian chế biến cũng cực kỳ nhanh. Món ăn này sẽ là đồ nhắm tuyệt vời cùng với bia trong các buổi tụ họp đồng nghiệp, bạn bè.',
                'category_id' => '3',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 70,
                'image' => 'https://hapivegan.com/wp-content/uploads/2021/04/10-mon-cai-thao.jpg.webp',
                'price' => 50.000,
                'name' => 'cải thảo xào dâm',
                'description' => 'Cải thảo là loại rau có chứa nhiều chất dinh dưỡng, vừa có công hiệu thanh nhiệt vừa giúp chữa bệnh hiệu quả, thích hợp dùng vào những ngày nắng nóng.vì thế cải thảo rất được ưa chuộng ở Hàn Quốc cải thảo xào dấm sẽ loại bỏ được vị hăng của cải thảo giúp hoàn thiện món ăn hơn ',
                'category_id' => '3',
                'created_at' => Carbon::now()
            ],[
                'id' => 71,
                'image' => 'https://media.cooky.vn/recipe/g6/51467/s320x320/cooky-recipe-637127054246059487.JPG',
                'price' => 45.000,
                'name' => 'đậu bắp xào chay',
                'description' => 'Một mùa hè nữa sắp đến, nắng hè tuy vàng ruộm, rực rỡ nhưng cũng mang theo cái nóng nực và oi ả đặc trưng. Là thực đơn thanh nhiệt không thể thiếu trong mùa này, các món xào chay là lựa chọn hàng đầu của nhiều gia đình. Vậy món đậu bắp xào chay nên nấu theo công thức nào sao cho thật nhanh chóng mà vẫn ngon miệng',
                'category_id' => '3',
                'created_at' => Carbon::now()
            ],
            [
            'id' => 72,
            'image' => 'https://cdn.tgdd.vn/2020/07/CookRecipe/Avatar/ca-tim-kho-tieu-chay-thumbnail.jpg',
            'price' => 50.000,
            'name' => 'cà tím xào chay',
            'description' => 'bạn muốn 1 món ăn vừa ngon miệng vừa quen thuộc ? cà tím xào chay sẽ là 1 lựa chọn hoàn hảo',
            'category_id' => '3',
            'created_at' => Carbon::now()
        ],[
            'id' => 73,
            'image' => 'https://img-global.cpcdn.com/recipes/5f2d0e28d865d2c1/680x482cq70/cleaneating-v%E1%BB%9Bi-rau-c%E1%BB%A7-lu%E1%BB%99c-recipe-main-photo.jpg',
            'price' => 40.000,
            'name' => 'rau củ quả luộc',
            'description' => 'một đĩa rau củ quả luộc giúp bạn dễ dàng trang trí cho mâm cơm của bạn. Và chắc chắn là nó có đủ các dưỡng chất thiết yếu cho cơ thể',
            'category_id' => '3',
            'created_at' => Carbon::now()
        ],
            [
                'id' => 74,
                'image' => 'https://nhahanghuongsen.com.vn/wp-content/uploads/2018/04/mang-tay-nuong-gion-2.jpg',
                'price' => 200.000,
                'name' => 'măng tây nướng',
                'description' => 'Măng tây được coi là thứ rau "hoàng đế" vì chứa lượng dinh dưỡng cao và có khả năng chống phòng chống ung thư. Măng tây thường được sử dụng như một món ăn đơn thuần nhưng với cách nướng này sẽ đem lại cho măng tây vị mới lạ',
                'category_id' => '3',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 75,
                'image' => 'https://img-global.cpcdn.com/recipes/aeee251061b3d3fa/1200x630cq70/photo.jpg',
                'price' => 250.000,
                'name' => 'măng tây xào',
                'description' => 'Măng tây xào chay là một món ăn chay dân giã với hương vị đậm đà không kém gì những món chế biến từ tôm, thịt, cá,.. Với món ăn này, mâm cỗ ngày Tết sẽ chẳng còn ngán ngẩm với đầy ắp thịt nữa mà đảm bảo đây sẽ là món hết đầu tiên đó. Đĩa măng tây xào thơm ngon, giòn giòn. Từng ngọn măng tây được xếp gọn gàng, đẹp mắt, làm tăng vẻ sang trọng cho bàn ăn ngày Tết ai cũng phải khen ngợi đó. ',
                'category_id' => '3',
                'created_at' => Carbon::now()
            ],
            [
            'id' => 76,
                'image' => 'https://chefofking.net/wp-content/uploads/2019/03/C%E1%BA%A3i-th%C3%ACa-x%C3%A0o-n%E1%BA%A5m-%C4%91%C3%B9i-g%C3%A0-1.jpg',
                'price' => 70.000,
                'name' => 'cải thìa xào nấm đùi gà',
                'description' => 'Nấm và rau, sự kết hợp tưởng chừng đơn điệu nhưng đầy đủ dưỡng chất cho bữa cơm gia đình. Không cần quá nhiều chất đạm trong một thực đơn, đây là sự chọn lựa lý tưởng nhất của bạn.',
                'category_id' => '3',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 77,
                'image' => 'https://hapivegan.com/wp-content/uploads/2021/04/10-mon-an-cha-bap.jpg.webp',
                'price' => 60.000,
                'name' => 'chả bắp',
                'description' => 'Chả bắp thơm giòn cho cơm chay ngày Rằm thêm ngon.Món chả bắp giòn nhẹ, dẻo dẻo vị bắp non, kết hợp với vị bơ béo béo thơm mùi hành lá quả thực vô cùng hấp dẫn!',
                'category_id' => '3',
                'created_at' => Carbon::now()
            ], [
                'id' => 78,
                'image' => 'https://cdn.tgdd.vn/2020/08/CookProduct/thum-1200x676-2.jpg',
                'price' => 90.000,
                'name' => 'khổ qua cà ớt',
                'description' => 'được du hưởng từ người hoa nhưng về việt nam đặc biệt là miền nam khi phong trào ăn chay vào nhưng ngày lẽ lớn thì 1 nồi khổ qua cà ớt sẽ cho tay thấm sự âm em của ngày lẽ tết',
                'category_id' => '3',
                'created_at' => Carbon::now()
            ], [
                'id' => 79,
                'image' => 'https://mynuong.com/giachanh/?qa=blob&qa_blobid=5437840590598784916',
                'price' => 40.000,
                'name' => 'bắp cải xào cà chua',
                'description' => 'Bắp cải xào cà chua là món ăn đơn giản, có thể xếp vào nhón món ăn chay vì không có thịt cá.  Món này có cà chua chua ngọt ngọt, bắp cải giòn, ngon ngọt, khi kết hợp với nhau sẽ rất ngon miệng và giảm cảm giác ngon miệng, vị ngon hơn gấp đôi so với bắp cải bào sợi và trứng xào cà chua.',
                'category_id' => '3',
                'created_at' => Carbon::now()
            ], [
                'id' => 80,
                'image' => 'https://cdn.beptruong.edu.vn/wp-content/uploads/2019/07/su-hao-ca-rot-muoi-chua.jpg',
                'price' => 60.000,
                'name' => 'su hào muối',
                'description' => 'Cách muối su hào cà rốt giới thiệu dưới đây với hương vị tươi mát, chua ngọt nhẹ dịu, giòn dai sẽ hấp dẫn người ăn một cách khó cưỡng. Còn chần chừ gì mà bạn không thử ngay để bữa ăn thường ngày trở nên ngon miệng hơn bao giờ hết.',
                'category_id' => '3',
                'created_at' => Carbon::now()
            ], [
                'id' => 81,
                'image' => 'https://monngonbinhdinh.vn/Images/files/c%C3%A1%20chay%20gi%E1%BA%A3%20m%E1%BA%B7n.jpg',
                'price' => 120.000,
                'name' => 'Cá chay giả mặn',
                'description' => 'ngày nay có rất nhiều người giảm béo hoặc đi theo phật giáo không chuyên thường sử dụng các món ăn giả mặn để cho một cảm giấc gần gũi khi ăn chay cũng như mất đi cảm giác thèm ăn mặn .cá giả mặn là món ăn được làm hoàn toàn từ bột và các loại rau củ hay sử dụng trong phật môn',
                'category_id' => '4',
                'created_at' => Carbon::now()
            ], [
                'id' => 82,
                'image' => 'https://phatphapungdung.com/wp-content/uploads/2019/03/co-nen-dat-ten-mon-chay-gia-man-hay-khong.jpg',
                'price' => 160.000,
                'name' => 'gà chay giả mặn',
                'description' => ' bạn cần một cỗ gà nhưng gia đình bạn ăn chay vào ngày lễ tết hãy thử ngay gà chay giả mặn của chung tôi sẽ khiến bạn hài lòng  ',
                'category_id' => '4',
                'created_at' => Carbon::now()
            ], [
                'id' => 83,
                'image' => 'https://photo-cms-kienthuc.zadn.vn/zoomh/800/uploaded/yenp/2016_02_22/Mon%20chay%20gia%20man/9-mon-chay-gia-man-cho-ngay-ram-thang-gieng-Hinh-9.jpg',
                'price' => 110.000,
                'name' => 'bò viên chay kho thập cẩm',
                'description' => 'Món này được chế biên bằng cách kho các viên thịt bò chay đóng gói với các loại rau củ quả như dứa, dưa leo, cà chua, hành tây… giúp cân bằng chất khi không có thịt hay là cá ở trong món ăn nhưng vẫn đảm bảo đủ chất',
                'category_id' => '4',
                'created_at' => Carbon::now()
            ], [
                'id' => 84,
                'image' => 'https://photo-cms-kienthuc.zadn.vn/zoomh/800/uploaded/yenp/2016_02_22/Mon%20chay%20gia%20man/9-mon-chay-gia-man-cho-ngay-ram-thang-gieng.jpg',
                'price' => 150.000,
                'name' => 'thịt chay',
                'description' => 'Thịt quay chay: Món chay giả mặn này có lớp vỏ ngoài làm từ bánh mỳ, lớp mỡ từ bột cốt dừa và phần thịt nạc là chả lụa chay.Rất phù hợp cho các bữa ăn chay lâu ngày hoặc các ngyaf lễ tết',
                'category_id' => '4',
                'created_at' => Carbon::now()
            ], [
                'id' => 85,
                'image' => 'https://photo-cms-kienthuc.zadn.vn/zoomh/800/uploaded/yenp/2016_02_22/Mon%20chay%20gia%20man/9-mon-chay-gia-man-cho-ngay-ram-thang-gieng-Hinh-2.jpg',
                'price' => 50.000,
                'name' => 'mề chay',
                'description' => 'Mề chay: Nguyên liệu chính của món này là các loại bột được tạo hình tương tự như mề gà thái hoa. Mề chay thường được chế biến thành món mề chay xào thập cẩm.thay vì dùng mề gà hoặc vịt chúng tôi sủ dung các loại nâm có hương vị và độ dai giống như là mề ga để tạo sự hoàn hảo nhất của món ăn',
                'category_id' => '4',
                'created_at' => Carbon::now()
            ], [
                'id' => 86,
                'image' => 'https://meta.vn/Data/image/2019/07/24/cach-nau-pho-chay-1.jpg',
                'price' => 30.000,
                'name' => 'Phở chay nấm hương',
                'description' => 'Phở chay là món ăn thơm ngon, rất thích hợp cho những người ăn chay hoặc phật tử phật giáo vào những ngày rằm, mùng một',
                'category_id' => '5',
                'created_at' => Carbon::now()
            ], [
                'id' => 87,
                'image' => 'http://linhsonphatgiao.com/static/2018/09/phochay.jpg',
                'price' => 35.000,
                'name' => 'phở chay nấm đùi gà',
                'description' => 'nước ta phở được coi là món ăn quốc dân của mọi người .phở thường được nấu từ nuocs cốt bò hoặc lơn .đối với người ăn chay chúng tôi đã len sẵn thực đơn :phở chay nấm đùi gà một món ăn không thẻ thiếu cho người ăn chay vào những ngày đầu tháng',
                'category_id' => '5',
                'created_at' => Carbon::now()
            ], [
                'id' => 88,
                'image' => 'https://cdn.tgdd.vn/Files/2020/04/24/1251567/cach-nau-pho-chay-don-gian-thanh-dam-thom-ngon-k.jpg',
                'price' => 40.000,
                'name' => 'phở chay',
                'description' => 'Phở chay với nước dùng thanh ngọt từ rau củ hầm và các loại hương liệu sẽ là món ngon mới để bạn có thể thêm vào sổ tay món ăn ngày Lễ Vu Lan năm nay. Với cách làm đơn giản bạn sẽ có ngay một tô phở chay thơm ngon cho bữa điểm tâm sáng, vừa lạ miệng lại vừa bổ dưỡng.',
                'category_id' => '5',
                'created_at' => Carbon::now()
            ], [
                'id' => 89,
                'image' => 'http://bestslim.org/wp-content/uploads/2014/02/an-sang-voi-pho-chay-giup-giam-can-hieu-qua-p1.jpg',
                'price' => 40.000,
                'name' => 'phở chay',
                'description' => 'Món phở chay từ lâu đã được nhiều thực khách yêu thích bởi hương vị thơm ngon, thanh đạm từ các loại rau củ lại dinh dưỡng. Chính vì thế dù không phải là ngày rằm hay mồng 1, nhiều người vẫn lựa chọn phở chay để chế biến và chiêu đãi gia đình. Hiểu được nhu cầu này, chúng tôi xin được gửi đến bạn cách nấu phở chay ngon từ rau củ đơn giản',
                'category_id' => '5',
                'created_at' => Carbon::now()
            ], [
                'id' => 90,
                'image' => 'https://noinauphodien.vn/wp-content/uploads/2018/10/C%C3%A1ch-n%E1%BA%A5u-ph%E1%BB%9F-chay-n%E1%BA%A5m-la-h%C3%A1n-th%C6%A1m-ng%E1%BB%8Dt-711x400.jpg',
                'price' => 40.000,
                'name' => 'phở chay nấm',
                'description' => 'Đầu tháng là lúc bạn cần những món chay để tâm hồn thanh tịnh. Đôi khi cũng vừa giúp bạn có thể thay đổi khẩu vị khi đã quá chán với những món dầu mỡ hàng ngày. Trong bài viết này, Bếp Top sẽ hướng dẫn bạn 3 cách nấu phở chay thơm ngon chả khác gì phở thường mà lại không bị “ngấy” do dầu mỡ.',
                'category_id' => '5',
                'created_at' => Carbon::now()
            ], [
                'id' => 91,
                'image' => 'https://image.cooky.vn/recipe/g6/53893/s/864abb8b-5edb-4dce-838f-0f6d566f3d48.jpeg',
                'price' => 40.000,
                'name' => 'phở chay',
                'description' => 'Phở chay là một trong những món ngon được rất nhiều gia đình yêu thích và thường xuyên chế biến cho mâm cơm của gia đình. Món ăn vừa thơm ngon lại chứa đầy đủ chất dinh dưỡng. Cách thức thực hiện thì lại vô cùng đơn giản. Các bạn hãy cùng theo dõi bài viết dưới đây để hiểu rõ hơn về cách thực hiện món phở chay nhé.',
                'category_id' => '5',
                'created_at' => Carbon::now()
            ], [
                'id' => 92,
                'image' => 'https://cosopho.com/wp-content/uploads/2020/12/Cach-nau-pho-chay-0.jpg',
                'price' => 50.000,
                'name' => 'phở chay',
                'description' => ' Phở chay là món ăn tuyệt ngon trong những ngày rằm, mùng 1. Cách nấu phở chay thơm ngon, đậm đà sẽ giúp mọi người cùng gia đình mình thưởng thức món ăn tuyệt ngon này cùng gia đình.',
                'category_id' => '5',
                'created_at' => Carbon::now()
            ], [
                'id' => 93,
                'image' => 'https://cdn.huongnghiepaau.com/wp-content/uploads/2019/01/pho-xao-chay.jpg',
                'price' => 1,
                'name' => 'miến chay',
                'description' => 'Phở xào chay được thực hiện theo phương pháp Hướng Nghiệp Á Âu (HNAAu) giới thiệu bên dưới, chắc chắn sẽ trở nên vô cùng hấp dẫn và ngon miệng đấy.

Với từng sợi phở mềm thơm ăn kèm cùng các loại rau, củ, nấm, đậu thanh đạm, phở xào chay thực sự là một món ăn tuyệt vời dành cho những ngày rằm mà bất kỳ ai cũng không nên bỏ qua. ',
                'category_id' => '5',
                'created_at' => Carbon::now()
            ], [
                'id' => 94,
                'image' => 'https://phohuynhtram.com/wp-content/uploads/2018/06/anh_2_151.jpg',
                'price' => 40.000,
                'name' => 'phở chay đậu hũ',
                'description' => 'Phở chay là một trong những món ngon được rất nhiều gia đình yêu thích và thường xuyên chế biến cho mâm cơm của gia đình. Món ăn vừa thơm ngon lại chứa đầy đủ chất dinh dưỡng. Cách thức thực hiện thì lại vô cùng đơn giản. Các bạn hãy cùng theo dõi bài viết dưới đây để hiểu rõ hơn về cách thực hiện món phở chay nhé.',
                'category_id' => '5',
                'created_at' => Carbon::now()
            ], [
                'id' => 95,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWzIKR6-UdIfwpxh_vjx2o3mj9tWwm-JxXHA&usqp=CAU',
                'price' => 40.000,
                'name' => 'phở chay gia truyền GM',
                'description' => 'làm phở chay là truyền thống của bao gia đình đặc trưng của phở luôn là giữu được cái thuần túy của phở',
                'category_id' => '5',
                'created_at' => Carbon::now()
            ], [
                'id' => 96,
                'image' => 'https://danviet.mediacdn.vn/upload/1-2019/images/2019-02-14/Cach-lam-mien-xao-chay-cho-ngay-ram-cach-lam-mien-xao-chay-1-1550116798-width960height912.jpg',
                'price' => 25.000,
                'name' => 'miến xào chay',
                'description' => 'trong thời gian ăn chay rất dễ có cảm giác nhàm chán giữa các món .vậy nên nhà hàng chúng tôi luốn xen kẽ các thực đơn giúp khách hàng luôn giữ được mạch ăn chắc chắn sẽ có món miến xào ',
                'category_id' => '5',
                'created_at' => Carbon::now()
            ], [
                'id' => 97,
                'image' => 'https://i.ytimg.com/vi/lGYsgVZP94U/maxresdefault.jpg',
                'price' => 40.000,
                'name' => 'miến trộn chay',
                'description' => 'Miến trộn hay gỏi Miến là Miến trộn với các loại rau củ quả và Nấm thập cẩm. Món ăn này hơi giống Miến trộn Hàn Quốc và cũng hơi giống Miến trộn Thái Lan. Món Miến trộn Chay rất ngon này dành cho người ăn chay lẫn ăn mặn đều được. Đây là món ăn để dành cho những ngày sau Tết khi chúng ta đã ăn khá nhiều thịt và Mỡ',
                'category_id' => '5',
                'created_at' => Carbon::now()
            ], [
                'id' => 98,
                'image' => 'https://img.chebienmonngon.net/2017/04/mien-xao-chay-4.jpg',
                'price' => 35.000,
                'name' => 'miến xào chay',
                'description' => 'Miến xào chay là món ăn ngon và thanh đạm, nó rất thích hợp cho những ngày mùng 1, ngày rằm hay những ngày gia đình bạn muốn cải thiện thực đơn. Bắt mắt với nhiều sắc màu rau củ, thơm thơm mùi nước tương, lại nhẹ bụng và tốt cho sức khỏe, đây là một lựa chọn lý tưởng cho gia đình bạn.',
                'category_id' => '5',
                'created_at' => Carbon::now()
            ], [
                'id' => 99,
                'image' => 'https://monngonmoingay.com/wp-content/uploads/2015/08/8_MienXaoChay_CQC4935.png',
                'price' => 30.00,
                'name' => 'miến xào chay',
                'description' => 'Bạn đang tìm một công thức món chay dễ nấu? Hãy thử chiêu đãi cả nhà món Miến xào chay nhé! Bắt mắt với nhiều sắc màu rau củ, thơm thơm mùi nước tương, lại nhẹ bụng và tốt cho sức khỏe, đây là một lựa chọn lý tưởng cho những ngày ăn chay.',
                'category_id' => '5',
                'created_at' => Carbon::now()
            ], [
                'id' => 100,
                'image' => 'https://img-global.cpcdn.com/recipes/6750cba2190dc788/1200x630cq70/photo.jpg',
                'price' => 50.000,
                'name' => 'canh miến',
                'description' => 'Ngày nay, các món chay đã không còn xa lạ đối với mọi người nữa rồi, bởi không những là sự đổi vị thanh đạm, mới lạ mà còn tốt cho sức khỏe thì ai mà không thích mê cơ chứ!nhân đây nhà hàng xin giới thiệu về món canh miến chay',
                'category_id' => '5',
                'created_at' => Carbon::now()
            ], [
                'id' => 101,
                'image' => 'https://cdn.tgdd.vn/2020/09/CookRecipe/Avatar/chao-nam-chay-thumbnail.jpg',
                'price' => 30.000,
                'name' => 'cháo chay nấm bào ngư',
                'description' => 'Món cháo nấm bào ngư chay có vị ngọt thanh vừa thơm ngon, lạ miệng lại giàu dinh dưỡng giúp cung cấp chất đạm và nhiều khoáng chất khác cho cơ thể.',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ], [
                'id' => 102,
                'image' => 'https://cdn.tgdd.vn/2020/07/CookProduct/Webp.net-resizeimage(7)-1200x676-1.jpg',
                'price' => 40.000,
                'name' => 'cháo rau củ chay',
                'description' => 'Món cháo nhẹ bụng nhưng lại chứa nhiều chất xơ cực tốt cho hệ tiêu hóa và sức khỏe mọi người đấy. Nghe đã hấp dẫn rồi đúng không nào',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 103,
                'image' => 'https://img-global.cpcdn.com/recipes/461ca1b4edec5be0/1200x630cq70/photo.jpg',
                'price' => 40.000,
                'name' => 'cháo nấm đông cô',
                'description' => 'Cháo nấm Đông  có thành phần chính từ gạo chất lượng được chọn lựa kỹ lưỡng với quy trình sản xuất hiện đại giúp cháo nở đều, chín mềm sau khi nấu.
Nấm Đông cô và gia vị như muối ăn, đường, dầu cọ, nước tương, hành, tỏi, rau sấy,… tạo nên hương vị cháo đậm đà, kích thích vị giác, phù hợp khẩu vị của đa số người tiêu dùng.
Sản phẩm sử dụng nguyên liệu tự nhiên, đảm bảo sức khỏe người tiêu dùng.',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ], [
                'id' => 104,
                'image' => 'http://cdn.tgdd.vn/Files/2017/12/29/1054201/cach-nau-chao-thap-cam-chay-thom-ngon-tot-cho-suc-khoe1_760x367-300x200.jpg',
                'price' => 40.000,
                'name' => 'cháo bắp chay',
                'description' => ' Chỉ với những nguyên liệu đơn giản, dễ mua như gạo, bắp, nấm, đậu hủ, khoai tây, hạt sen… là chúng ta  đã có thể bắt tay vào bếp nấu món ngon thanh đạm này rồi. Tuy là đồ chay nhưng độ thơm ngon và giá trị dinh dưỡng của món cháo chay thập cẩm vẫn không thua kém gì các món cháo mặn.',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ], [
                'id' => 105,
                'image' => 'https://chefofking.net/wp-content/uploads/2018/12/chao-nam-cot-dua-chay.jpg',
                'price' => 30.000,
                'name' => 'cháo nấm cốt dừa',
                'description' => 'ác loại nấm và rau củ nấu cháo chay với nước cốt dừa là một món phổ biến ở miền Tây. Mình có dịp về xứ dừa Bến Tre ở nhà của một gia đình theo đạo Cao Đài ăn chay trường, được các cô nấu cho ăn món cháo này, lâu lâu nhớ mùi vị đó nên thực hành lại. Đổi vị với món chay ngon miệng với món cháo ngồ ngộ này bạn nhé.',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ], [
                'id' => 106,
                'image' => 'http://monchay.com/wp-content/uploads/2014/10/c%C3%A1ch-n%E1%BA%A5u-ch%C3%A1o-th%E1%BA%ADp-c%E1%BA%A9m-chay.jpg',
                'price' => 50.000,
                'name' => 'cháo thập cẩm chay',
                'description' => 'Bát cháo chay nóng hổi với vị ngọt thơm của hạt sen bùi bùi, thêm mùi thơm của nấm hương và đậu phụ rán, điểm thêm hạt gạo mềm và béo béo của đỗ xanh sẽ là món chay ngon thay thế tốt cho những bữa cơm chay.
Thi thoảng các bạn cũng nên thay đổi thực đơn ăn chay của mình bằng những món như cháo chay thập cẩm dưới đây chẳng hạn. Với nguyên liệu và cách chế biến món cháo chay này vẫn đảm bảo cả về độ thơm ngon cũng như thành phần dinh dưỡng, đặc biệt với những người ăn thuần chay.',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ], [
                'id' => 107,
                'image' => 'https://media.healthplus.vn/thumb_x650x382/Images/Uploaded/Share/2015/12/26/am-long-chao-nam-chay-mua-dong11451284353.jpg',
                'price' => 45.000,
                'name' => 'cháo nấm đùi gà',
                'description' => 'thay vào các loại thịt thì chúng tôi đưa vào đó là các loại nấm vào để thay thế hương vị cũng như các chất cần có trong món cháo',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ], [
                'id' =>108,
                'image' => 'https://khds.1cdn.vn/thumbs/562x331/2021/04/28/chao-hoa-cuc-muop-dang-tri-kiet-ly.jpg',
                'price' => 30.000,
                'name' => 'cháo hoa cúc',
                'description' => 'Cháo hoa cúc, mướp đắng giúp thanh nhiệt giải độc, nhuận phế sinh tân, dùng làm đồ ăn trong những ngày nóng nực, bị đi kiết, phiến khát',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ], [
                'id' => 109,
                'image' => 'https://afamilycdn.com/Images/Uploaded/Share/2009/09/26/chaobi.jpg',
                'price' => 40.000,
                'name' => 'cháo đậu xanh bí đỏ',
                'description' => 'Cháo bí đỏ nấu với đậu xanh, gạo nếp rất bổ dưỡng, giàu vitamin làm đẹp da và tóc. Món này thích hợp cho bữa ăn sáng hoặc ăn nhẹ buổi chiều.',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 110,
                'image' => 'https://emvaobep.com/wp-content/uploads/2018/04/cach-nau-hat-sen-tuoi.jpg',
                'price' => 60.000,
                'name' => 'cháo hạt sen',
                'description' => 'háo hạt sen nấm chay có hương vị thanh nhẹ mà rất khó quên, rất phù hợp để chế biến vào những ngày ý nghĩa hay những buổi sáng đầu tháng, ngày rằm',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ], [
                'id' => 111,
                'image' => 'https://www.sendaiviet.com/wp-content/uploads/2016/06/chao-hat-sen.png',
                'price' => 100.000,
                'name' => 'cháo nấm hạt sen',
                'description' => 'Hạt sen là một trong những nguyên liệu được sử dụng phổ biến trong nhiều món ăn và rất bổ dưỡng cho sức khỏe.Nhưng phổ biến nhất chắc là cháo hạt sen',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ], [
                'id' => 112,
                'image' => 'https://daubepgiadinh.vn/wp-content/uploads/2019/01/chao-ngo-thit-lon-bam.jpg',
                'price' => 35.000,
                'name' => 'cháo ngô giã nhuyễn',
                'description' => 'Ngô không phải là một loại thực phẩm hiếm thấy trong bữa cơm gia đình hàng ngày. Nhiều mẹ đã biết đến món cháo ngô ngọt cho bé ăn dặm để giúp bé bổ sung dinh dưỡng. Trong ngô có rất nhiều dưỡng chất tốt cho sức khỏe. Ngô có lợi ích ngang với nhiều loại ngũ cốc khác, giàu chất xơ, vitamin, các khoáng chất và chất chống oxy hóa',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ], [
                'id' => 113,
                'image' => 'https://2.bp.blogspot.com/-mOW5kXt3lSo/WMJj7cFy70I/AAAAAAAABB8/Uo2TuCXEMxwlNyTDBcD59eNfgyD4KAUHACLcB/s320/Yen%2BMach.jpg',
                'price' => 40.000,
                'name' => 'cháo yến mạch chay',
                'description' => 'Đây là loại yến mạch được tuốt trực tiếp từ thân lá và đã bóc sạch vỏ nên bạn có thể chế biến và dùng được ngay.

Để yến mạch chín đều và không bị dai thì bạn nên nấu với thật nhiều nước (tỷ lệ 3 phần nước 1 phần yến mạch) và thường mất khoảng 50 phút để yến mạch chín hoàn toàn.',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ], [
                'id' => 164,
                'image' => 'https://hitavegan.com/wp-content/uploads/2019/10/hita-chay-chao-yen-mach-1.jpg',
                'price' => 40.000,
                'name' => 'cháo yến mạch bí đỏ',
                'description' => 'dù chỉ thêm vào bí đỏ nhưng về hàm lượng dinh dưỡng sẽ tăng lên rất nhiều',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 114,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTv5LMhRcyDe5fU49Q7K9vWBqdSavbksLpK4A&usqp=CAU',
                'price' => 70.000,
                'name' => 'cháo chay Ngọc Bích',
                'description' => 'Giống như cái tên của nó vậy rất đẹp mắt và thơm ngon tạo ra sự quý phái khi gọi tên',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ], [
            'id' => 115,
            'image' => 'http://img.over-blog-kiwi.com/2/00/37/06/20160910/ob_85fca6_chao-nam-dau-phu.JPG',
            'price' => 50.000,
            'name' => 'cháo chao nấu đậu phụ',
            'description' => 'cháo nấu châu đậu phụ rất phổ biến với người dân miền bắc .nấu với chao sẽ giúp người ăn cam thấy bớt nhàm chán khi thưởng thức',
            'category_id' => '6',
            'created_at' => Carbon::now()
        ],
            [
                'id' => 116,
                'image' => 'https://ducankitchen.com/wp-content/uploads/2017/12/supbido-featured.jpg',
                'price' => 37.000,
                'name' => 'cháo bí đỏ',
                'description' => 'Cứ đến mùa đông là bụng dạ mình lại thèm bí đỏ. Hết bánh mì bí đỏ thơm nức một góc phòng đến món mì ý sốt bí đỏ ngon lành. Mà chẳng hiểu sao, ăn bí mãi không thấy ngán. Sáng ra lạnh bụng, mình nghĩ ngay đến món súp nóng hổi, vừa thổi vừa ăn.',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 117,
                'image' => 'https://www.choxom.vn/fileserver/images/smartweb_default/resize-1200x0/upload/media/M5b1f9558ec971/chaonamtram.jpg',
                'price' => 40.000,
                'name' => 'cháo nấm tràm',
                'description' => 'những ai đã thưởng thức món cháo này chắc sẽ không bào giờ quên mùi vị của nó',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 118,
                'image' => 'https://i.vietgiaitri.com/2020/5/24/nau-chao-nam-rom-thanh-dam-thom-ngon-ai-an-cung-me-047-4955637.jpg',
                'price' => 50.000,
                'name' => 'cháo nấm',
                'description' => 'bạn sẽ không cảm thấy nhàn chán khi nhưng ngày lễ ăn chay kéo dài',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 119,
                'image' => 'https://congthucmonngon.com/wp-content/uploads/2021/09/chao-nam-moi-ngot-thom-thanh-dam.jpg',
                'price' => 70.000,
                'name' => 'cháo nấm mối',
                'description' => 'Không cần thịt thà, chỉ cần túi nấm mối là bạn cũng đủ giúp nồi cháo thơm ngon lại đủ chất rồi.',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ],[
                'id' => 120,
                'image' => 'http://dauanchotre.com.vn/wp-content/uploads/2016/02/chao_nam_cho_be1.jpg',
                'price' => 70.000,
                'name' => 'cháo nấm đông cô',
                'description' => 'vì sao bạn nên chọn cháo nấm đông cô ư ?? Nấm đông cô có tác dụng hỗ trợ hệ tiêu hóa, tăng cường hệ miễn dịch nên đây là một thực phẩm lý tưởng trong mùa lạnh',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ],[
                'id' => 121,
                'image' => 'https://monngonmoingay.com/wp-content/uploads/2021/01/goi-cuon-chay-cham-xot-dau-phong-500.jpg',
                'price' => 30.000,
                'name' => 'gỏi cuốn',
                'description' => 'Với các nguyên liệu thanh đạm, và đặc biệt là nước chấm “xốt đậu phộng” béo béo, bùi bùi làm món Gỏi Cuốn Chay thêm ngon, ăn hoài không chán đó nha!',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],[
                'id' => 122,
                'image' => 'https://media.cooky.vn/images/blog-2016/cach-lam-goi-cuon-chay-cho-ngay-ram-7.JPG',
                'price' => 25.000,
                'name' => 'bánh cuốn',
                'description' => 'Gỏi cuốn chay bạn đã được thưởng thức chưa? Ngày rằm sắp đến thử làm món gỏi cuốn chay này cho cả nhà thưởng thức đổi vị xem sao nhé! Nước chấm là linh hồn của món gỏi cuốn, trong công thức này, Cooky sẽ hướng dẫn bạn cách làm gỏi cuốn và cả bí quyết làm nước chấm ngon đến giọt cuối cùng.',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],[
                'id' => 123,
                'image' => 'https://cdn.24h.com.vn/upload/3-2018/images/2018-08-21/Bi-quyet-lam-goi-cuon-chay-thanh-mat-cho-bua-toi-la-mieng-1-1534842005-227-width500height332.jpg',
                'price' => 50.000,
                'name' => 'bánh cuốn chay ngày vu lan',
                'description' => 'Món gỏi cuốn chay là sự kết hợp hài hòa của nhiều loại rau củ mang đến vị ngon lạ miệng. Chưa kể, món ăn này cũng dễ thực hiện nên nó trở thành sự lựa chọn của nhiều bà nội trợ trong mùa Vu Lan',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 124,
                'image' => 'https://cdn.beptruong.edu.vn/wp-content/uploads/2018/06/goi-cuon-chay.jpg',
                'price' => 40.000,
                'name' => 'gỏi cuốn chay',
                'description' => 'Gỏi cuốn chay là món ăn vặt rất dễ làm mà bạn hoàn toàn có thể tự thực hiện tại nhà vào những ngày rằm. Cùng với hướng dẫn cách làm gỏi cuốn chay ngon, Beptruong.edu.vn sẽ giúp bạn cách làm tương chấm gỏi cuốn cũng hấp dẫn không kém. Những ngày rằm ăn chay, dùng thêm vài cuốn gỏi lót bụng bữa xế hoặc ăn vặt cùng mọi người cũng rất ngon đấy, đúng không nào?',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 125,
                'image' => 'https://bep360.net/wp-content/uploads/2016/07/cach-lam-goi-cuon-chay.jpg',
                'price' => 40.000,
                'name' => 'gỏi cuốn Thanh Nga',
                'description' => 'Là một món ăn chay ngon với cách làm đơn giản, gỏi cuốn chay chắc chắn sẽ làm gia đình bạn bất ngờ về độ ngon của nó',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 126,
                'image' => 'https://cdn.beptruong.edu.vn/wp-content/uploads/2013/09/nom-thap-cam-chay.jpg',
                'price' => 50.000,
                'name' => 'nộm rau củ',
                'description' => 'Nộm luôn là một trong những món khai vị phổ biến được rất nhiều người yêu thích vì vừa dễ ăn lại kích thích vị giác cực kỳ tốt. Với cách làm nộm thập cẩm chay ngon đơn giản sau đây, chị em sẽ có thêm bí quyết mới trổ tài khéo tay nội trợ khiến cả nhà ai cũng phải trầm trồ thán phục đấy!',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 127,
                'image' => 'https://wna.cdnxbvn.com/wp-content/uploads/2020/12/10-mon-goi-chay-tuyet-dinh.jpg',
                'price' => 70.000,
                'name' => 'gỏi ngó sen',
                'description' => 'Gỏi ngó sen trộn với nước mắm chay vị chua chua, ngọt ngọt, giòn rất thơm ngon',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 128,
                'image' => 'http://imgs.vietnamnet.vn/Images/vnn/2014/08/06/16/20140806162854-8.jpg',
                'price' => 45.000,
                'name' => 'nộm chay thập cẩm',
                'description' => 'Món nộm chay thập cẩm vừa ngon lại thanh mát, dễ làm, nếu thích chị em hãy đặt mua trong ngày rằm sắp tới nhé!',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 129,
                'image' => 'https://cdn.tgdd.vn/2020/07/CookRecipe/Avatar/goi-mit-non-chay-thumbnail.jpg',
                'price' => 50.000,
                'name' => 'gỏi mít non chay',
                'description' => 'ỏi mít non chay là món gỏi trộn ngon và lạ miệng, cách làm lại hết sức đơn giản',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 130,
                'image' => 'https://cdn.bepcuoi.com/media/650-425-nom-chay-tam-sac-bepcuoi-2.jpg',
                'price' => 60.000,
                'name' => 'nộm chay tam sắc',
                'description' => 'Cuối tuần là dịp bạn bè tụ họp để tâm sự ăn uống vui vẽ....để suy nghĩ món ăn nào để hấp dẫn cũng là điều khó khăn, món nộm hay còn gọi là gỏi thì là lựa chọn xuất sắc phải không nào. Biến tấu 1 chút là ta trộn gia vị đều hết các nguyên liệu rồi trang trí thật đẹp khi nào ăn thì chúng ta mới trộn đều và thưởng thức thôi... nào cùng vào bếp với mẹ chinhtruong làm món nộm chay tam sắc nhe, món này khi ăn thì rất đậm đà, rau củ thì vẫn giòn giòn... đảm bảo sẽ rất thú vị.',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],[
                'id' => 131,
                'image' => 'https://cdn.beptruong.edu.vn/wp-content/uploads/2018/05/goi-du-du-chay.jpg',
                'price' => 50.000,
                'name' => 'gỏi đu đu',
                'description' => 'Gỏi đu đủ chay thường được sử dụng để làm món khai vị trong các bữa tiệc, cỗ. Với tín đồ Phật giáo, gỏi đu đủ chay còn là món ăn dùng cùng cơm ngon miệng vào ngày Rằm. Món gỏi chay này có đầy đủ các vị chua cay mặn ngọt, kích thích vị giác người ăn. Thông thường, gỏi đu đủ chay thường được dùng kèm với bánh tráng hoặc bánh phồng tôm để thêm phần ngon miệng.',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],[
                'id' => 132,
                'image' => 'https://i.pinimg.com/originals/88/9c/c5/889cc5499b1d91ee7e23628bda98d500.jpg',
                'price' => 60.000,
                'name' => 'goi thập cẩm nấm',
                'description' => 'thay vì dùng các loại thịt thông thường chung tôi thay vào đó là các loại nấm khác nhau để tạo ra mùi huongw riêng biệt',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],[
                'id' => 133,
                'image' => 'https://lacongaithattuyet.vn/wp-content/uploads/2019/07/cach-lam-nom-hoa-chuoi-chay-ngon-1.jpg',
                'price' => 60.000,
                'name' => 'nộm hoa chuối',
                'description' => 'chắc hoa chuối không còn xa lạ gì với người dân Việt Nam không những cho kinh tế về quả mà hoa chuối còn được tận dụng để làm các món nộm gỏi',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 134,
                'image' => 'https://cdn.jamja.vn/blog/wp-content/uploads/2018/01/cach-lam-nom-hoa-chuoi-chay-voi-lac-5.jpg',
                'price' => 70.000,
                'name' => 'nộm hoa chuối',
                'description' => 'Trong các ngày rằm hoặc ngày cuối tháng âm lịch thì món ăn dân dã nộm hoa chuối chay luôn được các bà nội trợ lựa chọn làm một món trên bàn ăn. Món ăn thanh đạm mà dân dã này đã được biết đến qua rất nhiều đời nay nhưng đến thời điểm bây giờ nó vẫn luôn chiếm được sự yêu thích của rất nhiều người. Hiện nay, dù cuộc sống có đầy đủ không thiếu các món ăn sang trọng và đắt tiền nhưng người ta không thể bỏ qua món nộm hoa chuối chay vừa thanh đạm vừa dễ làm mà không thấy chán. Ngoài ra còn có thể sử dụng các nguyên liệu khác kết hợp với hoa chuối một cách phù hợp cũng sẽ tạo ra một món nộm độc đáo và bổ dưỡng.',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 135,
                'image' => 'https://image.meovathay.vn/upload/2020/06/09/660/nom-goi-rau-ma-chay-thom-ngon-bo-duong-0.jpg',
                'price' => 40.000,
                'name' => 'gỏi rau má',
                'description' => 'Gỏi rau má giòn ngon, bổ dưỡng sẽ làm phong phú thêm thực đơn bữa chay của gia đình bạn',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 163,
                'image' => 'https://cdn.beptruong.edu.vn/wp-content/uploads/2020/03/nom-hoa-chuoi.jpg',
                'price' => 50.000,
                'name' => 'nộm hoa chuối',
                'description' => 'Nộm hoa chuối là món ăn dân dã, mang đậm hương vị thôn quê nên được nhiều người ưa chuộng. Thậm chí nó còn phổ biến trong thực đơn của các nhà hàng, quán ăn lớn nhỏ trên cả nước. Cùng vào bếp để biết cách làm nộm hoa chuối giòn ngon, thanh mát cho bữa cơm ngày hè nhé.',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 136,
                'image' => 'https://nhahangmocnhien.vn/webs_image/uploads/goi-cuon-chay.jpg',
                'price' => 50.000,
                'name' => 'gỏi cuốn chay',
                'description' => 'Bạn đã từng thưởng thức qua món gỏi cuốn chay chưa? Nếu chưa thì tại sao bạn không thử làm món gỏi cuốn chay này cho gia đình thưởng thức để đổi khổi vị xem sao nhé',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 137,
                'image' => 'https://media.loveitopcdn.com/5823/20-banh-hoi-cuon-chay-min.jpg',
                'price' => 60.000,
                'name' => 'gỏi cuốn cải ',
                'description' => 'Bánh cuốn chay chín vừa, không bị khô mà trông ươn ướt rất đẹp, nhân bánh thì khỏi chê, chả lụa, củ sắn, cà rốt, nấm mèo, nấm hương xào lẫn vào nhau tạo thành một loại nhân thơm ngon, chấm cả miếng bánh vào chén nước tương có ớt xắt lát thơm lừng… Ôi thôi mới nghe thôi đã thèm lắm rồi.',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 138,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/05/lam-pho-cuon-chay-thom-ngon-1024x564-1.jpg',
                'price' => 50.000,
                'name' => 'phở cuốn chay',
                'description' => 'Món phở cuốn chay là món ăn chay ngon được nhiều người ưa thích bởi hương vị thơm ngon cũng như cách chế biến đơn giản',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],[
                'id' => 139,
                'image' => 'https://monngonmoingay.tv/wp-content/uploads/2019/01/cach-lam-mon-nem-cuon-chay-ngon-khong-an-mot-lan-se-hoi-han.jpg',
                'price' => 60.000,
                'name' => 'nem cuốn chay',
                'description' => 'Món nem cuốn chay được rất nhiều người cả ăn chay lẫn ăn mặn đều rất ưa thích, bởi sự giòn ngon kết hợp cùng với các gia vị ăn kèm. Nhất là những ngày lễ vu lang hay ngày rằm các mâm cơm cúng chay không thể thiếu món nem cuốn chay này. Tôi nói có thể các bạn không tin nhưng nếu ăn thử một lần thì sẽ không còn nghi ngờ gì nữa. ',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],[
                'id' => 140,
                'image' => 'https://hapivegan.com/wp-content/uploads/2021/04/batch20180722173550-1536309838680804711868.jpg.webp',
                'price' => 70.000,
                'name' => 'nộm măng',
                'description' => 'Nộm măng là một trong những món nộm chay ngon và dễ dàng thực hiện nhất. Nộm măng thanh mát, bổ sung các nhóm chất cần thiết như chất xơ, ngăn ngừa các bệnh tim mạch và giảm thiểu cholesterol trong cơ thể.',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],[
                'id' => 141,
                'image' => 'https://hapivegan.com/wp-content/uploads/2021/04/nom-rau-muong-recipe-main-photo.jpg',
                'price' => 40.000,
                'name' => 'nộm rau muống',
                'description' => 'Nộm rau muống là món ăn khá quen thuộc với nhiều gia đình. Món nộm chay này cung cấp những vitamin thiết yếu như vitamin A, ngăn ngừa tiểu đường, và đặc biệt tốt cho những người bị bệnh thiếu máu.',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],[
                'id' => 142,
                'image' => 'https://hapivegan.com/wp-content/uploads/2021/04/nom-xoai-kho.jpg.webp',
                'price' => 60.000,
                'name' => 'nộm xoài khô',
                'description' => 'Một trong những món nộm chay không thể thiếu đó là nộm xoài khô. Món ăn này được rất nhiều bạn trẻ ưa chuộng vì hương vị tuyệt vời của nó. Bên cạnh đó, lutein có trong xoài giúp bảo vệ mắt, và các nhóm vitamin giúp chắc khỏe xương, đẹp da.',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 143,
                'image' => 'https://hapivegan.com/wp-content/uploads/2021/04/0bfaefe4b0a559fb00b4.jpg.webp',
                'price' => 50.000,
                'name' => 'nộm xà lách xoong',
                'description' => 'Xà lách xoong với đặc tính lành và mát, cung cấp lượng chất xơ dồi dào cho cơ thể và giúp làm mát gan. Vitamin K và magie có trong loại rau này có lợi cho việc chắc khỏe xương, cải thiện thị lực. Đây là món ăn hết sức phù hợp trong mâm cơm gia đình vào những ngày hè nóng nực.',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 144,
                'image' => 'http://media.doisongphapluat.com/601/2020/8/30/goi-y-mot-so-mon-chay-de-lam-cung-ram-thang-7-dep-mat.jpg',
                'price' => 30.000,
                'name' => 'nộm ổi',
                'description' => 'Nạo sợi 1 quả ổi to và 1 củ cà rốt to, thêm đường, chút xíu muối, nước cốt 1 quả chanh (gia vị tuỳ khẩu vị của gia đình), thêm rau thơm thái nhỏ, ớt tươi vào trộn đều cho ngấm gia vị. Sau đó, rắc lạc rang lên là có món nộm chay rất thơm ngon và lạ miệng.',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 145,
                'image' => 'https://cdn.staticaly.com/img/monchay.com/wp-content/uploads/2015/06/nom-cu-sen-chay-9.jpg',
                'price' => 100.000,
                'name' => 'nộm gỏi củ sen',
                'description' => 'Các món nộm ngon thường được chọn làm món khai vị cho bữa ăn bởi chúng thường là rau củ và có vị chua cay để kích thích khẩu vị mà không làm bạn no bụng. Với món chay nộm củ sen này thì vị giác sẽ thực sự được kích thích để bữa cơm trở nên ngon miệng hơn. Nộm củ sen cay giòn sần sật với vị cay xé lại nghe thơm mùi vừng rang rất hấp dẫn.',
                'category_id' => '7',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 146,
                'image' => 'https://cdn.tgdd.vn/2020/07/CookRecipe/Avatar/sup-bap-chay-thumbnail.jpg',
                'price' => 60.000,
                'name' => 'súp bắp chay',
                'description' => 'Súp bắp chay sẽ là lựa chọn tuyệt vời cho bạn để có một bữa ăn chay thật thanh đạm. Với cách nấu đơn giản nhưng thành phẩm cho ra vô cùng thơm ngon, đảm bảo ai nấy đều xuýt xoa khen ngợi.

Mùi thơm lừng của bắp quyện với các loại nấm, rau củ giòn giòn. Kết cấu súp sền sệt và đặc nhẹ được nêm nếm vừa miệng rất dễ ăn',
                'category_id' => '9',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 147,
                'image' => 'https://cdn.tgdd.vn/2020/06/CookRecipe/Avatar/sup-khoai-tay-thumbnail-1.jpg',
                'price' => 70.000,
                'name' => 'súp bí đỏ chay',
                'description' => 'Nạp đầy năng lượng cho cả gia đình, trước khi bước vào một ngày làm việc với món súp bí đỏ chay thơm ngon.

Súp bí đỏ với vị ngọt tự nhiên từ bí, một chút béo béo, chất súp rất mịn và nhừ, vị mặn ngọt vừa phải, đảm bảo cả nhà sẽ thích mê.

',
                'category_id' => '9',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 148,
                'image' => 'https://cdn.tgdd.vn/2020/09/CookRecipe/Avatar/sup-rong-bien-thumbnail.jpg',
                'price' => 80.000,
                'name' => 'súp rong biển',
                'description' => 'Súp rong biển chay không chỉ thơm ngon mà còn giải nhiệt cơ thể hiệu quả. Nước súp thanh đạm, rau củ giòn giòn xen lẫn với rong biển dai mềm, khi ăn sẽ vô cùng hài hòa, kết hợp với đậu hủ vừa mềm vừa béo nữa thì đúng tuyệt.

Món súp rất thích hợp để ăn sáng hoặc dùng làm món khai vị cho các bữa tiệc',
                'category_id' => '9',
                'created_at' => Carbon::now()
            ],[
                'id' => 149,
                'image' => 'https://cdn.tgdd.vn/2020/09/CookRecipe/Avatar/sup-cua-chay-thumbnail.jpg',
                'price' => 100.000,
                'name' => 'súp cua chay',
                'description' => 'Súp cua chay nhưng thơm ngon đậm đà, trông không khác gì súp cua thông thường đâu nha.

Món súp này sền sệt, có vị ngọt thanh từ rau củ và nấm đùi gà. Khi ăn sẽ cảm nhận được độ giòn sừn sựt của nấm tuyết, tàu hủ ky mềm mại vô cùng ngon.',
                'category_id' => '9',
                'created_at' => Carbon::now()
            ],[
                'id' => 150,
                'image' => 'https://cdn.tgdd.vn/2020/07/CookRecipe/Avatar/sup-chay-thap-cam-thumbnail.jpg',
                'price' => 90.000,
                'name' => 'súp chay thập cẩm',
                'description' => 'Một tô súp chay với đầy đủ màu sắc từ các loại rau củ và nấm, rắc thêm ít tiêu xay và hành ngò lên trên thì tuyệt vời.

Mùi thơm của súp lan tỏa khắp căn bếp, vị ngọt từ nấm và bắp quyện với mùi thơm của hành phi, một chút giòn giòn của rau củ. Tất cả nguyên liệu tạo nên một món ăn ngon vô cùng.',
                'category_id' => '9',
                'created_at' => Carbon::now()
            ],[
                'id' => 151,
                'image' => 'https://cdn.tgdd.vn/2020/06/CookRecipe/Avatar/sup-bi-do-thumbnail-1.jpg',
                'price' => 70.000,
                'name' => 'súp khoai tây',
                'description' => 'Súp khoai tây chay sẽ là lựa chọn tuyệt vời cho những người theo đuổi chế độ ăn chay có sữa! Với cách làm đơn giản, không cần tốn quá nhiều thời gian là đã có thể hoàn thành món súp siêu dinh dưỡng.

Súp mềm mịn, béo béo và rất thơm mùi của sữa tươi cùng với váng sữa, chắc chắn bạn sẽ thích mê',
                'category_id' => '9',
                'created_at' => Carbon::now()
            ],[
                'id' => 152,
                'image' => 'https://cdn.tgdd.vn/2020/06/CookRecipe/Avatar/sup-ca-rot-thumbnail-1.jpg',
                'price' => 90.000,
                'name' => 'súp cà rốt',
                'description' => 'Súp cà rốt chay không chỉ ngon mà còn giúp đẹp da, sáng mắt, cung cấp chất xơ và các vitamin cho cả nhà cùng khỏe. Súp có kết cấu mềm mịn rất có lợi cho đường ruột, cà rốt làm cho súp có màu cam rất đẹp mắt.

Không chỉ thơm lừng, món súp còn có vị ngọt thanh tự nhiên, khi ăn nêm thêm tí hạt nêm chay và hạt tiêu xay là ngon tuyệt vời!',
                'category_id' => '9',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 162,
                'image' => 'https://cdn.tgdd.vn/2021/03/CookRecipe/Avatar/sup-dau-do-thumbnail-1.jpg',
                'price' => 100.000,
                'name' => 'súp đậu đỏ chay',
                'description' => 'Giúp cả nhà giải nhiệt ngày hè với món súp đậu đỏ chay thanh đạm. Với cách chế biến đơn giản, món súp đậu đỏ vô cùng hấp dẫn với nhiều loại rau củ hòa quyện với nhau.

Tất cả được nấu vừa chín tới, vẫn giữ được vị ngọt và giòn. Nước súp ngọt thanh rất ngon, dù là ăn không hay ăn với cơm đều hợp lý cả.',
                'category_id' => '9',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 153,
                'image' => 'https://cdn.tgdd.vn/2020/08/CookRecipe/Avatar/su%CC%81p-ga%CC%80-chay-thumbnail-1.jpg',
                'price' => 60.000,
                'name' => 'súp gà chay',
                'description' => 'Thưởng thức một tô súp gà chay nóng hổi trong ngày mưa gió thì còn gì bằng. Không cần quá nhiều nguyên liệu hay công đoạn phức tạp, bạn vẫn có thể tự nấu một nồi súp thơm ngon.

Vị súp đậm đà, rau củ chín tới giòn giòn rất đã miệng, rắc lên 1 tí tiêu xay và hành ngò rồi bắt đầu thưởng thức là ấm bụng ngay.',
                'category_id' => '9',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 154,
                'image' => 'https://cdn.tgdd.vn/2020/09/CookRecipe/Avatar/sup-thit-vien-chay-thumbnail.jpg',
                'price' => 70.000,
                'name' => 'súp thịt viên chay',
                'description' => 'Cùng vào bếp trổ tài nấu một món súp chay cho cả nhà cùng thưởng thức nào! Súp thịt viên chay với sự hoà quyện của vô số rau củ như bắp, bí đỏ, cà rốt rất thanh ngọt, dịu mát.

Súp được nêm nếm vừa miệng, thơm phức, cực hấp dẫn. Ăn hết một chén là bảo đảm muốn ăn thêm chén nữa!',
                'category_id' => '9',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 155,
                'image' => 'https://cdn.tgdd.vn/2021/01/CookRecipe/Avatar/sup-hoa-dau-biec-chay-thumbnail.jpg',
                'price' => 120.000,
                'name' => 'súp hoa đậu biếc chay',
                'description' => 'Đẹp mắt với màu súp hoa đậu biếc cực lạ, ngon miệng với mùi vị súp thơm ngon đặc trưng.

Súp hoa đậu biếc hứa hẹn sẽ khiến cả nhà thích thú, củ sen thì giòn ngon, nấm ngọt và mềm thấm vị, các rau củ khác càng làm cho món súp thêm hấp dẫn thêm',
                'category_id' => '9',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 156,
                'image' => 'https://cdn.tgdd.vn/2020/10/CookRecipe/Avatar/sup-ca-chua-nuong-thuan-chay-thumbnail.jpg',
                'price' => 80.000,
                'name' => 'súp cà chua nướng',
                'description' => 'Thêm vào thực đơn món súp cà chua nướng thuần chay lạ mắt, thơm ngon độc đáo này. Với công thức nấu đặc biệt mang lại một chất súp đậm đà, nguyên liệu thì thấm vị.

Cà chua được nướng cho vàng thơm. Món súp đặc biệt sẽ rất ngon hơnnếu ăn kèm với bánh mì đấy!',
                'category_id' => '9',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 157,
                'image' => 'https://cdn.daynauan.info.vn/wp-content/uploads/2019/05/trang-tri-sup-hoanh-thanh.jpg',
                'price' => 90.000,
                'name' => 'súp hoành chiên rau củ quả',
                'description' => 'Đãi cả nhà một món súp hoành thánh nhân rau củ chay vào dịp cuối tuần, để giúp mọi người vừa ăn ngon, vừa tốt cho sức khoẻ nhé!

Lớp hoành thánh bên ngoài có độ giòn nhẹ, hơi có vị béo thơm đặc trưng của hoành thánh. Bên trong nhân rau củ được nêm nếm vừa ăn, ăn cùng với nước dùng ngọt thanh vô cùng ngon.',
                'category_id' => '9',
                'created_at' => Carbon::now()
            ],[
                'id' => 158,
                'image' => 'https://cdn.tgdd.vn/2020/07/CookRecipe/Avatar/sup-mang-chay-thumbnail.jpg',
                'price' => 75.000,
                'name' => 'súp măng chay',
                'description' => 'Măng luôn được chế biến thành nhiều món ăn bởi mùi vị thơm ngon đặc trưng. Thử ngay khám phá ngay món súp măng chay thật thanh đạm cho cả nhà nhé!

Mùi vị của món súp này siêu thơm ngon bởi sự kết hợp của những nguyên liệu tươi mát như măng, cách loại nấm, mướp, su su,... Múc ra chén lúc súp còn nóng hổi, cho thêm tí ngò và tiêu xay vào, vừa thổi vừa ăn thì đúng tuyệt!',
                'category_id' => '9',
                'created_at' => Carbon::now()
            ],[
                'id' => 159,
                'image' => 'https://cdn.tgdd.vn/2020/07/CookRecipe/Avatar/sup-mai-tuyet-bao-ngu-chay-thumbnail.jpg',
                'price' => 300.000,
                'name' => 'súp mai tuyết bào ngư',
                'description' => 'Súp mai tuyết bào ngư chay chắc chắn sẽ khiến cả nhà mê mẩn, bởi súp là sự kết hợp của nấm mai tuyết nhĩ giòn tan, cùng với các loại rau củ ngon ngọt.

Nước súp thì thanh đạm nhưng vẫn mang vị ngon đậm đà, hương thơm hấp dẫn, ăn một lần là nhớ mãi. Thật tiếc nếu bạn bỏ qua một món chay ngon như vậy đó!',
                'category_id' => '9',
                'created_at' => Carbon::now()
            ],[
                'id' => 160,
                'image' => 'https://ameovat.com/wp-content/uploads/2018/10/cach-lam-soup-chay-thap-cam-01-1.jpg',
                'price' => 100.000,
                'name' => 'súp chay thập cẩm Phổ Nhĩ',
                'description' => 'Soup chay thập cẩm thơm ngon bổ dưỡng có vị ngọt đậm đà hòa quyện giữa rau củ, các nguyên liệu chay. Món ăn đơn giản mà dễ làm này rất phù hợp với trẻ nhỏ vì nó không những dễ ăn mà còn chứa đầy đủ dinh dưỡng cần thiết cho sự phát triển của trẻ nhỏ.

Soup chay thập cẩm cũng là sự lựa chọn đúng đắn để làm món khai vị trong các bữa tiệc hay những bữa ăn nhà hàng.',
                'category_id' => '9',
                'created_at' => Carbon::now()
            ],[
                'id' => 161,
                'image' => 'https://i.pinimg.com/564x/17/6f/21/176f2152a190ba1bce328486f7cf55e6.jpg',
                'price' => 190.000,
                'name' => 'súp rong biển',
                'description' => 'Bật mí cách làm món súp cực kì bổ dưỡng cho gia đình bạn. Công thức súp rong biển chay với nguyên liệu chính đương nhiên là....rong biển hay còn gọi là tóc tiên.chắc chắn bạn sẽ đame bảo về độ dinh dưỡng',
                'category_id' => '9',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 165,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/05/hita-chay-chao-yen-mach-1.jpg',
                'price' => 70.000,
                'name' => 'cháo yến mạch',
                'description' => 'Một cách nấu cháo chay ngon và rất đơn giản khác mà bạn không nên bỏ qua đó chính là món cháo yến mạch chay. So với các món cháo chay khác, cháo yến mạch cho người ăn chay là món cháo có hương vị rất lạ miệng, nên sẽ khiến bạn một khi được thưởng thức rồi sẽ lưu luyến mãi.',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 166,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/05/chao-bi-do-nam-chay-recipe-main-photo.jpg',
                'price' => 50.000,
                'name' => 'cháo ngô ',
                'description' => 'Sự kết hợp giữa ngô ngọt cùng với nấm rơm tươi mang đến cho bạn một món cháo chay thơm ngon khó cưỡng, lại cực kỳ bổ dưỡng cho sức khỏe. Nếu như bạn chưa biết cách nấu món cháo chay từ hai loại nguyên liệu này như thế nào cho vừa nhanh, vừa ngon thì công thức chi tiết dưới đây sẽ là gợi ý mà bạn không thể bỏ qua.',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 167,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/08/cach-nau-chao-tom-rong-bien-1.jpg',
                'price' => 170.000,
                'name' => 'cháo rong biển',
                'description' => 'Không chỉ sở hữu hương vị thơm ngon, món cháo chay rong biển còn có tác dụng tiêu đờm, lợi tiểu, thanh nhiệt, giải độc, trị đau đầu, chóng mặt rất hiệu quả.',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 168,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/08/cach-nau-chao-gao-lut-chay.jpg',
                'price' => 100.000,
                'name' => 'cháo gao lứt',
                'description' => 'Gạo lứt là một loại gạo có chứa rất nhiều chất dinh dưỡng, tốt cho sức khỏe. Ngoài các món chay quen thuộc như gạo lứt muối mè, cơm gạo lứt rang hạt điều, chè gạo lứt, bánh bao gạo lứt…, bạn còn có thể nấu món cháo chay gạo lứt vừa thơm ngon lại bổ dưỡng. Cách nấu cháo chay bằng gạo lứt sẽ lâu hơn một chút so với nấu cháo từ gạo tẻ thông thường, nhưng thành quả chắc chắn sẽ làm bạn thấy xứng đáng với công sức bỏ ra.
',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 169,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/08/lau-chao-chay.jpg',
                'price' => 350.000,
                'name' => 'lẩu cháo chay',
                'description' => 'Lẩu cháo chay là sự biến tấu thú vị và vô cùng ngon miệng khi có sự kết hợp vị ngon ngọt của các loại rau củ quả cùng vị thơm đặc trưng của gạo nếp, gạo tẻ cùng các thức nhúng riêng biệt. Còn gì tuyệt vời hơn khi tiết trời se lạnh, cả nhà quây quần bên nồi lẩu cháo thanh đạm mà ngon tuyệt, cùng nhau thưởng thức hương vị lạ miệng lại êm bụng, không bị ngán ngấy như các loại lẩu cháo mặn khác.',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 170,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/08/chao-nam-chay.jpg',
                'price' => 130.000,
                'name' => 'cháo nấm hương',
                'description' => 'Nấm hương hay còn gọi là nấm đông cô là một trong những loại nấm không chỉ có hương thơm đặc trưng mà còn chứa nhiều dưỡng chất tốt cho sức khỏe. Do đó, nấm hương rất được ưa chuộng để chế biến các món chay ngon, đặc biệt là món cháo chay. Vì món cháo chay này vừa nhẹ bụng, lại chứa nhiều chất xơ tốt cho đường ruột, hệ tiêu hóa mà cách làm cũng rất đơn giản, thuận tiện, không làm bạn mất nhiều thời gian.
',
                'category_id' => '6',
                'created_at' => Carbon::now()
            ],[
                'id' => 171,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/09/nui-xao-bo-sot-ca-chua-2-cach-lam-cuc-nhanh-cho-bua-sang-dinh-duong_nui-xao-bo-sot-ca-chua-pho-mai.jpg',
                'price' => 200.000,
                'name' => 'nui sốt cà chua ',
                'description' => 'Món nui chay sốt cà chua là công thức nấu ăn kết hợp nhiều nguyên liệu giàu dinh dưỡng, ngon miệng giúp bạn chăm sóc bữa ăn gia đình hoàn hảo. Đặc biệt, nguyên liệu chế biến không quá cầu kì và thời gian nấu cũng rất nhanh. Vậy nên, bắt tay vào làm thử công thức nui sốt cà chua chay này ngay nhé.',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],[
                'id' => 172,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/09/nui-xao-nam-chay2.jpg',
                'price' => 250.000,
                'name' => 'nui xào nấm',
                'description' => 'Đổi vị cho bữa cơm chay gia đình với nguyên liệu mới là “nui” . Món nay xào với các loại rau củ cũng rất ngon. Ăn giòn giòn thêm tí rau củ thanh thanh. Làm mâm cơm càng thêm thanh đạm. Cùng với ẩm thực đồ chay làm qua các món nui xào chay ngon dưới đây nhé. Từ nui xào nấm, nui xào cà chua, nui xào bò cho đến..nui xào thập cẩm.',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],[
                'id' => 173,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/09/dau-phu-sot-chua-ngot11504841142.jpg',
                'price' => 90.000,
                'name' => 'đậu chua ngọn chay',
                'description' => 'Nếu bạn muốn đổi vị cho bữa ăn quen thuộc của gia đình nhưng lại không muốn mất quá nhiều thời gian cho những món ăn có cách nấu cầu kỳ, phức tạp thì hãy thử ngay món ăn chay từ đậu phụ có tên đậu sốt chua ngọt chay dưới đây nhé! Đây là một trong các món chay từ đậu phụ non rất được yêu thích vì vừa có hương vị thơm ngon, lại vừa chế biến nhanh chóng.',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],[
                'id' => 174,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/09/117059886-3450730661613264-665-4114-1512-1596627907.jpg',
                'price' => 60.000,
                'name' => 'đậu hũ xào nấm chay',
                'description' => 'Đậu hũ xào nấm chay là một món chay đậu phụ rất hấp dẫn, ngon miệng mà lại tốt cho sức khỏe. Từng miếng đậu phụ được chiên vàng giòn, xào cùng với các loại nấm dai dai giòn giòn, nêm nếm vừa miệng chắc chắn sẽ là món “đinh” trong mâm cơm gia đình.',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 175,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/09/maxresdefault-20.jpg',
                'price' => 40.000,
                'name' => 'đẫu hũ xào mướp',
                'description' => 'Đậu phụ được làm từ đậu nành là loại nguyên liệu thực phẩm sạch và rất tốt cho sức khỏe. Món chay từ đậu hũ xào với mướp lại càng tuyệt vời hơn khi còn có thể phòng chống bệnh loãng xương. Cùng xem qua và làm thử công thức món đậu hũ xào mướp chay này nhé. Để mâm cơm thêm ngon và gia đình càng thêm “chắc khỏe” .',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 176,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/09/dau-hu-non-sot-nam-kim-cham-recipe-main-photo.jpg',
                'price' => 50.000,
                'name' => 'đậu phụ sốt nấm',
                'description' => 'Có thể khẳng định được đậu phụ sốt nấm cà chua là món ăn được nhiều bà nội trợ lựa chọn nhất. Cũng dễ hiểu vì đây được đánh giá là món ăn rất ngon, lôi quấn đặc biệt mất không quá nhiều thời gian để thực hiện. Cùng xem qua công thức món chay với đậu phụ này do ẩm thực đồ chay đề xuất nhé.',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 178,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/08/su-su-xao-toi.jpg',
                'price' => 45.000,
                'name' => 'susu xào tỏi',
                'description' => 'Trái su su với hàm lượng calo và cholesterol thấp, nhiều nước cùng làm lượng chất xơ cao đặc biệt phù hợp cho các người đang giảm cân. Hàm lượng kali cao, ít natri góp phần ổn định áp lực máu trong hệ tuần hoàn.

Không những thế, su su còn sản xuất thêm lượng vitamin và khoáng chất cấp thiết cho cơ thể như vitamin C, B1, B2, B6, B9, canxi,… Thành phần luteolin và apigenin còn có tác dụng loại bỏ các gốc tự do ảnh hưởng tới sức khỏe con người.',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 179,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/08/dia-rau-tien-vua-xao-thap-cam-2.jpg',
                'price' => 70.000,
                'name' => 'rau tiến vua xào chay',
                'description' => 'Rau tiến vua không chỉ ngon, giòn mà còn rất giàu dinh dưỡng cũng như có thể chế biến theo nhiều kiểu khác nhau. Nếu đã ngán ngấy với các món rau tiến vua xào thịt bò, rau tiến vua xào thịt lợn, xào với tôm, chả… thì hãy thử ngay món rau tiến vua xào chay dưới đây',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 180,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/08/rau-cai-7.jpg',
                'price' => 60.000,
                'name' => 'rau cải  chay xào nấm',
                'description' => 'Rau cải xào nấm là một món xào chay đơn giản và rất dễ làm. Bạn chẳng cần phải tốn quá nhiều thời gian chế biến hay chi phí mua nguyên liệu, chỉ với 15 phút cả chuẩn bị và chế biến, bạn đã có ngay một đĩa rau xào xanh mát mắt, đậm đà thơm ngon chiêu đãi cả gia đình.',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 181,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/05/mang-xao-chay-1.jpg',
                'price' => 80.000,
                'name' => 'măng xào chay',
                'description' => 'Cách nấu món chay với măng này không quá khó khăn trong giai đoạn mua sắm rau củ quả . Chỉ cần nguyên liệu là măng tươi và mộc nhĩ. Cách chế biến thì vô cũng nhanh và cho hương vị vô cùng đặc trưng, hấp dẫn. Mong mọi người thưởng thức .',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],[
                'id' => 182,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/08/photo-1576136852847-15761368528491314630370.jpg',
                'price' => 30.000,
                'name' => 'súp lơ xào chay',
                'description' => 'Súp lơ xào chay là một món chay ngon lại rất đơn giản, dễ làm, vừa bổ dưỡng, tốt cho sức khỏe.',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],[
                'id' => 183,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/05/su-hao-xao-trung.jpg',
                'price' => 20.000,
                'name' => 'xu hào xào chay',
                'description' => 'Su hào – một trong những loại rau củ quá quen thuộc trong gian bếp của mỗi gia đình sẽ là nguyên liệu chính của món su hào xào chay ngày hôm nay.',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],[
                'id' => 184,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/08/maxresdefault-4-1.jpg',
                'price' => 35.000,
                'name' => 'hủ tiếu xào rau củ',
                'description' => 'Nếu bạn đã thấy ngán ngấy các món thịt cá trong bữa cơm gia đình thường ngày thì hãy thử ngay món hủ tiếu xào chay nhé! Món hủ tiếu chay này không chỉ có hương vị thơm ngon mà còn tốt cho sức khỏe vì có rất nhiều rau của quả xào cùng. Vậy bạn đã biết cách làm hủ tiếu xào thập cẩm chay như thế nào chưa?',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],[
                'id' => 185,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/05/151348-rau-den-xao-toi.jpg',
                'price' => 20.000,
                'name' => 'rau dền xào tỏi',
                'description' => 'Rau dền xào chay là món ăn thường thấy trong bữa cơm gia đình vào mùa hè. Đôi khi chỉ cần một đĩa rau dền xào chay với hành tỏi, bát nước canh chua dầm sấu, thêm đĩa đậu phụ rán giòn là cả nhà đã có một bữa cơm ngon trong trưa hè nóng nực.',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 186,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/08/thanh-pham-710.jpg',
                'price' => 40.000,
                'name' => 'đu đủ xào',
                'description' => 'Trong số các món xào chay ngon dễ nấu lại ngon miệng, không thể không nhắc tới món đu đủ xanh xào chay. Nguyên liệu của món chay xào này ngoài đu đủ xanh thì chỉ cần thêm chút hành lá, rau mùi là bạn đã có ngay một đĩa xào chay lạ miệng.',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 187,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/08/dua-xao-chay-2.jpg',
                'price' => 40.000,
                'name' => 'dứa xào đậu phụ',
                'description' => 'Nếu bạn đã chán các món đồ xào chay từ rau, củ thông thường thì hãy thử ngay món dứa xào chay với đậu phụ nhé! Món khóm dứa xào chay này rất hấp dẫn, lôi cuốn không chỉ bởi sắc vàng ươm của từng miếng thơm mà vị dứa chua chua ngọt ngọt kết hợp cùng với đậu phụ giòn ruộm chắc chắn sẽ khiến cho mọi thành viên trong gia đình bạn phải tấm tắc ngợi khen ngay khi thưởng thức miếng đầu tiên.',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 188,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/08/cach-lam-mon-xao-chay-14.jpg',
                'price' => 40.000,
                'name' => 'dứa xào chay ngũ vị',
                'description' => 'Nếu bạn đã chán các món đồ xào chay từ rau, củ thông thường thì hãy thử ngay món dứa xào chay với đậu phụ nhé! Món khóm dứa xào chay này rất hấp dẫn, lôi cuốn không chỉ bởi sắc vàng ươm của từng miếng thơm mà vị dứa chua chua ngọt ngọt kết hợp cùng với đậu phụ giòn ruộm chắc chắn sẽ khiến cho mọi thành viên trong gia đình bạn phải tấm tắc ngợi khen ngay khi thưởng thức miếng đầu tiên.',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 189,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/08/bap-xao-bo.jpg',
                'price' => 60.000,
                'name' => 'bắp xào chay',
                'description' => 'Nếu bạn đang tìm kiếm một món xào chay đơn giản mà lại thích hợp cho cả việc ăn vặt. Cũng như dùng kèm với cơm thì món ngô non xào chay chắc chắn sẽ là gợi ý mà bạn không thể bỏ qua. Vậy cách làm ngô ngọt xào bơ chay như thế nào, có mất nhiều thời gian không? Câu trả lời là cách làm bắp xào chay. ',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 190,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/08/photo-9-1.jpg',
                'price' => 60.000,
                'name' => 'giá đỗ xào đậu phụ',
                'description' => 'Một món xào chay dễ làm, ăn ngon mà bạn không thể bỏ qua đó chính là món giá đỗ xào chay với đậu phụ. Tương tự như món giá hẹ xào chay hay món giá mướp xào đậu chay, nguyên liệu chủ đạo của món chay này chính là giá đỗ – vốn được Đông y đánh giá rất cao về khả năng thanh nhiệt, giải độc, cũng như khả năng bổ sung “sinh lực” cho phái mạnh. Vậy cách làm giá xào chay như thế nào?',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 191,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/08/nam-rom-xao-rau-cu.jpg',
                'price' => 80.000,
                'name' => 'nấm rơm xào rau củ luộc',
                'description' => 'Nấm rơm là loại nguyên liệu mang trong mình rất nhiều công dụng và rất tốt cho sức khỏe. Các món chay từ nấm rơm cũng rất đa dạng và dễ làm. Có thể kể đến cách làm món nấm rơm xào chay.',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],[
                'id' => 192,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/05/mien-xao-chay-kieu-han-quoc-2-1.jpg',
                'price' => 70.000,
                'name' => 'miến xào chay hàn quốc',
                'description' => 'Hàn Quốc nổi tiếng với món miến trộn chapchae. Món miền này cũng rất nổi tiếng tại Việt Nam và thường được dùng ở các nhà hàng Hàn. Sau đây, với cách làm miến xào chay kiểu Hàn Quốc do ẩm thực đồ chay đề xuất dưới đây, bạn sẽ có món miến không thua gì quán đâu nhé. Cùng thử nào.',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],[
                'id' => 193,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/08/photo-7-1.jpg',
                'price' => 60.000,
                'name' => 'nấm đông cô xào rau củ cải',
                'description' => 'Món rau củ xào nấm chay không chỉ có hương vị thơm ngon mà còn rất bổ dưỡng, tốt cho sức khỏe. Món chay thanh đạm này còn có màu sắc hấp dẫn nhờ sự kết hợp của nhiều loại rau củ quả.',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],[
                'id' => 194,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/08/maxresdefault-27.jpg',
                'price' => 70.000,
                'name' => 'nấm đông cô xào đậu đũa',
                'description' => 'Món rau củ xào nấm chay không chỉ có hương vị thơm ngon mà còn rất bổ dưỡng, tốt cho sức khỏe. ',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],[
                'id' => 195,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/08/photo-4-1.jpg',
                'price' => 50.000,
                'name' => 'củ đậu xào chay',
                'description' => 'Củ sắn (hay còn gọi là củ đậu) có tính mát, vị ngọt thanh, rất dễ ăn. Loại củ này không chỉ có thể ăn sống, hay ép nước mà còn có thể chế biến thành món xào chay ăn vừa lạ miệng, vừa tốt cho sức khỏe.',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 196,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/09/img_7921_45150.jpg',
                'price' => 50.000,
                'name' => 'đậu phụ sốt cà chua cay',
                'description' => 'Đậu phụ hay còn gói là đậu hũ là món nguyên liệu bổ dưỡng với hương vị nhẹ nhàng. Thường được kết hợp với các loại nước sốt để tạo nên món ăn đậm đà, đưa cơm. Sau đây ẩm thực đồ chay sẽ chia sẻ các cách làm món đậu phụ sốt cà chua mà ai ai cũng mê. Từ món đậu chay vị cay tới ngọt. Từ món Việt Nam cho đến đậu sốt kiểu Nhật.',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 197,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/09/dau-que-xao-nam-thom-dau-hu-recipe-main-photo.jpg',
                'price' => 60.000,
                'name' => 'đẫu que xào đậu phụ',
                'description' => 'Sau đây là công thức món đậu que xào với đậu hũ ngon tại nhà.Cách nấu món chay với đậu cô ve và đậu phụ này không quá phức tạp ở đoạn mua sắm nguyên liệu cũng như cách chế biến nhưng sở hữu vị hương rất ngon và thơm, hấp dẫn.',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 198,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/09/dau-hu-xao-la-lot.jpg',
                'price' => 50.000,
                'name' => 'đậu phụ xào lá lốt',
                'description' => 'Hương vị bùi bùi, thanh thanh của đậu hũ kết hợp với lá lốt sẽ tạo thành món ngon tuyệt vời và mới lạ cho bữa cơm gia đình nhà bạn.',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 199,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/09/nui-xao-thap-cam-chay-1.jpg',
                'price' => 60.000,
                'name' => 'nui xào rau củ',
                'description' => 'Đổi vị cho bữa cơm chay gia đình với nguyên liệu mới là “nui” . Món nay xào với các loại rau củ cũng rất ngon. Ăn giòn giòn thêm tí rau củ thanh thanh. Làm mâm cơm càng thêm thanh đạm. Cùng với ẩm thực đồ chay làm qua các món nui xào chay ngon dưới đây nhé. Từ nui xào nấm, nui xào cà chua, nui xào bò cho đến..nui xào thập cẩm.',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 200,
                'image' => 'https://amthucdochay.com/wp-content/uploads/2021/08/dau-hu-hap-la-han-ten-dep-an-ngon-ma-lai-de-lam.jpeg',
                'price' => 100.000,
                'name' => 'đậu hũ hấp la hán',
                'description' => 'Trong số các món chay ngon dễ làm từ đậu phụ, đậu hũ hấp chay được rất nhiều người yêu thích. Từng miếng đậu phụ trắng nõn nà được hấp một cách khéo léo không hề vỡ nát, mà vẫn giữ nguyên được trọn vẹn hình dáng cũng như hương vị thơm ngon, thanh mát, thuần khiết chắc chắn sẽ khiến bạn cảm thấy bất ngờ khi thưởng thức',
                'category_id' => '10',
                'created_at' => Carbon::now()
            ]



        ]);
    }
}
