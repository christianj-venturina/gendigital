<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LaptopSpecsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('laptop_specs')->delete();
        
        \DB::table('laptop_specs')->insert(array (
            0 => 
            array (
                'product_id' => 21,
                'operating_system' => 'macOS',
                'processor' => 'M3 chip',
                'memory' => '36GB',
                'storage' => '8TB',
                'display' => '14-inch screen size',
                'graphics' => 'Integrated into the M3 chip, with performance suitable for professional creative workflows',
            'usb_ports' => 'Three Thunderbolt 4 (USB-C) ports',
                'hdmi' => '1 HDMI port',
                'ram_slots' => 'Not applicable',
                'color' => 'Silver',
            ),
            1 => 
            array (
                'product_id' => 22,
                'operating_system' => 'macOS',
                'processor' => 'M2 chip',
                'memory' => '24GB',
                'storage' => '2TB',
                'display' => '13.6-inch',
                'graphics' => 'Integrated graphics with the M2 chip, capable of handling everyday tasks and some light creative work',
                'usb_ports' => 'Two Thunderbolt / USB 4 ports',
                'hdmi' => 'Not applicable',
                'ram_slots' => 'Not applicable',
                'color' => 'Space Gray',
            ),
            2 => 
            array (
                'product_id' => 23,
                'operating_system' => 'macOS',
                'processor' => 'M3 Max chip',
                'memory' => '128GB',
                'storage' => '8TB',
                'display' => '16-inch',
                'graphics' => 'Integrated graphics performance scaled with the M3 Max chip capabilities',
            'usb_ports' => 'Three Thunderbolt 4 (USB-C) ports',
                'hdmi' => '1 HDMI port',
                'ram_slots' => 'Not applicable',
                'color' => 'Silver',
            ),
            3 => 
            array (
                'product_id' => 24,
                'operating_system' => 'Windows 11 Home',
                'processor' => 'Intel Core i3-1115G4',
                'memory' => '8GB DDR4',
                'storage' => '512GB NVMe SSD',
            'display' => '15.6" Full HD (1920 x 1080)',
                'graphics' => 'Intel UHD Graphics for 11th Gen Intel Processors',
                'usb_ports' => 'Two USB 3.2 Gen 1 Port',
                'hdmi' => '1 HDMI port',
                'ram_slots' => '1',
                'color' => 'Pure Silver',
            ),
            4 => 
            array (
                'product_id' => 25,
                'operating_system' => 'Windows 11 Home',
                'processor' => 'Intel Core i5-1135G7',
                'memory' => '8GB DDR4',
                'storage' => '512GB SSD',
            'display' => '15.6" Full HD (1920 x 1080)',
                'graphics' => 'NVIDIA GeForce MX350 with 2 GB of dedicated GDDR5 VRAM',
                'usb_ports' => 'Two USB 3.2 Gen 1 Port',
                'hdmi' => '1 HDMI port',
                'ram_slots' => '2',
                'color' => 'Charcoal Black',
            ),
            5 => 
            array (
                'product_id' => 26,
                'operating_system' => 'Windows 11 Home',
                'processor' => 'Intel Core i5-13500HX',
                'memory' => '12GB DDR5',
                'storage' => '513GB SSD',
            'display' => '16.0" with IPS, Full HD (1920 x1080)',
                'graphics' => 'NVIDIA GeForce RTX 4050 with 6GB of dedicated GDDR6 VRAM',
            'usb_ports' => '1 USB 3.2(Type-C) Ports',
                'hdmi' => '1 HDMI port',
                'ram_slots' => '2',
                'color' => 'Black',
            ),
            6 => 
            array (
                'product_id' => 27,
                'operating_system' => 'Windows 11 Home',
                'processor' => 'Intel Core i9-9980H',
                'memory' => '16GB',
                'storage' => '1TB SSD',
                'display' => '15.6-inch FHD',
                'graphics' => 'NVIDIA GeForce 1650',
                'usb_ports' => '1 USB 3.2 Gen 1 ',
                'hdmi' => '1 HDMI port',
                'ram_slots' => 'Not applicable',
                'color' => 'Iron Grey',
            ),
            7 => 
            array (
                'product_id' => 28,
                'operating_system' => 'Windows 11 Home',
                'processor' => 'Intel Core i7-10510U',
                'memory' => '8GB',
                'storage' => '512GB SSD',
                'display' => '14-inch FHD',
                'graphics' => 'NVIDIA GeForce MX250',
                'usb_ports' => '2 USB 3.2 Gen 1 Type-A',
                'hdmi' => '1 HDMI port',
                'ram_slots' => 'Not applicable',
                'color' => 'Silver',
            ),
            8 => 
            array (
                'product_id' => 29,
                'operating_system' => 'Windows 11 Home',
                'processor' => 'Intel Core i7-1065G7',
                'memory' => '16GB',
                'storage' => '512GB SSD',
                'display' => '15.6-inch FHD',
                'graphics' => 'NVIDIA GeForce MX330',
                'usb_ports' => '2 USB 3.2 Gen 1 ',
                'hdmi' => '1 HDMI port',
                'ram_slots' => '1',
                'color' => 'Black',
            ),
            9 => 
            array (
                'product_id' => 30,
                'operating_system' => 'Windows 11 Home 64-bit',
                'processor' => '14th Generation Intel Core Ultra 7-155H',
                'memory' => '32 GB LPDDR5x 6400MHz',
                'storage' => '512 GB PCIe NVMe TLC M.2 SSD',
                'display' => '14.0 inch, 1800 x 2880 Pixels, 2.8K OLED, multitouch-enabled',
                'graphics' => 'Intel Arc Graphics',
            'usb_ports' => '3 (1 USB Type-A 10Gbps, 2 Thunderbolt 4 with USB Type-C 40Gbps)',
                'hdmi' => '1 HDMI 2.1 port',
                'ram_slots' => 'Not applicable',
                'color' => 'Slate Blue',
            ),
        ));
        
        
    }
}