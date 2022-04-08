<?php

namespace App\Http\Controllers;

use App\Models\Aeroport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AeroportRequest;
use App\Helpers\SearchFilterHelper;
use App\Helpers\MediaHelper;
use App\Http\Resources\AeroportResource;


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
        $aeroports = Aeroport::sortable()->paginate(20);

        $continents = Aeroport::distinct()->get(['continent'])->pluck('continent');
        $countries = Aeroport::distinct()->get(['iso_country'])->pluck('iso_country');
        
        
        return view ( 'admin.aeroport.index', compact ( 'aeroports', 'request', 'continents', 'countries' ) );
    }


    public function ajaxSearch ( Request $request )
    {
        //var_dump($request->all());

        $continent = $request->filtre_continent;
        $pays = $request->filtre_pays;
        $actif = $request->filtre_actif;
        $nom = $request->filtre_nom;

        $aeroports = Aeroport::where ('name', 'LIKE', "%$nom%");

        if ( $continent != -1 )
        {
            $aeroports->where ("continent", "=", $continent );
        }
        if ( $pays != -1 )
        {
            $aeroports->where ("iso_country", "=", $pays );
        }

        $aeroports = $aeroports->limit(100)->get();
        return AeroportResource::collection ( $aeroports );
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