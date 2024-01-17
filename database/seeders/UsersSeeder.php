<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class UserdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        DB::table('users')->insert([
                'name' => '伊藤真理',
                'email' => 'itoumari0123@gmail.com',
                'password' => 'r3wdbh7f',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('users')->insert([
                'name' => '佐藤恵美',
                'email' => 'satouemi1147@gmail.com',
                'password' => 'b59kxtu7',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('users')->insert([
                'name' => '鈴木啓介',
                'email' => 'suzukikeisuke6748@gmail.com',
                'password' => 'u9ht78xp',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('users')->insert([
                'name' => '高橋涼',
                'email' => 't.ryou3321@yahoo.co.jp',
                'password' => 'q56gtn3s',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('users')->insert([
                'name' => '森若菜',
                'email' => 'wakanamori3685@yahoo.co.jp',
                'password' => 'm5h9b4gu',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
