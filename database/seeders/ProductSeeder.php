<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('products')->insert([
            [
                'name' => 'CeraVe Foaming Cleanser',
                'description' => 'Gentle facial cleanser for normal to oily skin.',
                'price' => 220.00,
                'image' => 'https://i.imgur.com/zW8iNfL.jpg',
            ],
            [
                'name' => 'The Ordinary Niacinamide Serum',
                'description' => 'Reduces blemishes and balances oil.',
                'price' => 180.00,
                'image' => 'https://i.imgur.com/9i1BQDc.jpg',
            ],
            [
                'name' => 'La Roche-Posay Anthelios SPF 50',
                'description' => 'High protection sunscreen with light texture.',
                'price' => 300.00,
                'image' => 'https://i.imgur.com/N4GCJFS.jpg',
            ],
            [
                'name' => 'Neutrogena Hydro Boost Gel',
                'description' => 'Hydrating gel moisturizer for smooth skin.',
                'price' => 250.00,
                'image' => 'https://i.imgur.com/bXYbhzP.jpg',
            ],
            [
                'name' => 'COSRX Salicylic Acid Cleanser',
                'description' => 'Daily exfoliating cleanser for acne-prone skin.',
                'price' => 195.00,
                'image' => 'https://i.imgur.com/CyJSnsZ.jpg',
            ],
            [
                'name' => 'Glow Recipe Watermelon Toner',
                'description' => 'Pore-tightening hydrating toner.',
                'price' => 270.00,
                'image' => 'https://i.imgur.com/04U0E3h.jpg',
            ],
            [
                'name' => 'The Inkey List Retinol',
                'description' => 'Beginner-friendly anti-aging retinol serum.',
                'price' => 210.00,
                'image' => 'https://i.imgur.com/L9cEV8N.jpg',
            ],
            [
                'name' => 'Paula’s Choice BHA Exfoliant',
                'description' => '2% salicylic acid liquid exfoliant for clear skin.',
                'price' => 330.00,
                'image' => 'https://i.imgur.com/eqMRkqf.jpg',
            ],
            [
                'name' => 'Avène Thermal Spring Water',
                'description' => 'Soothing and anti-irritating spray for all skin types.',
                'price' => 180.00,
                'image' => 'https://i.imgur.com/ndAnOZZ.jpg',
            ],
            [
                'name' => 'Dr. Jart+ Cicapair Cream',
                'description' => 'Calming cream for redness and sensitive skin.',
                'price' => 350.00,
                'image' => 'https://i.imgur.com/BrA2Lhf.jpg',
            ],
            [
                'name' => 'Cetaphil Gentle Cleanser',
                'description' => 'Non-irritating facial cleanser for dry and sensitive skin.',
                'price' => 160.00,
                'image' => 'https://i.imgur.com/Y4RgMfs.jpg',
            ],
            [
                'name' => 'Kiehl’s Ultra Facial Moisturizer',
                'description' => 'Lightweight daily moisturizer for all skin types.',
                'price' => 280.00,
                'image' => 'https://i.imgur.com/O9Or7SY.jpg',
            ],
            [
                'name' => 'Laneige Lip Sleeping Mask – Berry',
                'description' => 'Overnight lip mask for soft and smooth lips.',
                'price' => 200.00,
                'image' => 'https://i.imgur.com/yf7rPvP.jpg',
            ],
            [
                'name' => 'Pixi Glow Tonic',
                'description' => 'Glycolic acid toner for brighter skin.',
                'price' => 230.00,
                'image' => 'https://i.imgur.com/BM7U5d5.jpg',
            ],
            [
                'name' => 'Hada Labo Gokujyun Lotion',
                'description' => 'Deeply hydrating Japanese lotion with hyaluronic acid.',
                'price' => 240.00,
                'image' => 'https://i.imgur.com/2J9NwAV.jpg',
            ],
        ]);
    }
}
