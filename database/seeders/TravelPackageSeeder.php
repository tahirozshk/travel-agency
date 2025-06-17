<?php

namespace Database\Seeders;

use App\Models\TravelPackage;
use Illuminate\Database\Seeder;

class TravelPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $packages = [
            [
                'name' => 'Bali Paradise Explorer',
                'description' => 'Experience the magic of Bali with this comprehensive tour package. Visit ancient temples, relax on pristine beaches, and immerse yourself in the local culture.',
                'destination' => 'Bali, Indonesia',
                'price' => 1299.99,
                'duration_days' => 7,
                'image_path' => 'https://images.unsplash.com/photo-1537996194471-e657df975ab4',
                'is_featured' => true,
            ],
            [
                'name' => 'Tokyo Adventure',
                'description' => 'Discover the vibrant city of Tokyo, from traditional temples to modern technology. Experience Japanese culture, cuisine, and entertainment.',
                'destination' => 'Tokyo, Japan',
                'price' => 2499.99,
                'duration_days' => 8,
                'image_path' => 'https://images.unsplash.com/photo-1540959733332-eab4deabeeaf',
                'is_featured' => true,
            ],
            [
                'name' => 'Paris Romance Package',
                'description' => 'Fall in love with the City of Light. Visit iconic landmarks, enjoy French cuisine, and cruise along the Seine River.',
                'destination' => 'Paris, France',
                'price' => 1899.99,
                'duration_days' => 6,
                'image_path' => 'https://images.unsplash.com/photo-1502602898657-3e91760cbb34',
                'is_featured' => true,
            ],
            [
                'name' => 'Greek Islands Hopping',
                'description' => 'Explore the beautiful Greek islands, from Santorini to Mykonos. Experience Mediterranean culture, food, and stunning sunsets.',
                'destination' => 'Greek Islands, Greece',
                'price' => 2199.99,
                'duration_days' => 10,
                'image_path' => 'https://images.unsplash.com/photo-1533105079780-92b9be482077',
                'is_featured' => true,
            ],
            [
                'name' => 'Swiss Alps Adventure',
                'description' => 'Experience the majestic Swiss Alps with skiing, hiking, and scenic train rides. Enjoy luxury accommodations and Swiss hospitality.',
                'destination' => 'Swiss Alps, Switzerland',
                'price' => 2899.99,
                'duration_days' => 8,
                'image_path' => 'https://images.unsplash.com/photo-1452784444945-3f422708fe5e',
                'is_featured' => false,
            ],
            [
                'name' => 'Maldives Paradise',
                'description' => 'Escape to crystal clear waters and white sandy beaches. Stay in overwater villas and enjoy world-class snorkeling and diving.',
                'destination' => 'Maldives',
                'price' => 3499.99,
                'duration_days' => 7,
                'image_path' => 'https://images.unsplash.com/photo-1514282401047-d79a71a590e8',
                'is_featured' => true,
            ],
            [
                'name' => 'African Safari Experience',
                'description' => 'Embark on an unforgettable safari adventure in Tanzania. Witness the great migration and spot the Big Five in their natural habitat.',
                'destination' => 'Tanzania',
                'price' => 4299.99,
                'duration_days' => 9,
                'image_path' => 'https://images.unsplash.com/photo-1516426122078-c23e76319801',
                'is_featured' => true,
            ],
            [
                'name' => 'New York City Explorer',
                'description' => 'Experience the energy of the Big Apple. Visit famous landmarks, enjoy Broadway shows, and explore diverse neighborhoods.',
                'destination' => 'New York, USA',
                'price' => 1599.99,
                'duration_days' => 5,
                'image_path' => 'https://images.unsplash.com/photo-1496442226666-8d4d0e62e6e9',
                'is_featured' => false,
            ],
            [
                'name' => 'Dubai Luxury Escape',
                'description' => 'Indulge in the ultimate luxury experience in Dubai. Stay in world-class hotels, shop in mega malls, and adventure in the desert.',
                'destination' => 'Dubai, UAE',
                'price' => 2999.99,
                'duration_days' => 6,
                'image_path' => 'https://images.unsplash.com/photo-1512453979798-5ea266f8880c',
                'is_featured' => true,
            ],
            [
                'name' => 'Machu Picchu Trek',
                'description' => 'Journey through the Sacred Valley to the ancient Incan citadel. Experience Peruvian culture and stunning mountain landscapes.',
                'destination' => 'Cusco, Peru',
                'price' => 2799.99,
                'duration_days' => 8,
                'image_path' => 'https://images.unsplash.com/photo-1526392060635-9d6019884377',
                'is_featured' => true,
            ],
            [
                'name' => 'Thailand Beach Retreat',
                'description' => 'Relax on pristine Thai beaches, explore stunning islands, and enjoy authentic Thai cuisine and culture.',
                'destination' => 'Phuket, Thailand',
                'price' => 1799.99,
                'duration_days' => 7,
                'image_path' => 'https://images.unsplash.com/photo-1490077476659-095159692ab5',
                'is_featured' => false,
            ],
            [
                'name' => 'Iceland Northern Lights',
                'description' => 'Chase the Aurora Borealis, bathe in geothermal springs, and explore dramatic ice caves and waterfalls.',
                'destination' => 'Iceland',
                'price' => 3299.99,
                'duration_days' => 6,
                'image_path' => 'https://images.unsplash.com/photo-1579033461380-adb47c3eb938',
                'is_featured' => true,
            ]
        ];

        foreach ($packages as $package) {
            TravelPackage::create($package);
        }
    }
}
