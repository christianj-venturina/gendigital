<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AudioSpecsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('audio_specs')->delete();
        
        \DB::table('audio_specs')->insert(array (
            0 => 
            array (
                'product_id' => 11,
                'battery_life' => 'Up to 40 hours of battery life, providing long listening sessions without the need for frequent charging',
                'microphone' => 'Yes, comes with a built-in microphone for taking calls and accessing voice assistants',
                'noise_cancellation' => 'None, but the headphones offer Sensory Haptic Bass, which can create a physical sensation of bass, potentially offsetting the absence of active noise cancellation by immersing the listener in deep soundscapes',
                'add_features' => 'Personal Sound Customization, Tile Finding Technology, Quick Charge Feature, Foldable Design, Adjustable Sensory Bass, Built-in Equalizer',
                'color' => 'Black',
            ),
            1 => 
            array (
                'product_id' => 12,
                'battery_life' => 'Up to 23 hours with ANC on, providing long listening sessions without frequent charging',
                'microphone' => 'Yes, integrated microphone for clear calls and voice commands',
            'noise_cancellation' => 'Active Noise Cancellation (ANC) technology for immersive listening by minimizing external noise',
                'add_features' => 'Ambient Mode, Rapid Charge, Foldable Design, App Support',
                'color' => 'White',
            ),
            2 => 
            array (
                'product_id' => 13,
                'battery_life' => 'These earbuds usually offer a substantial battery life on a single charge, with additional charging provided by the case.',
                'microphone' => 'Yes, designed with integrated microphones for clear calls and voice assistant interaction',
                'noise_cancellation' => 'May offer passive noise isolation, which helps block out external sounds to some degree',
                'add_features' => 'Water and Sweat Resistance, Hands-Free Operation, Stay-Aware Mode, Skull-IQ Smart Feature, Customizable Fit',
                'color' => 'Light Gray',
            ),
            3 => 
            array (
                'product_id' => 14,
                'battery_life' => 'The Indy ANC earbuds generally offer a significant amount of playback time, with the charging case extending total battery life even further.',
                'microphone' => 'Yes, built-in microphones for calls and voice assistant access',
                'noise_cancellation' => 'Active Noise Cancellation technology to reduce unwanted ambient sounds, providing an immersive listening experience',
                'add_features' => 'Ambient Mode, Personal Sound Profile, IP Rating, Touch Controls, Find My Earbuds Feature ',
                'color' => 'Pink',
            ),
            4 => 
            array (
                'product_id' => 15,
            'battery_life' => 'Up to 24 hours of combined playback (4 hours from earbuds + 20 hours from the case)',
                'microphone' => 'Yes, for calls and voice assistant use',
                'noise_cancellation' => 'Passive noise isolation',
                'add_features' => 'IPX5-rated for splashproof protection, making them suitable for workouts',
                'color' => 'Black',
            ),
            5 => 
            array (
                'product_id' => 16,
            'battery_life' => 'Up to 21 hours of playback (7 hours from earbuds + 14 hours from the case)',
                'microphone' => 'Yes, with echo-canceling technology',
                'noise_cancellation' => 'Yes, Active Noise Cancelling.',
                'add_features' => 'IPX7 waterproof rating, customizable through JBL\'s app, and features like Ambient Aware and TalkThru technology for enhanced situational awareness.',
                'color' => 'White',
            ),
            6 => 
            array (
                'product_id' => 17,
                'battery_life' => 'Up to 20 hours of playback',
                'microphone' => 'Yes, with seamless switch between devices',
                'noise_cancellation' => 'No, passive noise isolation',
                'add_features' => 'Comfort-fit fabric headband, tangle-free fabric cable, and improved ergonomic design',
                'color' => 'Red',
            ),
            7 => 
            array (
                'product_id' => 18,
            'battery_life' => 'Up to 30 hours (20 hours with ANC on)',
                'microphone' => 'Yes, for calls and voice assistant access',
                'noise_cancellation' => 'Yes, Active Noise Cancelling',
                'add_features' => 'Access to voice assistants, customizable sound preferences through the My JBL Headphones app, and multi-point connection capabilities',
                'color' => 'Blue',
            ),
            8 => 
            array (
                'product_id' => 19,
                'battery_life' => 'Up to 15 hours of playback with ANC on',
                'microphone' => 'Yes, for hands-free calls',
                'noise_cancellation' => 'Yes, Active Noise Cancelling',
                'add_features' => 'Lightweight and foldable design for easy portability, JBL Pure Bass Sound for deep and powerful sound',
                'color' => 'Black',
            ),
            9 => 
            array (
                'product_id' => 20,
                'battery_life' => 'Typically offering over 80 hours of playtime',
                'microphone' => 'Yes, suitable for clear calls and voice commands',
                'noise_cancellation' => 'No, passive noise isolation',
                'add_features' => 'Quick Charge, Foldable/Portable Design',
                'color' => 'Black',
            ),
        ));
        
        
    }
}