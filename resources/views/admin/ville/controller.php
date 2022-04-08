<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CityRequest;
use App\Helpers\SearchFilterHelper;
use App\Helpers\MediaHelper;

class CityController extends Controller
{
     
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index ( Request $request )
    {
        //Chargement des objets correspondant aux critères
        $villes = City::paginate(20);
        
        
        return view ( 'admin.ville.index', compact ( 'villes', 'request' ) );
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ( 'admin.ville.create' );
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CityRequest $request)
    {
        $ville = new City ( $request->all() );
        $ville->save ();
        
        return redirect ( route ('villes.index') );
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\City $ville
     * @return \Illuminate\Http\Response
     */
    public function show(City $ville)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\City  $ville
     * @return \Illuminate\Http\Response
     */
    public function edit(City $ville)
    {
        //dd($ville);
        return view ('admin.ville.edit', compact('ville'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\City  $ville
     * @return \Illuminate\Http\Response
     */
    public function update(CityRequest $request, City $ville)
    {
        $ville->update($request->all() );

        return redirect ( route ('villes.index') );
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\City  $ville
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $ville)
    {
        $ville->delete ();
        
        return redirect ( route ('villes.index') );
    }
}