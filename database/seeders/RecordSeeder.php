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
                'temperature' => 36.5,
                'symptoms' => '咳、鼻水、頭痛',
                'approach' => '薬を飲んで寝た',
                'bookmark' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
    }
}
