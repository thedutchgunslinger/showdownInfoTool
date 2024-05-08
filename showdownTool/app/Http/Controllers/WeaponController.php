<?php

namespace App\Http\Controllers;

use App\Models\weapon;
use App\Http\Requests\StoreweaponRequest;
use App\Http\Requests\UpdateweaponRequest;

class WeaponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return weapon::all();
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
    public function store(StoreweaponRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(weapon $weapon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(weapon $weapon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateweaponRequest $request, weapon $weapon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(weapon $weapon)
    {
        //
    }
}
