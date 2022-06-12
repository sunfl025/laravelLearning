<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            "name" => "Do Thuy Trang",
            "email" => "trang@gmail.com",
            "password" => "123456",
            "role" => "admin",
            "status" => "publish"
        ]);
        User::insert(
            [
                "name" => "Ha Thanh Hai",
                "email" => "hai@gmail.com",
                "password" => "123456",
                "role" => "admin",
                "status" => "publish"
            ]
        );
    }
}
