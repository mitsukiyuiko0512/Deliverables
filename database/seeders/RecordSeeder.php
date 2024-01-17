<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class RecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        DB::table('records')->insert([
                'days' => '1/1',
                'temputure' => '36.5°',
                'symptoms' => '調子が良い。',
                'approch' => '',
                'bookmark' => 'つける、つけない',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('records')->insert([
                'days' => '1/2',
                'temperature' => '36.6°',
                'symptoms' => '普通',
                'approch' => '',
                'bookmark' => 'つける、つけない',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('records')->insert([
                'days' => '1/3',
                'temperature' => '36.8°',
                'symptoms' => '咳、頭痛、吐き気',
                'approch' => '薬を飲んで安静にしていた。',
                'bookmark' => 'つける、つけない',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('records')->insert([
                'temperature' => '37.5°',
                'symptoms' => '咳、頭痛、吐き気',
                'approch' => '病院に行った。',
                'bookmark' => 'つける、つけない',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('records')->insert([
                'temperature' => '36.7°',
                'symptoms' => '咳、頭痛、吐き気',
                'approch' => '薬を飲んで安静にしていた。',
                'bookmark' => 'つける、つけない',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
