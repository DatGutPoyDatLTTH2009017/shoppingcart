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
                'id'=> 1,
                'name' => 'áo',
                'price' => 100000,
                'thumbnail'=>'http://media3.scdn.vn/img3/2019/2_23/pG6xVz_simg_d0daf0_800x1200_max.jpg',
                'created_at'=>Carbon::now()
            ],[
               'id' => 2,
                'name' => 'quần',
                'price' => 200000,
                'thumbnail'=>'https://cdn.vuahanghieu.com/unsafe/0x0/left/top/smart/filters:quality(90)/https://admin.vuahanghieu.com/upload/news/content/2020/08/cach-chon-size-quan-nam-13-jpg-1598602225-28082020151025.jpg',
                'created_at'=>Carbon::now()
            ],[
                'id' => 3,
                'name' => 'ví',
                'price' => 20000,
                'thumbnail'=>'http://kata.vn/userfiles/product/4353.jpg',
                'created_at'=>Carbon::now()
            ],[
                'id' => 4,
                'name' => 'túi xách',
                'price' => 20000,
                'thumbnail'=>'https://product.hstatic.net/1000003969/product/xanh_txn489_1_2ded522bd0e84f95ab7f7986f3269023_large.jpg',
                'created_at'=>Carbon::now()
            ],[
                'id' => 5,
                'name' => 'áo len',
                'price' => 500000,
                'thumbnail'=>'https://vn-test-11.slatic.net/p/mdc/1b55d16500bcd9fde9a63313e441b33b.jpg',
                'created_at'=>Carbon::now()
            ],[
                'id' => 6,
                'name' => 'áo dạ',
                'price' => 2000000,
                'thumbnail'=>'https://yoti.vn/vnt_upload/product/11_2020/S3099/ao_khoac_nu_7.jpg',
                'created_at'=>Carbon::now()
            ],[
                'id' => 7,
                'name' => 'áo hồng',
                'price' => 20000,
                'thumbnail'=>'https://storage.googleapis.com/cdn.nhanh.vn/store/13886/ps/20200515/22.jpg',
                'created_at'=>Carbon::now()
            ],[
                'id' => 8,
                'name' => 'quần sooc',
                'price' => 50000,
                'thumbnail'=>'https://hidanz.com/wp-content/uploads/2020/09/quan-short-nam-phai-co-trong-mua-he9.jpg',
                'created_at'=>Carbon::now()
            ],[
                'id' => 9,
                'name' => 'dép',
                'price' => 300000,
                'thumbnail'=>'https://file.hstatic.net/1000069459/file/z2077130733733_49d306cfecca1b0dfffebecf14fcadbf_802a9c38c59443d7868769743e955be9_grande.jpg',
                'created_at'=>Carbon::now()
            ],[
                'id' => 10,
                'name' => 'giày',
                'price' => 500000,
                'thumbnail'=>'https://giaysneaker.com.vn/public/media//thumb/giay-converse-co-ngan-den-570x570.jpg',
                'created_at'=>Carbon::now()
            ]
        ]);
    }
}
