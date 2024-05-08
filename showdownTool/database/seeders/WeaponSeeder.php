<?php

namespace Database\Seeders;

use App\Models\Weapon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WeaponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Weapon::create([
            'name' => 'AKM',
            'realName' => 'AKM',
            'pellets' => 1,
            'headshotDamage' => 52.8,
            'torsoDamage' => 33,
            'limbDamage' => 28,
            'feetDamage' => 28,
            'magSize' => 31,
            'fireRate' => 550,
            'bulletVelocity' => 715,
            'adsMobility' => 3.28,
            'firingModes' => 2,
            'weaponType' => 1,
        ]);

        Weapon::create([
            'name' => 'AK Alpha',
            'realName' => 'AK Alpha',
            'pellets' => 1,
            'headshotDamage' => 52.8,
            'torsoDamage' => 33,
            'limbDamage' => 28,
            'feetDamage' => 28,
            'magSize' => 31,
            'fireRate' => 650,
            'bulletVelocity' => 880,
            'adsMobility' => 3.4,
            'firingModes' => 2,
            'weaponType' => 1,
        ]);

        Weapon::create([
            'name' => 'RC416',
            'realName' => 'HK416',
            'headshotDamage' => 43.2,
            'pellets' => 1,
            'torsoDamage' => 27,
            'limbDamage' => 22.8,
            'feetDamage' => 22.8,
            'magSize' => 31,
            'fireRate' => 750,
            'bulletVelocity' => 910,
            'adsMobility' => 3.28,
            'firingModes' => 2,
            'weaponType' => 1,
        ]);

        Weapon::create([
            'name' => 'XM5',
            'realName' => 'Sig Spear',
            'pellets' => 1,
            'headshotDamage' => 57.6,
            'torsoDamage' => 36,
            'limbDamage' => 30.5,
            'feetDamage' => 30.5,
            'magSize' => 26,
            'fireRate' => 650,
            'bulletVelocity' => 910,
            'adsMobility' => 3.28,
            'firingModes' => 2,
            'weaponType' => 1,
        ]);

        Weapon::create([
            'name' => 'BX4',
            'realName' => 'BX4',
            'pellets' => 1,
            'headshotDamage' => 32.2,
            'torsoDamage' => 23,
            'limbDamage' => 19.5,
            'feetDamage' => 19.5,
            'magSize' => 31,
            'fireRate' => 800,
            'bulletVelocity' => 480,
            'adsMobility' => 3.48,
            'firingModes' => 2,
            'weaponType' => 2,
        ]);

        Weapon::create([
            'name' => 'Evo 3',
            'realName' => 'Scorpion Evo',
            'pellets' => 1,
            'headshotDamage' => 36.4,
            'torsoDamage' => 26,
            'limbDamage' => 22,
            'feetDamage' => 22,
            'magSize' => 31,
            'fireRate' => 900,
            'bulletVelocity' => 380,
            'adsMobility' => 3.6,
            'firingModes' => 4,
            'weaponType' => 2,
        ]);

        Weapon::create([
            'name' => 'Fury V',
            'realName' => 'Kriss Vector',
            'pellets' => 1,
            'headshotDamage' => 33.6,
            'torsoDamage' => 24,
            'limbDamage' => 20.33,
            'feetDamage' => 10.33,
            'magSize' => 31,
            'fireRate' => 1000,
            'bulletVelocity' => 350,
            'adsMobility' => 3.68,
            'firingModes' => 4,
            'weaponType' => 2,
        ]);

        Weapon::create([
            'name' => 'M92',
            'realName' => 'Beretta 92FS',
            'pellets' => 1,
            'headshotDamage' => 42,
            'torsoDamage' => 30,
            'limbDamage' => 25.5,
            'feetDamage' => 25.5,
            'magSize' => 17,
            'fireRate' => 0,
            'bulletVelocity' => 380,
            'adsMobility' => 4,
            'firingModes' => 1,
            'weaponType' => 3,
        ]);

        Weapon::create([
            'name' => 'KW 1911',
            'realName' => 'Colt 1911',
            'pellets' => 1,
            'headshotDamage' => 49,
            'torsoDamage' => 35,
            'limbDamage' => 29.66,
            'feetDamage' => 29.66,
            'magSize' => 13,
            'fireRate' => 0,
            'bulletVelocity' => 320,
            'adsMobility' => 3.92,
            'firingModes' => 1,
            'weaponType' => 3,
        ]);

        Weapon::create([
            'name' => 'G18C',
            'realName' => 'Glock 18C',
            'pellets' => 1,
            'headshotDamage' => 25.2,
            'torsoDamage' => 18,
            'limbDamage' => 15.3,
            'feetDamage' => 15.3,
            'magSize' => 27,
            'fireRate' => 1100,
            'bulletVelocity' => 370,
            'adsMobility' => 3.84,
            'firingModes' => 2,
            'weaponType' => 3,
        ]);

        Weapon::create([
            'name' => 'Deagle',
            'realName' => 'Desert Eagle',
            'pellets' => 1,
            'headshotDamage' => 117,
            'torsoDamage' => 65,
            'limbDamage' => 55.25,
            'feetDamage' => 55.25,
            'magSize' => 9,
            'fireRate' => 0,
            'bulletVelocity' => 470,
            'adsMobility' => 3.68,
            'firingModes' => 1,
            'weaponType' => 3,
        ]);

        Weapon::create([
            'name' => 'S686',
            'realName' => 'S686 Double Barrel',
            'pellets' => 9,
            'headshotDamage' => 30.8,
            'torsoDamage' => 22,
            'limbDamage' => 18.66,
            'feetDamage' => 18.66,
            'magSize' => 2,
            'fireRate' => 0,
            'bulletVelocity' => 536,
            'adsMobility' => 3.8,
            'firingModes' => 1,
            'weaponType' => 4,
        ]);

        Weapon::create([
            'name' => 'Flame 12',
            'realName' => 'Origin 12',
            'pellets' => 7,
            'headshotDamage' => 18.2,
            'torsoDamage' => 13,
            'limbDamage' => 11.11,
            'feetDamage' => 11.11,
            'magSize' => 12,
            'fireRate' => 0,
            'bulletVelocity' => 426,
            'adsMobility' => 3.32,
            'firingModes' => 1,
            'weaponType' => 4,
        ]);

        Weapon::create([
            'name' => 'M1A',
            'realName' => 'M14',
            'pellets' => 1,
            'headshotDamage' => 88.2,
            'torsoDamage' => 49,
            'limbDamage' => 41.5,
            'feetDamage' => 41.5,
            'magSize' => 17,
            'fireRate' => 0,
            'bulletVelocity' => 850,
            'adsMobility' => 2.92,
            'firingModes' => 1,
            'weaponType' => 5,
        ]);

        Weapon::create([
            'name' => 'RFB',
            'realName' => 'RFB',
            'pellets' => 1,
            'headshotDamage' => 99,
            'torsoDamage' => 55,
            'limbDamage' => 44.6,
            'feetDamage' => 44.6,
            'magSize' => 12,
            'fireRate' => 0,
            'bulletVelocity' => 880,
            'adsMobility' => 2.8,
            'firingModes' => 1,
            'weaponType' => 5,
        ]);

        Weapon::create([
            'name' => 'SECA 17',
            'realName' => 'Scar 20',
            'pellets' => 1,
            'headshotDamage' => 81,
            'torsoDamage' => 45,
            'limbDamage' => 38.2,
            'feetDamage' => 38.2,
            'magSize' => 22,
            'fireRate' => 550,
            'bulletVelocity' => 870,
            'adsMobility' => 2.8,
            'firingModes' => 2,
            'weaponType' => 5,
        ]);

        Weapon::create([
            'name' => 'Kar98',
            'realName' => 'Kar98',
            'pellets' => 1,
            'headshotDamage' => 230.4,
            'torsoDamage' => 128,
            'limbDamage' => 108.5,
            'feetDamage' => 108.5,
            'magSize' => 5,
            'fireRate' => 1,
            'bulletVelocity' => 760,
            'adsMobility' => 2.72,
            'firingModes' => 1,
            'weaponType' => 6,
        ]);

        Weapon::create([
            'name' => 'M40A5',
            'realName' => 'M40A5',
            'pellets' => 1,
            'headshotDamage' => 208,
            'torsoDamage' => 104,
            'limbDamage' => 88.33,
            'feetDamage' => 88.33,
            'magSize' => 8,
            'fireRate' => 1,
            'bulletVelocity' => 850,
            'adsMobility' => 3.2,
            'firingModes' => 1,
            'weaponType' => 6,
        ]);

        Weapon::create([
            'name' => 'M2000',
            'realName' => 'M2000 Intervention',
            'pellets' => 1,
            'headshotDamage' => 318,
            'torsoDamage' => 159,
            'limbDamage' => 135,
            'feetDamage' => 135,
            'magSize' => 6,
            'fireRate' => 1,
            'bulletVelocity' => 910,
            'adsMobility' => 2.6,
            'firingModes' => 1,
            'weaponType' => 6,
        ]);
    }
}
