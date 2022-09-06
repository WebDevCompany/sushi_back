<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Promo_codeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('promo_codes')->insert([
            ['name' => '345678', 'discount' => 10],
            ['name' => '202234', 'discount' => 20],
        ]);
    }
}
