<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductPhotosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_photos')->delete();
        
        \DB::table('product_photos')->insert(array (
            0 => 
            array (
                'product_id' => 1,
                'image' => 'S24_main.png',
            ),
            1 => 
            array (
                'product_id' => 2,
                'image' => 'Samsung Galaxy S24 plus_main.png',
            ),
            2 => 
            array (
                'product_id' => 3,
                'image' => 'Samsung Galaxy S24 Ultra_main.png',
            ),
            3 => 
            array (
                'product_id' => 4,
                'image' => 'iPhone 15 Pro Max_main.png',
            ),
            4 => 
            array (
                'product_id' => 5,
                'image' => 'iPhone 15_main.png',
            ),
            5 => 
            array (
                'product_id' => 6,
                'image' => 'iPhone 14_main.png',
            ),
            6 => 
            array (
                'product_id' => 7,
                'image' => 'Huawei Mate 60 Pro plus_main.png',
            ),
            7 => 
            array (
                'product_id' => 8,
                'image' => 'Nova 12 Pro_main.png',
            ),
            8 => 
            array (
                'product_id' => 9,
                'image' => 'POCO X6 5G_main.png',
            ),
            9 => 
            array (
                'product_id' => 10,
                'image' => 'POCO X6 Pro 5G_main.png',
            ),
            10 => 
            array (
                'product_id' => 11,
                'image' => 'Skullcandy Crusher Evo Wireless Over-Ear Headphone_main.png',
            ),
            11 => 
            array (
                'product_id' => 12,
                'image' => 'Skullcandy Hesh ANC Wireless Headphones_main.png',
            ),
            12 => 
            array (
                'product_id' => 13,
                'image' => 'Skullcandy Push Active True Wireless Earbuds_main.png',
            ),
            13 => 
            array (
                'product_id' => 14,
                'image' => 'Skullcandy Indy ANC True Wireless Earbuds_main.png',
            ),
            14 => 
            array (
                'product_id' => 15,
                'image' => 'JBL Free X_main.png',
            ),
            15 => 
            array (
                'product_id' => 16,
                'image' => 'JBL Reflect Mini NC TWS_main.png',
            ),
            16 => 
            array (
                'product_id' => 17,
                'image' => 'JBL E55BT_main.png',
            ),
            17 => 
            array (
                'product_id' => 18,
                'image' => 'JBL Live 650BTNC_main.png',
            ),
            18 => 
            array (
                'product_id' => 19,
                'image' => 'JBL Tune 750BTNC_main.png',
            ),
            19 => 
            array (
                'product_id' => 20,
                'image' => 'Marshall Major IV Bluetooth Headphones_main.png',
            ),
            20 => 
            array (
                'product_id' => 21,
                'image' => 'MacBook Pro 14-inch with M3 Chip_main.png',
            ),
            21 => 
            array (
                'product_id' => 22,
                'image' => 'MacBook Air with M2 Chip_main.png',
            ),
            22 => 
            array (
                'product_id' => 23,
                'image' => 'MacBook Pro 16-inch with M3 Pro_Max Chip_main.png',
            ),
            23 => 
            array (
                'product_id' => 24,
                'image' => 'Acer Aspire 3 A315-58-397K_main.png',
            ),
            24 => 
            array (
                'product_id' => 25,
                'image' => 'Acer Aspire 5 A515-56G-5186_main.png',
            ),
            25 => 
            array (
                'product_id' => 26,
            'image' => '(Acer) Predator Helios Neo PHN16-71-59F1_main.png',
            ),
            26 => 
            array (
                'product_id' => 27,
                'image' => 'Lenovo Yoga Slim 7i_main.png',
            ),
            27 => 
            array (
                'product_id' => 28,
                'image' => 'Lenovo IdeaPad Slim 5i_main.png',
            ),
            28 => 
            array (
                'product_id' => 29,
                'image' => 'Lenovo IdeaPad Flex 5_main.png',
            ),
            29 => 
            array (
                'product_id' => 30,
            'image' => 'HP Spectre x360 14 (2024)_main.png',
            ),
        ));
        
        
    }
}