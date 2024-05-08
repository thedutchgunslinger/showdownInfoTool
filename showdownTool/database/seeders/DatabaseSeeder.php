<?php

namespace Database\Seeders;

use App\Models\DMR;
use App\Models\FireType;
use App\Models\Sniper;
use App\Models\User;
use App\Models\Weapon;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            FireTypeSeeder::class,
            WeaponCatagorieSeeder::class,
            WeaponSeeder::class,
        ]);
    }
}
