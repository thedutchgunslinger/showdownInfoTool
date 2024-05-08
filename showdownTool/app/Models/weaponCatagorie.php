<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class weaponCatagorie extends Model
{
    use HasFactory;

    protected $table = 'weapon_catagories';

    protected $fillable = [
        'name',
    ];

    public function weapons()
    {
        return $this->hasMany(Weapon::class, 'weaponType');
    }
}
