<?php

namespace App\Http\Controllers;

use App\Models\Aeroport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AeroportRequest;
use App\Helpers\SearchFilterHelper;
use App\Helpers\MediaHelper;

class AeroportController extends Controller
{
     
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index ( Request $request )
    {
        //Chargement des objets correspondant aux critères
        $aeroports = Aeroport::paginate(20);
        
        
        return view ( 'admin.aeroport.index', compact ( 'aeroports', 'request' ) );
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ( 'admin.aeroport.create' );
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AeroportRequest $request)
    {
        $aeroport = new Aeroport ( $request->all() );
        $aeroport->save ();
        
        return redirect ( route ('aeroports.index') );
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aeroport $aeroport
     * @return \Illuminate\Http\Response
     */
    public function show(Aeroport $aeroport)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aeroport  $aeroport
     * @return \Illuminate\Http\Response
     */
    public function edit(Aeroport $aeroport)
    {
        //dd($aeroport);
        return view ('admin.aeroport.edit', compact('aeroport'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aeroport  $aeroport
     * @return \Illuminate\Http\Response
     */
    public function update(AeroportRequest $request, Aeroport $aeroport)
    {
        $aeroport->update($request->all() );

        return redirect ( route ('aeroports.index') );
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aeroport  $aeroport
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aeroport $aeroport)
    {
        $aeroport->delete ();
        
        return redirect ( route ('aeroports.index') );
    }
}