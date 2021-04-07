<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class nguoidungTableSeeder extends Seeder
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
        	'userName' => 'Sinh',
        	'password' => '123456',
        ]);
    }
}
