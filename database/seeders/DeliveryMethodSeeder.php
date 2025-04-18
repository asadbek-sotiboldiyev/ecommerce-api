<?php

namespace Database\Seeders;

use App\Models\DeliveryMethod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeliveryMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DeliveryMethod::create([
            'name' => [
                'uz' => 'Tekin',
                'ru' => 'Bezplatniy'
            ],
            'estimated_time' => [
                'uz' => '5 kun',
                'ru' => '5 den',
            ],
            'sum' => 0
        ]);

        DeliveryMethod::create([
            'name' => [
                'uz' => 'Standart',
                'ru' => 'Standart'
            ],
            'estimated_time' => [
                'uz' => '3 kun',
                'ru' => '3 den',
            ],
            'sum' => 40000
        ]);

        DeliveryMethod::create([
            'name' => [
                'uz' => 'Tez',
                'ru' => 'ru Tez'
            ],
            'estimated_time' => [
                'uz' => '1 kun',
                'ru' => '1 den',
            ],
            'sum' => 100000
        ]);
    }
}
