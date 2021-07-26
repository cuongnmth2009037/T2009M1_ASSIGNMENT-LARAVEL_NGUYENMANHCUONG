<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class apartmentSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('apartments')->truncate();
        DB::table('apartments')->insert([
            [
                'name'=>'Phân khu The Miami Vinhomes Smart City 1',
                'address'=>'khu đô thị Vinhomes Smart City, Nam Từ Liêm, Hà Nội',
                'price'=>'675000000',
                'information'=>'Công ty Cổ phần Đầu tư Xây dựng Thái Sơn',
                'informationDetail'=>'Tổng diện tích phân khu The Miami Vinhomes Smart City (tên gọi mới là The Grand Sapphire) là 3,3ha',
                'Thumnail'=>'https://static1.cafeland.vn/cafeland_img/300-180/2021/7/22/phan-khu-the-miami-vinhomes-smart-city.webp',
                'status'=>'1',
                'created_at'=> Carbon::now()
            ], [
                'name'=>'Phân khu The Miami Vinhomes Smart City 2',
                'address'=>'khu đô thị Vinhomes Smart City, Nam Từ Liêm, Hà Nội',
                'price'=>'675000000',
                'information'=>'Công ty Cổ phần Đầu tư Xây dựng Thái Sơn',
                'informationDetail'=>'Tổng diện tích phân khu The Miami Vinhomes Smart City (tên gọi mới là The Grand Sapphire) là 3,3ha',
                'Thumnail'=>'https://static1.cafeland.vn/cafeland_img/300-180/2021/7/22/phan-khu-the-miami-vinhomes-smart-city.webp',
                'status'=>'1',
                'created_at'=> Carbon::now()
            ], [
                'name'=>'Phân khu The Miami Vinhomes Smart City 3',
                'address'=>'khu đô thị Vinhomes Smart City, Nam Từ Liêm, Hà Nội',
                'price'=>'675000000',
                'information'=>'Công ty Cổ phần Đầu tư Xây dựng Thái Sơn',
                'informationDetail'=>'Tổng diện tích phân khu The Miami Vinhomes Smart City (tên gọi mới là The Grand Sapphire) là 3,3ha',
                'Thumnail'=>'https://static1.cafeland.vn/cafeland_img/300-180/2021/7/22/phan-khu-the-miami-vinhomes-smart-city.webp',
                'status'=>'1',
                'created_at'=> Carbon::now()
            ], [
                'name'=>'Phân khu The Miami Vinhomes Smart City 4',
                'address'=>'khu đô thị Vinhomes Smart City, Nam Từ Liêm, Hà Nội',
                'price'=>'675000000',
                'information'=>'Công ty Cổ phần Đầu tư Xây dựng Thái Sơn',
                'informationDetail'=>'Tổng diện tích phân khu The Miami Vinhomes Smart City (tên gọi mới là The Grand Sapphire) là 3,3ha',
                'Thumnail'=>'https://static1.cafeland.vn/cafeland_img/300-180/2021/7/22/phan-khu-the-miami-vinhomes-smart-city.webp',
                'status'=>'1',
                'created_at'=> Carbon::now()
            ], [
                'name'=>'Phân khu The Miami Vinhomes Smart City 5',
                'address'=>'khu đô thị Vinhomes Smart City, Nam Từ Liêm, Hà Nội',
                'price'=>'675000000',
                'information'=>'Công ty Cổ phần Đầu tư Xây dựng Thái Sơn',
                'informationDetail'=>'Tổng diện tích phân khu The Miami Vinhomes Smart City (tên gọi mới là The Grand Sapphire) là 3,3ha',
                'Thumnail'=>'https://static1.cafeland.vn/cafeland_img/300-180/2021/7/22/phan-khu-the-miami-vinhomes-smart-city.webp',
                'status'=>'1',
                'created_at'=> Carbon::now()
            ], [
                'name'=>'Phân khu The Miami Vinhomes Smart City 6',
                'address'=>'khu đô thị Vinhomes Smart City, Nam Từ Liêm, Hà Nội',
                'price'=>'675000000',
                'information'=>'Công ty Cổ phần Đầu tư Xây dựng Thái Sơn',
                'informationDetail'=>'Tổng diện tích phân khu The Miami Vinhomes Smart City (tên gọi mới là The Grand Sapphire) là 3,3ha',
                'Thumnail'=>'https://static1.cafeland.vn/cafeland_img/300-180/2021/7/22/phan-khu-the-miami-vinhomes-smart-city.webp',
                'status'=>'1',
                'created_at'=> Carbon::now()
            ], [
                'name'=>'Phân khu The Miami Vinhomes Smart City 7',
                'address'=>'khu đô thị Vinhomes Smart City, Nam Từ Liêm, Hà Nội',
                'price'=>'675000000',
                'information'=>'Công ty Cổ phần Đầu tư Xây dựng Thái Sơn',
                'informationDetail'=>'Tổng diện tích phân khu The Miami Vinhomes Smart City (tên gọi mới là The Grand Sapphire) là 3,3ha',
                'Thumnail'=>'https://static1.cafeland.vn/cafeland_img/300-180/2021/7/22/phan-khu-the-miami-vinhomes-smart-city.webp',
                'status'=>'1',
                'created_at'=> Carbon::now()
            ], [
                'name'=>'Phân khu The Miami Vinhomes Smart City 8',
                'address'=>'khu đô thị Vinhomes Smart City, Nam Từ Liêm, Hà Nội',
                'price'=>'675000000',
                'information'=>'Công ty Cổ phần Đầu tư Xây dựng Thái Sơn',
                'informationDetail'=>'Tổng diện tích phân khu The Miami Vinhomes Smart City (tên gọi mới là The Grand Sapphire) là 3,3ha',
                'Thumnail'=>'https://static1.cafeland.vn/cafeland_img/300-180/2021/7/22/phan-khu-the-miami-vinhomes-smart-city.webp',
                'status'=>'1',
                'created_at'=> Carbon::now()
            ], [
                'name'=>'Phân khu The Miami Vinhomes Smart City 9',
                'address'=>'khu đô thị Vinhomes Smart City, Nam Từ Liêm, Hà Nội',
                'price'=>'675000000',
                'information'=>'Công ty Cổ phần Đầu tư Xây dựng Thái Sơn',
                'informationDetail'=>'Tổng diện tích phân khu The Miami Vinhomes Smart City (tên gọi mới là The Grand Sapphire) là 3,3ha',
                'Thumnail'=>'https://static1.cafeland.vn/cafeland_img/300-180/2021/7/22/phan-khu-the-miami-vinhomes-smart-city.webp',
                'status'=>'1',
                'created_at'=> Carbon::now()
            ], [
                'name'=>'Phân khu The Miami Vinhomes Smart City 10',
                'address'=>'khu đô thị Vinhomes Smart City, Nam Từ Liêm, Hà Nội',
                'price'=>'675000000',
                'information'=>'Công ty Cổ phần Đầu tư Xây dựng Thái Sơn',
                'informationDetail'=>'Tổng diện tích phân khu The Miami Vinhomes Smart City (tên gọi mới là The Grand Sapphire) là 3,3ha',
                'Thumnail'=>'https://static1.cafeland.vn/cafeland_img/300-180/2021/7/22/phan-khu-the-miami-vinhomes-smart-city.webp',
                'status'=>'1',
                'created_at'=> Carbon::now()
            ], [
                'name'=>'Phân khu The Miami Vinhomes Smart City 11',
                'address'=>'khu đô thị Vinhomes Smart City, Nam Từ Liêm, Hà Nội',
                'price'=>'675000000',
                'information'=>'Công ty Cổ phần Đầu tư Xây dựng Thái Sơn',
                'informationDetail'=>'Tổng diện tích phân khu The Miami Vinhomes Smart City (tên gọi mới là The Grand Sapphire) là 3,3ha',
                'Thumnail'=>'https://static1.cafeland.vn/cafeland_img/300-180/2021/7/22/phan-khu-the-miami-vinhomes-smart-city.webp',
                'status'=>'1',
                'created_at'=> Carbon::now()
            ], [
                'name'=>'Phân khu The Miami Vinhomes Smart City 112',
                'address'=>'khu đô thị Vinhomes Smart City, Nam Từ Liêm, Hà Nội',
                'price'=>'675000000',
                'information'=>'Công ty Cổ phần Đầu tư Xây dựng Thái Sơn',
                'informationDetail'=>'Tổng diện tích phân khu The Miami Vinhomes Smart City (tên gọi mới là The Grand Sapphire) là 3,3ha',
                'Thumnail'=>'https://static1.cafeland.vn/cafeland_img/300-180/2021/7/22/phan-khu-the-miami-vinhomes-smart-city.webp',
                'status'=>'1',
                'created_at'=> Carbon::now()
            ], [
                'name'=>'Phân khu The Miami Vinhomes Smart City 13',
                'address'=>'khu đô thị Vinhomes Smart City, Nam Từ Liêm, Hà Nội',
                'price'=>'675000000',
                'information'=>'Công ty Cổ phần Đầu tư Xây dựng Thái Sơn',
                'informationDetail'=>'Tổng diện tích phân khu The Miami Vinhomes Smart City (tên gọi mới là The Grand Sapphire) là 3,3ha',
                'Thumnail'=>'https://static1.cafeland.vn/cafeland_img/300-180/2021/7/22/phan-khu-the-miami-vinhomes-smart-city.webp',
                'status'=>'1',
                'created_at'=> Carbon::now()
            ], [
                'name'=>'Phân khu The Miami Vinhomes Smart City 14',
                'address'=>'khu đô thị Vinhomes Smart City, Nam Từ Liêm, Hà Nội',
                'price'=>'675000000',
                'information'=>'Công ty Cổ phần Đầu tư Xây dựng Thái Sơn',
                'informationDetail'=>'Tổng diện tích phân khu The Miami Vinhomes Smart City (tên gọi mới là The Grand Sapphire) là 3,3ha',
                'Thumnail'=>'https://static1.cafeland.vn/cafeland_img/300-180/2021/7/22/phan-khu-the-miami-vinhomes-smart-city.webp',
                'status'=>'1',
                'created_at'=> Carbon::now()
            ], [
                'name'=>'Phân khu The Miami Vinhomes Smart City 15',
                'address'=>'khu đô thị Vinhomes Smart City, Nam Từ Liêm, Hà Nội',
                'price'=>'675000000',
                'information'=>'Công ty Cổ phần Đầu tư Xây dựng Thái Sơn',
                'informationDetail'=>'Tổng diện tích phân khu The Miami Vinhomes Smart City (tên gọi mới là The Grand Sapphire) là 3,3ha',
                'Thumnail'=>'https://static1.cafeland.vn/cafeland_img/300-180/2021/7/22/phan-khu-the-miami-vinhomes-smart-city.webp',
                'status'=>'1',
                'created_at'=> Carbon::now()
            ], [
                'name'=>'Phân khu The Miami Vinhomes Smart City 16',
                'address'=>'khu đô thị Vinhomes Smart City, Nam Từ Liêm, Hà Nội',
                'price'=>'675000000',
                'information'=>'Công ty Cổ phần Đầu tư Xây dựng Thái Sơn',
                'informationDetail'=>'Tổng diện tích phân khu The Miami Vinhomes Smart City (tên gọi mới là The Grand Sapphire) là 3,3ha',
                'Thumnail'=>'https://static1.cafeland.vn/cafeland_img/300-180/2021/7/22/phan-khu-the-miami-vinhomes-smart-city.webp',
                'status'=>'1',
                'created_at'=> Carbon::now()
            ], [
                'name'=>'Phân khu The Miami Vinhomes Smart City 17',
                'address'=>'khu đô thị Vinhomes Smart City, Nam Từ Liêm, Hà Nội',
                'price'=>'675000000',
                'information'=>'Công ty Cổ phần Đầu tư Xây dựng Thái Sơn',
                'informationDetail'=>'Tổng diện tích phân khu The Miami Vinhomes Smart City (tên gọi mới là The Grand Sapphire) là 3,3ha',
                'Thumnail'=>'https://static1.cafeland.vn/cafeland_img/300-180/2021/7/22/phan-khu-the-miami-vinhomes-smart-city.webp',
                'status'=>'1',
                'created_at'=> Carbon::now()
            ], [
                'name'=>'Phân khu The Miami Vinhomes Smart City 18',
                'address'=>'khu đô thị Vinhomes Smart City, Nam Từ Liêm, Hà Nội',
                'price'=>'675000000',
                'information'=>'Công ty Cổ phần Đầu tư Xây dựng Thái Sơn',
                'informationDetail'=>'Tổng diện tích phân khu The Miami Vinhomes Smart City (tên gọi mới là The Grand Sapphire) là 3,3ha',
                'Thumnail'=>'https://static1.cafeland.vn/cafeland_img/300-180/2021/7/22/phan-khu-the-miami-vinhomes-smart-city.webp',
                'status'=>'1',
                'created_at'=> Carbon::now()
            ], [
                'name'=>'Phân khu The Miami Vinhomes Smart City 19',
                'address'=>'khu đô thị Vinhomes Smart City, Nam Từ Liêm, Hà Nội',
                'price'=>'675000000',
                'information'=>'Công ty Cổ phần Đầu tư Xây dựng Thái Sơn',
                'informationDetail'=>'Tổng diện tích phân khu The Miami Vinhomes Smart City (tên gọi mới là The Grand Sapphire) là 3,3ha',
                'Thumnail'=>'https://static1.cafeland.vn/cafeland_img/300-180/2021/7/22/phan-khu-the-miami-vinhomes-smart-city.webp',
                'status'=>'1',
                'created_at'=> Carbon::now()
            ], [
                'name'=>'Phân khu The Miami Vinhomes Smart City 20',
                'address'=>'khu đô thị Vinhomes Smart City, Nam Từ Liêm, Hà Nội',
                'price'=>'675000000',
                'information'=>'Công ty Cổ phần Đầu tư Xây dựng Thái Sơn',
                'informationDetail'=>'Tổng diện tích phân khu The Miami Vinhomes Smart City (tên gọi mới là The Grand Sapphire) là 3,3ha',
                'Thumnail'=>'https://static1.cafeland.vn/cafeland_img/300-180/2021/7/22/phan-khu-the-miami-vinhomes-smart-city.webp',
                'status'=>'1',
                'created_at'=> Carbon::now()
            ],
        ]);
    }
}
