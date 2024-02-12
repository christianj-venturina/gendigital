<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrderProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('order_products')->delete();
        
        \DB::table('order_products')->insert(array (
            0 => 
            array (
                'order_product_id' => 1,
                'order_id' => 1,
            'name' => '(Acer) Predator Helios Neo PHN16-71-59F1',
                'product_id' => 26,
                'quantity' => 2,
            ),
            1 => 
            array (
                'order_product_id' => 2,
                'order_id' => 2,
                'name' => 'Samsung Galaxy S24',
                'product_id' => 1,
                'quantity' => 1,
            ),
            2 => 
            array (
                'order_product_id' => 3,
                'order_id' => 2,
                'name' => 'JBL Live 650BTNC',
                'product_id' => 18,
                'quantity' => 1,
            ),
            3 => 
            array (
                'order_product_id' => 4,
                'order_id' => 3,
            'name' => 'HP Spectre x360 14 (2024)',
                'product_id' => 30,
                'quantity' => 2,
            ),
            4 => 
            array (
                'order_product_id' => 5,
                'order_id' => 4,
                'name' => 'iPhone 15',
                'product_id' => 5,
                'quantity' => 1,
            ),
        ));
        
        
    }
}