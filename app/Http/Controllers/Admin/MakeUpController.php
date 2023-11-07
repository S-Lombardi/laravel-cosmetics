<?php

namespace App\Http\Controllers;

use App\Models\MakeUp;
use App\Http\Requests\StoreMakeUpRequest;
use App\Http\Requests\UpdateMakeUpRequest;

class MakeUpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMakeUpRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMakeUpRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MakeUp  $makeUp
     * @return \Illuminate\Http\Response
     */
    public function show(MakeUp $makeUp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MakeUp  $makeUp
     * @return \Illuminate\Http\Response
     */
    public function edit(MakeUp $makeUp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMakeUpRequest  $request
     * @param  \App\Models\MakeUp  $makeUp
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMakeUpRequest $request, MakeUp $makeUp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MakeUp  $makeUp
     * @return \Illuminate\Http\Response
     */
    public function destroy(MakeUp $makeUp)
    {
        //
    }
}
