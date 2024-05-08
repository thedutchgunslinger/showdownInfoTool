<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FireType extends Model
{
    use HasFactory;

    protected $table = 'fire_types';

    protected $fillable = [
        'firingMode',
    ];

    public function assaultRifles()
    {
        return $this->hasMany(Weapon::class, 'firingModes');
    }
}
