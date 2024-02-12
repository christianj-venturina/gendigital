<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MobileSpecsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('mobile_specs')->delete();
        
        \DB::table('mobile_specs')->insert(array (
            0 => 
            array (
                'product_id' => 1,
                'operating_system' => 'Android 14, One UI 6.1',
            'processor' => 'Qualcomm Snapdragon 8 Gen 3 (US, Canada) / Exynos 2400 (International)',
                'memory' => '9GB RAM',
                'storage' => '256GB',
            'rear_cam_mp' => '50MP (wide) + 10MP (telephoto, 3x optical zoom) + 12MP (ultra-wide)',
                'front_cam_mp' => '12MP',
                'display' => '6.2-inch FHD+ Dynamic LTPO AMOLED 2x, 2340 x 1080 resolution',
                'battery_capacity' => '4,000mAh',
                'charger' => '25W wired charging',
                'usb_interface' => 'USB-C',
                'sim_slots' => 'Triple SIM',
                'external_memory' => 'Not supported',
                'color' => 'Onyx Black',
            ),
            1 => 
            array (
                'product_id' => 2,
                'operating_system' => 'Android 14, One UI 6.1',
            'processor' => 'Qualcomm Snapdragon 8 Gen 3 (US, Canada) / Exynos 2400 (International)',
                'memory' => '12GB RAM',
                'storage' => '256GB',
            'rear_cam_mp' => '50MP (f/1.8, OIS, dual-pixel PDAF) + 10MP (3x telephoto, PDAF, OIS) + 12MP (ultra-wide)',
                'front_cam_mp' => '12MP',
                'display' => '6.7-inch QHD+ Dynamic LTPO AMOLED 2x, 3088 x 1440 resolution',
                'battery_capacity' => '4,900mAh',
                'charger' => '45W wired, 15W wireless charging',
                'usb_interface' => 'USB-C',
                'sim_slots' => 'Dual SIM',
                'external_memory' => 'Not supported',
                'color' => 'Cobalt Violet',
            ),
            2 => 
            array (
                'product_id' => 3,
                'operating_system' => 'Android 14, One UI 6.1',
            'processor' => 'Qualcomm Snapdragon 8 Gen 3 (all regions)',
                'memory' => '12GB RAM',
                'storage' => '512GB',
                'rear_cam_mp' => 'Advanced Quad setup',
                'front_cam_mp' => 'High-resolution sensor',
                'display' => 'Largest in the series',
                'battery_capacity' => 'Large capacity with fast charging',
                'charger' => 'Fast charging supported',
                'usb_interface' => 'USB-C',
                'sim_slots' => 'Dual SIM',
                'external_memory' => 'Not supported',
                'color' => 'Titanium Gray',
            ),
            3 => 
            array (
                'product_id' => 4,
                'operating_system' => 'iOS 17',
                'processor' => 'A17 Bionic chip',
                'memory' => '8GB RAM',
                'storage' => '128GB',
                'rear_cam_mp' => '48MP main',
                'front_cam_mp' => '12MP',
                'display' => '6.7 inches',
                'battery_capacity' => '4,422mAh',
                'charger' => 'USB-C',
                'usb_interface' => 'USB-C',
            'sim_slots' => 'Dual SIM (nano-SIM and eSIM)',
                'external_memory' => 'Not supported',
                'color' => 'Titanium Yellow',
            ),
            4 => 
            array (
                'product_id' => 5,
                'operating_system' => 'iOS 17',
                'processor' => 'A17 Bionic',
                'memory' => '6GB RAM',
                'storage' => '128GB',
                'rear_cam_mp' => '48MP wide',
                'front_cam_mp' => '12MP',
                'display' => '6.1 inches',
                'battery_capacity' => '3,095mAh',
                'charger' => 'USB-C',
                'usb_interface' => 'USB-C',
            'sim_slots' => 'Dual SIM (nano-SIM and eSIM)',
                'external_memory' => 'Not supported',
                'color' => 'Green',
            ),
            5 => 
            array (
                'product_id' => 6,
                'operating_system' => 'iOS 16',
            'processor' => 'Apple A15 Bionic (5 nm)',
                'memory' => '4GB RAM',
                'storage' => '128GB',
            'rear_cam_mp' => '12MP, f/2.4, 13mm, 120? (ultrawide)',
                'front_cam_mp' => 'High-resolution sensor',
                'display' => '6.1 inches',
                'battery_capacity' => '3,279mAh',
                'charger' => 'Fast charging and wireless charging',
                'usb_interface' => 'Lightning',
            'sim_slots' => 'Dual SIM (nano-SIM and eSIM)',
                'external_memory' => 'Not supported',
                'color' => 'Starlight',
            ),
            6 => 
            array (
                'product_id' => 7,
                'operating_system' => 'HarmonyOS 4.0',
            'processor' => 'Kirin 9000S (7 nm)',
                'memory' => '16GB RAM',
                'storage' => '512GB',
            'rear_cam_mp' => 'Triple - 48MP wide, 48MP periscope telephoto (3.5x optical zoom), 40MP ultrawide',
                'front_cam_mp' => '13MP ultrawide, TOF 3D',
                'display' => '6.82 inches, LTPO OLED, 1260 x 2720 pixels',
                'battery_capacity' => '5000 mAh',
                'charger' => '88W wired, 50W wireless, 20W reverse wireless',
                'usb_interface' => 'USB Type-C 3.1',
            'sim_slots' => 'Dual SIM (Nano-SIM, dual stand-by)',
                'external_memory' => 'NM card up to 256GB',
                'color' => 'Light Gold',
            ),
            7 => 
            array (
                'product_id' => 8,
                'operating_system' => 'HarmonyOS 4.0',
            'processor' => 'Kirin 9000S (7 nm) Octa-core',
                'memory' => '8GB',
                'storage' => '256GB',
            'rear_cam_mp' => 'Dual setup with 50MP (wide) + 8MP (ultrawide)',
            'front_cam_mp' => 'Dual setup with 8MP (telephoto) + 60MP (ultrawide)',
                'display' => '6.76 inches, LTPO OLED, 1224 x 2776 pixels resolution',
                'battery_capacity' => '4600 mAh, supports 100W wired and 5W reverse wired charging',
                'charger' => '100W wired charging',
                'usb_interface' => 'USB Type-C 2.0, OTG',
            'sim_slots' => 'Dual SIM (Nano-SIM, dual stand-by)',
                'external_memory' => 'Not supported',
                'color' => 'Pink',
            ),
            8 => 
            array (
                'product_id' => 9,
                'operating_system' => 'Android 13 with MIUI 14 for POCO',
                'processor' => 'Qualcomm Snapdragon 7s Gen 2',
                'memory' => '8GB',
                'storage' => '256GB',
                'rear_cam_mp' => 'Triple - 64MP main, 8MP ultra-wide, 2MP macro',
                'front_cam_mp' => '16MP',
                'display' => '6.67-inch AMOLED, 120Hz, 1220 x 2712 pixels',
                'battery_capacity' => '5100 mAh, with 67W fast charging',
                'charger' => 'USB Type-C',
                'usb_interface' => 'USB Type-C',
            'sim_slots' => 'Dual SIM (Nano-SIM)',
                'external_memory' => 'Not supported',
                'color' => 'White',
            ),
            9 => 
            array (
                'product_id' => 10,
                'operating_system' => 'Android 13',
                'processor' => 'MediaTek Dimensity 8300',
                'memory' => '12GB RAM',
                'storage' => '512GB',
                'rear_cam_mp' => '64MP main camera with OIS',
                'front_cam_mp' => 'High-resolution sensor similar to the X6 5G model',
                'display' => '6.67-inch 120Hz AMOLED with a 1.5K resolution',
                'battery_capacity' => 'Not specifically mentioned but includes 67W charging',
                'charger' => 'USB Type-C',
                'usb_interface' => 'USB Type-C',
                'sim_slots' => 'Dual SIM',
                'external_memory' => 'Not supported',
                'color' => 'Black',
            ),
        ));
        
        
    }
}