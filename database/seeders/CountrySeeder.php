<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $asianCountries = [
            ['country' => 'Afghanistan'],
            ['country' => 'Armenia'],
            ['country' => 'Azerbaijan'],
            ['country' => 'Bahrain'],
            ['country' => 'Bangladesh'],
            ['country' => 'Bhutan'],
            ['country' => 'Brunei'],
            ['country' => 'Cambodia'],
            ['country' => 'China'],
            ['country' => 'Cyprus'],
            ['country' => 'Georgia'],
            ['country' => 'India'],
            ['country' => 'Indonesia'],
            ['country' => 'Iran'],
            ['country' => 'Iraq'],
            ['country' => 'Israel'],
            ['country' => 'Japan'],
            ['country' => 'Jordan'],
            ['country' => 'Kazakhstan'],
            ['country' => 'Kuwait'],
            ['country' => 'Kyrgyzstan'],
            ['country' => 'Laos'],
            ['country' => 'Lebanon'],
            ['country' => 'Malaysia'],
            ['country' => 'Maldives'],
            ['country' => 'Mongolia'],
            ['country' => 'Myanmar'],
            ['country' => 'Nepal'],
            ['country' => 'North Korea'],
            ['country' => 'Oman'],
            ['country' => 'Pakistan'],
            ['country' => 'Palestine'],
            ['country' => 'Philippines'],
            ['country' => 'Qatar'],
            ['country' => 'Saudi Arabia'],
            ['country' => 'Singapore'],
            ['country' => 'South Korea'],
            ['country' => 'Sri Lanka'],
            ['country' => 'Syria'],
            ['country' => 'Tajikistan'],
            ['country' => 'Thailand'],
            ['country' => 'Timor-Leste'],
            ['country' => 'Turkey'],
            ['country' => 'Turkmenistan'],
            ['country' => 'United Arab Emirates'],
            ['country' => 'Uzbekistan'],
            ['country' => 'Vietnam'],
            ['country' => 'Yemen'],
        ];

        foreach ($asianCountries as $country) {
            Country::create($country);
        }
    }
}
