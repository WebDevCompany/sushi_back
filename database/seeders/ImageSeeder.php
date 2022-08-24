<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    //
    DB::table('images')->insert([
        [
            'product_id' => '65',
            'path' => '1_sushi.png',
            'position' => '1',
        ],
        
        [
            'product_id' => '66',
            'path' => '2_sushi.png',
            'position' => '1',
        ],
        
        [
            'product_id' => '67',
            'path' => '3_sushi.png',
            'position' => '1',
        ],
    ]);
  }

}
