<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FireType;

class FireTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FireType::create([
            'firingMode' => 'Semi',
        ]);

        FireType::create([
            'firingMode' => 'Semi, Automatic',
        ]);

        FireType::create([
            'firingMode' => 'Semi, Burst',
        ]);

        FireType::create([
            'firingMode' => 'Semi, Burst, Automatic',
        ]);

        FireType::create([
            'firingMode' => 'Bolt Action',
        ]);
    }
}
