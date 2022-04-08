<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CountryRequest;
use App\Helpers\SearchFilterHelper;
use App\Helpers\MediaHelper;

class CountryController extends Controller
{
     
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index ( Request $request )
    {
        //Chargement des objets correspondant aux critères
        $pays = Country::paginate(20);
        
        
        return view ( 'admin.pays.index', compact ( 'pays', 'request' ) );
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ( 'admin.pays.create' );
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CountryRequest $request)
    {
        $pays = new Country ( $request->all() );
        $pays->save ();
        
        return redirect ( route ('pays.index') );
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Country $pays
     * @return \Illuminate\Http\Response
     */
    public function show(Country $pays)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Country  $pays
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $pays)
    {
        //dd($pays);
        return view ('admin.pays.edit', compact('pays'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Country  $pays
     * @return \Illuminate\Http\Response
     */
    public function update(CountryRequest $request, Country $pays)
    {
        $pays->update($request->all() );

        return redirect ( route ('pays.index') );
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Country  $pays
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $pays)
    {
        $pays->delete ();
        
        return redirect ( route ('pays.index') );
    }
}