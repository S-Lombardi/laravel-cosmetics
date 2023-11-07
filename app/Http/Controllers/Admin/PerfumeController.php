<?php

namespace App\Http\Controllers\Admin;

use App\Models\Perfume;
use App\Http\Requests\StorePerfumeRequest;
use App\Http\Requests\UpdatePerfumeRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PerfumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $perfumes = Perfume::all();
        return view('admin.perfume.index', compact('perfumes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.perfume.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePerfumeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePerfumeRequest $request)
    {
        $form_data = $request->all();

        $perfume = new Perfume();
        $perfume->fill($form_data);
        $perfume->save();

        return redirect()->route('admin.perfume.index', compact('perfume'))->with('message', 'Creazione avvenuta con successo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perfume  $perfume
     * @return \Illuminate\Http\Response
     */
    public function show(Perfume $perfume)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perfume  $perfume
     * @return \Illuminate\Http\Response
     */
    public function edit(Perfume $perfume)
    {
        return view('admin.perfume.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePerfumeRequest  $request
     * @param  \App\Models\Perfume  $perfume
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePerfumeRequest $request, Perfume $perfume)
    {
        $form_data = $request->all();
        $perfume->update($form_data);
        return redirect()->route('admin.perfume.index', compact('perfume'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perfume  $perfume
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perfume $perfume)
    {
        //
    }
}
