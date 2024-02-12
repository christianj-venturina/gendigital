<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders')->delete();
        
        \DB::table('orders')->insert(array (
            0 => 
            array (
                'order_id' => 1,
                'time_placed' => '2024-02-10',
                'status' => 'packed',
                'user_id' => 2,
            ),
            1 => 
            array (
                'order_id' => 2,
                'time_placed' => '2024-02-10',
                'status' => 'waiting',
                'user_id' => 2,
            ),
            2 => 
            array (
                'order_id' => 3,
                'time_placed' => '2024-02-11',
                'status' => 'waiting',
                'user_id' => 3,
            ),
            3 => 
            array (
                'order_id' => 4,
                'time_placed' => '2024-02-11',
                'status' => 'waiting',
                'user_id' => 3,
            ),
        ));
        
        
    }
}