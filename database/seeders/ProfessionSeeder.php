<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $professions = [
            'Suvoqchi',
            'Svarchik',
            'Mirob',
            'O’tinchi',
            'Elektrik',
            'Santexnik',
            'Tozalovchi',
            'Yuk tashuvchi'
        ];

        foreach ($professions as $name) {
            \App\Models\Profession::create(['name' => $name]);
        }
    }
}
