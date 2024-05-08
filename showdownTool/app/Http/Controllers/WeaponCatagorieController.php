<?php

namespace App\Http\Controllers;

use App\Models\weaponCatagorie;
use App\Http\Requests\StoreweaponCatagorieRequest;
use App\Http\Requests\UpdateweaponCatagorieRequest;

class WeaponCatagorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return weaponCatagorie::all();
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
    public function store(StoreweaponCatagorieRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(weaponCatagorie $weaponCatagorie)
    {
        return weaponCatagorie::find($weaponCatagorie);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(weaponCatagorie $weaponCatagorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateweaponCatagorieRequest $request, weaponCatagorie $weaponCatagorie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(weaponCatagorie $weaponCatagorie)
    {
        //
    }
}
