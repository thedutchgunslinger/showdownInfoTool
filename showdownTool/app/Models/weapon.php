<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
    use HasFactory;

    protected $table = 'weapons';

    protected $fillable = [
        'name',
        'realName',
        'pellets',
        'headshotDamage',
        'torsoDamage',
        'limbDamage',
        'feetDamage',
        'magSize',
        'fireRate',
        'bulletVelocity',
        'adsMobility',
        'firingModes',
        'weaponType',
    ];

    public function fireType()
    {
        return $this->belongsTo(FireType::class, 'firingModes');
    }
}
