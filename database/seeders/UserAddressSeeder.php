<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::find(1)->addresses()->create([
            "latitude" => "12.421245",
            "longitude" => "521.13215",
            "region" => "Xorazm",
            "district" => "Bagat",
            "street" => "Oqtepa",
            "home" => "23"
        ]);
        
        User::find(1)->addresses()->create([
            "latitude" => "35.421245",
            "longitude" => "65.13215",
            "region" => "Xorazm",
            "district" => "Bagat",
            "street" => "Dehqonbozor",
            "home" => "2"
        ]);
    }
}
