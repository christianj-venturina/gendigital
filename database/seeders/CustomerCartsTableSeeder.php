<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomerCartsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('customer_carts')->delete();
        
        \DB::table('customer_carts')->insert(array (
            0 => 
            array (
                'cart_product_id' => 1,
                'user_id' => 2,
                'name' => 'Samsung Galaxy S24',
                'product_id' => 1,
            ),
            1 => 
            array (
                'cart_product_id' => 2,
                'user_id' => 2,
                'name' => 'JBL Live 650BTNC',
                'product_id' => 18,
            ),
            2 => 
            array (
                'cart_product_id' => 5,
                'user_id' => 2,
                'name' => 'POCO X6 5G',
                'product_id' => 9,
            ),
            3 => 
            array (
                'cart_product_id' => 6,
                'user_id' => 3,
                'name' => 'Lenovo IdeaPad Slim 5i',
                'product_id' => 28,
            ),
            4 => 
            array (
                'cart_product_id' => 7,
                'user_id' => 3,
                'name' => 'Skullcandy Indy ANC True Wireless Earbuds',
                'product_id' => 14,
            ),
        ));
        
        
    }
}