<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EarthquakeData;
use App\Http\Requests\EarthquakeDataStoreRequest;
use App\Http\Requests\EarthquakeDataUpdateRequest;

class EarthquakeDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(EarthquakeDataStoreRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(EarthquakeData $data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EarthquakeData $data)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EarthquakeDataUpdateRequest $request, EarthquakeData $data)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EarthquakeData $data)
    {
        //
    }
}
