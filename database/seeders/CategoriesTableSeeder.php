<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'category_id' => 1,
                'name' => 'Mobile',
            ),
            1 => 
            array (
                'category_id' => 2,
                'name' => 'Audio',
            ),
            2 => 
            array (
                'category_id' => 3,
                'name' => 'Laptops',
            ),
        ));
        
        
    }
}