<?php

namespace App\Http\Controllers;

use App\Models\[model];
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\[model]Request;
use App\Helpers\SearchFilterHelper;
use App\Helpers\MediaHelper;

class [model]Controller extends Controller
{
     
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index ( Request $request )
    {
        //Chargement des objets correspondant aux critères
        $[item_pluriel] = [model]::paginate(20);
        
        
        return view ( 'admin.[item_singulier].index', compact ( '[item_pluriel]', 'request' ) );
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ( 'admin.[item_singulier].create' );
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store([model]Request $request)
    {
        $[item_singulier] = new [model] ( $request->all() );
        $[item_singulier]->save ();
        
        return redirect ( route ('[item_pluriel].index') );
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\[model] $[item_singulier]
     * @return \Illuminate\Http\Response
     */
    public function show([model] $[item_singulier])
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\[model]  $[item_singulier]
     * @return \Illuminate\Http\Response
     */
    public function edit([model] $[item_singulier])
    {
        //dd($[item_singulier]);
        return view ('admin.[item_singulier].edit', compact('[item_singulier]'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\[model]  $[item_singulier]
     * @return \Illuminate\Http\Response
     */
    public function update([model]Request $request, [model] $[item_singulier])
    {
        $[item_singulier]->update($request->all() );

        return redirect ( route ('[item_pluriel].index') );
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\[model]  $[item_singulier]
     * @return \Illuminate\Http\Response
     */
    public function destroy([model] $[item_singulier])
    {
        $[item_singulier]->delete ();
        
        return redirect ( route ('[item_pluriel].index') );
    }
}