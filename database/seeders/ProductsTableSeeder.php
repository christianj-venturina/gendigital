<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'product_id' => 1,
                'name' => 'Samsung Galaxy S24',
                'price' => 60000,
                'category_id' => 1,
            ),
            1 => 
            array (
                'product_id' => 2,
                'name' => 'Samsung Galaxy S24+',
                'price' => 68990,
                'category_id' => 1,
            ),
            2 => 
            array (
                'product_id' => 3,
                'name' => 'Samsung Galaxy S24 Ultra',
                'price' => 92990,
                'category_id' => 1,
            ),
            3 => 
            array (
                'product_id' => 4,
                'name' => 'iPhone 15 Pro Max',
                'price' => 99990,
                'category_id' => 1,
            ),
            4 => 
            array (
                'product_id' => 5,
                'name' => 'iPhone 15',
                'price' => 59990,
                'category_id' => 1,
            ),
            5 => 
            array (
                'product_id' => 6,
                'name' => 'iPhone 14',
                'price' => 56990,
                'category_id' => 1,
            ),
            6 => 
            array (
                'product_id' => 7,
                'name' => 'Huawei Mate 60 Pro+',
                'price' => 54945,
                'category_id' => 1,
            ),
            7 => 
            array (
                'product_id' => 8,
                'name' => 'Nova 12 Pro',
                'price' => 38410,
                'category_id' => 1,
            ),
            8 => 
            array (
                'product_id' => 9,
                'name' => 'POCO X6 5G',
                'price' => 14999,
                'category_id' => 1,
            ),
            9 => 
            array (
                'product_id' => 10,
                'name' => 'POCO X6 Pro 5G',
                'price' => 16999,
                'category_id' => 1,
            ),
            10 => 
            array (
                'product_id' => 11,
                'name' => 'Skullcandy Crusher Evo Wireless Over-Ear Headphone',
                'price' => 10290,
                'category_id' => 2,
            ),
            11 => 
            array (
                'product_id' => 12,
                'name' => 'Skullcandy Hesh ANC Wireless Headphones',
                'price' => 8301,
                'category_id' => 2,
            ),
            12 => 
            array (
                'product_id' => 13,
                'name' => 'Skullcandy Push Active True Wireless Earbuds',
                'price' => 5450,
                'category_id' => 2,
            ),
            13 => 
            array (
                'product_id' => 14,
                'name' => 'Skullcandy Indy ANC True Wireless Earbuds',
                'price' => 11230,
                'category_id' => 2,
            ),
            14 => 
            array (
                'product_id' => 15,
                'name' => 'JBL Free X',
                'price' => 7999,
                'category_id' => 2,
            ),
            15 => 
            array (
                'product_id' => 16,
                'name' => 'JBL Reflect Mini NC TWS',
                'price' => 5800,
                'category_id' => 2,
            ),
            16 => 
            array (
                'product_id' => 17,
                'name' => 'JBL E55BT',
                'price' => 6990,
                'category_id' => 2,
            ),
            17 => 
            array (
                'product_id' => 18,
                'name' => 'JBL Live 650BTNC',
                'price' => 9980,
                'category_id' => 2,
            ),
            18 => 
            array (
                'product_id' => 19,
                'name' => 'JBL Tune 750BTNC',
                'price' => 7499,
                'category_id' => 2,
            ),
            19 => 
            array (
                'product_id' => 20,
                'name' => 'Marshall Major IV Bluetooth Headphones',
                'price' => 8690,
                'category_id' => 2,
            ),
            20 => 
            array (
                'product_id' => 21,
                'name' => 'MacBook Pro 14-inch with M3 Chip',
                'price' => 104990,
                'category_id' => 3,
            ),
            21 => 
            array (
                'product_id' => 22,
                'name' => 'MacBook Air with M2 Chip',
                'price' => 69990,
                'category_id' => 3,
            ),
            22 => 
            array (
                'product_id' => 23,
                'name' => 'MacBook Pro 16-inch with M3 Pro/Max Chip',
                'price' => 159990,
                'category_id' => 3,
            ),
            23 => 
            array (
                'product_id' => 24,
                'name' => 'Acer Aspire 3 A315-58-397K',
                'price' => 32999,
                'category_id' => 3,
            ),
            24 => 
            array (
                'product_id' => 25,
                'name' => 'Acer Aspire 5 A515-56G-5186',
                'price' => 45999,
                'category_id' => 3,
            ),
            25 => 
            array (
                'product_id' => 26,
            'name' => '(Acer) Predator Helios Neo PHN16-71-59F1',
                'price' => 80000,
                'category_id' => 3,
            ),
            26 => 
            array (
                'product_id' => 27,
                'name' => 'Lenovo Yoga Slim 7i',
                'price' => 109995,
                'category_id' => 3,
            ),
            27 => 
            array (
                'product_id' => 28,
                'name' => 'Lenovo IdeaPad Slim 5i',
                'price' => 59995,
                'category_id' => 3,
            ),
            28 => 
            array (
                'product_id' => 29,
                'name' => 'Lenovo IdeaPad Flex 5',
                'price' => 64995,
                'category_id' => 3,
            ),
            29 => 
            array (
                'product_id' => 30,
            'name' => 'HP Spectre x360 14 (2024)',
                'price' => 86100,
                'category_id' => 3,
            ),
        ));
        
        
    }
}