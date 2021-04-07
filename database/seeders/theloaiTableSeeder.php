<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class theloaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('theloai')->insert([
        	'id' => int,
        	'HanhDong' => 'Phim Hoạt Hình',
        	'HaiHuoc' => 'Chi Đó cũng được',
        	'HapDan' => 'hello cac dai ca',
        ]);
    }
}
