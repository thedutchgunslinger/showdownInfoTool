<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Weapon;

class WeaponsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fireTypes = app(FireTypeController::class)->index();
        $weaponCategories = app(WeaponCatagorieController::class)->index();
        $weapons = app(WeaponController::class)->index();


        return view('weapons', compact('fireTypes', 'weapons', 'weaponCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
{
    $fireTypes = app(FireTypeController::class)->index();
    $weaponCategories = app(WeaponCatagorieController::class)->index();
    
    // Fetch the weapon instance from the database
    $weapon = weapon::find($id);

    // get all weapons of the same weaponType
   

//    $avgDamage = [];
// Weapon::each(function($weapon) use (&$avgDamage) {
//     $averageDamage = ($weapon->headshotDamage + $weapon->torsoDamage + $weapon->limbDamage + $weapon->feetDamage) / 4;
//     array_push($avgDamage, $averageDamage);
// });

// $maxDamage = max($avgDamage);
// $minDamage = min($avgDamage);

$maxTorsoDamage = Weapon::max('torsoDamage') + 10;
$minTorsoDamage = Weapon::min('torsoDamage');

$maxHeadshotDamage = Weapon::max('headshotDamage') + 10;
$minHeadshotDamage = Weapon::min('headshotDamage');

$maxLimbDamage = Weapon::max('limbDamage') + 10;
$minLimbDamage = Weapon::min('limbDamage');

$maxMagSize = Weapon::max('magSize') + 15;
$minMagSize = Weapon::min('magSize');

$maxFireRate = Weapon::max('fireRate') + 100;
$minFireRate = Weapon::min('fireRate');

$maxBulletVelocity = Weapon::max('bulletVelocity') + 50;
$minBulletVelocity = Weapon::min('bulletVelocity');

$maxAdsMobility = Weapon::max('adsMobility')+0.2;
$minAdsMobility = Weapon::min('adsMobility');

$avgHeadshotDamage = Weapon::avg('headshotDamage');
$avgTorsoDamage = Weapon::avg('torsoDamage');
$avgLimbDamage = Weapon::avg('limbDamage');

// give me the average of firerate
$avgFireRate = Weapon::avg('fireRate');
// give me the average of bullet velocity
$avgBulletVelocity = Weapon::avg('bulletVelocity');
// give me the average of ads mobility
$avgAdsMobility = Weapon::avg('adsMobility');
// give me the average of mag size
$avgMagSize = Weapon::avg('magSize');

$avgHeadshotDamageType = Weapon::where('weaponType', $weapon->weaponType)->avg('headshotDamage');
$avgTorsoDamageType = Weapon::where('weaponType', $weapon->weaponType)->avg('torsoDamage');
$avgLimbDamageType = Weapon::where('weaponType', $weapon->weaponType)->avg('limbDamage');
$avgFireRateType = Weapon::where('weaponType', $weapon->weaponType)->avg('fireRate');
$avgBulletVelocityType = Weapon::where('weaponType', $weapon->weaponType)->avg('bulletVelocity');
$avgAdsMobilityType = Weapon::where('weaponType', $weapon->weaponType)->avg('adsMobility');
$avgMagSizeType = Weapon::where('weaponType', $weapon->weaponType)->avg('magSize');

$minMaxArray = [
    'maxTorsoDamage' => $maxTorsoDamage,
    'minTorsoDamage' => $minTorsoDamage,
    'maxHeadshotDamage' => $maxHeadshotDamage,
    'minHeadshotDamage' => $minHeadshotDamage,
    'maxLimbDamage' => $maxLimbDamage,
    'minLimbDamage' => $minLimbDamage,
    'maxMagSize' => $maxMagSize,
    'minMagSize' => $minMagSize,
    'maxFireRate' => $maxFireRate,
    'minFireRate' => $minFireRate,
    'maxBulletVelocity' => $maxBulletVelocity,
    'minBulletVelocity' => $minBulletVelocity,
    'maxAdsMobility' => $maxAdsMobility,
    'minAdsMobility' => $minAdsMobility,
    'avgHeadshotDamage' => $avgHeadshotDamage,
    'avgTorsoDamage' => $avgTorsoDamage,
    'avgLimbDamage' => $avgLimbDamage,
    'avgFireRate' => $avgFireRate,
    'avgBulletVelocity' => $avgBulletVelocity,
    'avgAdsMobility' => $avgAdsMobility,
    'avgMagSize' => $avgMagSize,
    'avgHeadshotDamageType' => $avgHeadshotDamageType,
    'avgTorsoDamageType' => $avgTorsoDamageType,
    'avgLimbDamageType' => $avgLimbDamageType,
    'avgFireRateType' => $avgFireRateType,
    'avgBulletVelocityType' => $avgBulletVelocityType,
    'avgAdsMobilityType' => $avgAdsMobilityType,
    'avgMagSizeType' => $avgMagSizeType,

];

$minMaxStats = (object) $minMaxArray;
    return view('gun', compact('fireTypes', 'weapon', 'weaponCategories', 'minMaxStats'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
