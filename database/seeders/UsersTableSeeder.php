<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'user_id' => 1,
                'first_name' => 'Christian',
                'last_name' => 'Venturina',
                'email' => 'admin@gendigital.com',
                'password' => '$2y$12$8jqLVoKWz2T.Co2hgR5RN.pSC3Ns9vM95ABsTg1BcZhtebnxcNyQG',
                'role' => 'admin',
                'shipping_address' => NULL,
            ),
            1 => 
            array (
                'user_id' => 2,
                'first_name' => 'Juan',
                'last_name' => 'DC',
                'email' => 'juan.delacruz@gmail.com',
                'password' => '$2y$12$mZ3F5gSH1JhPS7vIGTZoUu8fPbZGf2CV1x5xzxCkX5TE3ArIN1Gtu',
                'role' => 'customer',
                'shipping_address' => 'Block 1, lot 2, phase 3, Main street, ABC Subdivision, Baranggay Poblacion, Manila City',
            ),
            2 => 
            array (
                'user_id' => 3,
                'first_name' => 'Jane',
                'last_name' => 'Doe',
                'email' => 'jane.doe@hotmail.com',
                'password' => '$2y$12$.90PSQIQ1x8iVXd9E/r9Ru4Meu0s48efwzMUrZkCkQGZr8KWUy6fG',
                'role' => 'customer',
                'shipping_address' => '123, Main Street, Barangay San Juan, Manila',
            ),
        ));
        
        
    }
}