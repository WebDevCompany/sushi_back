<?php
//AlexKhor
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('orders')->insert([
            [
                'phone' => '0662127163',
                'name' => 'Sasha',
                'payment_type_id' => '1',
                'street' => '1',
                'house' => '1',
                'banknote_for_change' => '1000',
                'flat' => '1',
                'entrance' => '11',
                'floor' => '4',
                'intercom_code' => '676',
                'order_comment' => 'Приезжайте мы Вас ждем с суши.',
                'delivery_type_id' => '1',
                'email' => 'alekshor@gmail.com',
                'delivery_type_id' => '1',
                'promo_code_id' => '1',
                'delivery_type_by_time_id' => '1',
            ],
            [
                'phone' => '65-40-42',
                'name' => 'Kolya',
                'payment_type_id' => '1',
                'street' => '1',
                'house' => '1',
                'banknote_for_change' => '5000',
                'flat' => '1',
                'entrance' => '1',
                'floor' => '1',
                'intercom_code' => '1',
                'order_comment' => '1',
                'delivery_type_id' => '1',
                'email' => '111@ukr.net',
                'delivery_type_id' => '1',
                'promo_code_id' => '1',
                'delivery_type_by_time_id' => '1',

            ],
        ]);
    }
}
