<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $result = DB::table('users')->insert([
            'name' => str_random(3),
            'KullaniciID' => uniqid(),
            'Ad' => str_random(5),
            'Soyad' => str_random(5),
            'Unvan' => str_random(5),
            'AdSoyad' => str_random(10),
            'KullaniciTur' => str_random(5),
        ]);
    }
}