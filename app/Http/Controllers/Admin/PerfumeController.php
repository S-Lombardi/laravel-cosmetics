<?php

namespace App\Http\Controllers\Admin;

use App\Models\Perfume;
use App\Models\Product;
use App\Http\Requests\StorePerfumeRequest;
use App\Http\Requests\UpdatePerfumeRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\ProductController;

use Illuminate\Support\Facades\Storage;

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
        $product = Product::where($id=1);
        return view('admin.perfume.create',compact('product'));
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

        if($request->hasFile('image')){

            $path = Storage::put('perfumes',$request->image);

            $form_data['image'] = $path; 

        }
        $perfume->fill($form_data);
        
        $perfume->save();
        return redirect()->route('admin.perfume.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perfume  $perfume
     * @return \Illuminate\Http\Response
     */
    public function show(Perfume $perfume)
    {
        
        return view('admin.perfume.show', compact('perfume'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perfume  $perfume
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //RECUPERO IL PROFUMO CON ID SPECIFICATO E LO PASSO ALLA VISTA CON COMPACT
        $perfume = Perfume::find($id);
        return view('admin.perfume.edit', compact('perfume'));
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

        //IMPOSTA IMMAGINE FORNITA DALL'UTENTE ALTRIMENTI INSERISCI IMMAGINE DEFAULT
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/img/perfumes');
            $perfume->image = $imagePath;
        }

        $perfume->save();
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
        $perfume->delete();
        return redirect()->route('admin.perfume.index')->with('success', 'Profumo eliminato con successo.');

    }
}
