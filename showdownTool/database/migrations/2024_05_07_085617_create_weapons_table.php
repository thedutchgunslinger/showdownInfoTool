<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('weapons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('realName');

            // damage
            $table->integer('pellets');
            $table->float('headshotDamage');
            $table->float('torsoDamage');
            $table->float('limbDamage');
            $table->float('feetDamage');

            // stats
            $table->float('magSize');
            $table->integer('fireRate');
            $table->integer('bulletVelocity');
            $table->float('adsMobility');
            $table->integer('firingModes')->references('id')->on('fireTypes');
            $table->integer('weaponType')->references('id')->on('weapon_categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weapons');
    }
};
