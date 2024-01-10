<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;　
// use DateTime;　

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        DB::table('posts')->insert([
                'symptoms' => '症状',
                'result' => '診察結果',
                'drug' => '処方薬',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
