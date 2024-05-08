<?php

namespace App\Http\Controllers;

use App\Models\fireType;
use App\Http\Requests\StorefireTypeRequest;
use App\Http\Requests\UpdatefireTypeRequest;

class FireTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return    fireType::all();
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
    public function store(StorefireTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(fireType $fireType)
    {
        //
        return fireType::find($fireType);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(fireType $fireType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatefireTypeRequest $request, fireType $fireType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(fireType $fireType)
    {
        //
    }
}
