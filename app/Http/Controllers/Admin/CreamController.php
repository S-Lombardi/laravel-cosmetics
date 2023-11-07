<?php

namespace App\Http\Controllers;

use App\Models\Cream;
use App\Http\Requests\StoreCreamRequest;
use App\Http\Requests\UpdateCreamRequest;

class CreamController extends Controller
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
     * @param  \App\Http\Requests\StoreCreamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCreamRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cream  $cream
     * @return \Illuminate\Http\Response
     */
    public function show(Cream $cream)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cream  $cream
     * @return \Illuminate\Http\Response
     */
    public function edit(Cream $cream)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCreamRequest  $request
     * @param  \App\Models\Cream  $cream
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCreamRequest $request, Cream $cream)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cream  $cream
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cream $cream)
    {
        //
    }
}
