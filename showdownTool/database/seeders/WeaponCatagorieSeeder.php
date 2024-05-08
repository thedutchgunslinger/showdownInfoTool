<?php

namespace Database\Seeders;

use App\Models\weaponCatagorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WeaponCatagorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        weaponCatagorie::create([
            'name' => 'Assault Rifle',
        ]);

        weaponCatagorie::create([
            'name' => 'Sub Machine Gun',
        ]);

        weaponCatagorie::create([
            'name' => 'Pistol',
        ]);

        weaponCatagorie::create([
            'name' => 'Shotgun',
        ]);

        weaponCatagorie::create([
            'name' => 'DMR',
        ]);

        weaponCatagorie::create([
            'name' => 'Sniper',
        ]);
    }
}
