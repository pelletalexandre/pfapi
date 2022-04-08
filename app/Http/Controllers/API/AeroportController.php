<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Aeroport;
use Illuminate\Http\Request;

use App\Http\Resources\AeroportResource;
use App\Models\City;

class AeroportController extends Controller
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

    /*
    Quelques requetes utiles
    #Update aeroports 
    #inner join `aeroport_frequence` on aeroports.`iata_code` = `aeroport_frequence`.`AEROPORT` 
    #set aeroports.`nb_reservation` = aeroport_frequence.NB ;

    update aeroports set name_bis=TRIM(REPLACE(name, ' Airport', '' )) ;
    update aeroports set name_bis=TRIM(REPLACE(name_bis, ' Airpark', '' )) ;
    update aeroports set name_bis=TRIM(REPLACE(name_bis, ' Airfield', '' )) ;
    update aeroports set name_bis=TRIM(REPLACE(name_bis, ' airfield', '' )) ;
    update aeroports set name_bis=TRIM(REPLACE(name_bis, ' Airstrip', '' )) ;
    #select REPLACE(name, 'Airport', '' ), id from aeroports where id < 20;

    */


    /**
     * Implémenter une recherche des 3 aéroportss les plus recherchés / représentés chez PF
     */



    /**
     * On recherche les aéroports les plus proche de la ville.
     * On récupère en paramètre : 
     * lang : fr/en
     * city : geonameid
     */
    public function searchNearCity ( Request $request /*, $lang, $query*/ )
    {
        $this->searchMostWanted ( $request );


        $geonameid = $request->city;
        $lang = $request->lang;

        $city = City::where ( "geonameid", $request->city )->first();
        
        $aeroports = Aeroport::select("id", "type", "name", "nb_reservation", "municipalite", "iso_country", "ident", "iata_code")
                                ->selectRaw ( " CAST(st_distance_sphere ( geo_point, geomfromtext ( 'POINT(" . $city->longitude . " " . $city->latitude .")' ) ) / 1000 as INTEGER)  as dist "  )
                                //->whereRaw (  )
                                ->having ( 'dist', '<=' ,'100' )
                                //->limit ( 10 )
                                ->orderBy ( 'dist' )
                                ->get();


        //dump (AeroportResource::collection ( $aeroports ));
        
        // $cnt = 1;
        // foreach ( $aeroports as $aero )
        // {
        //     echo $cnt . ' - ' . $aero->dist."km - ".$aero->name."<br/>";
        //     $cnt++;
        // }
        /*
        select  st_distance_sphere ( geo_point, geomfromtext ( 'POINT(4.82823 46.31407)' ) ) / 1000 as dist, id, type, name  
        from aeroports 
        #where iso_country='US' and type='medium_airport' 
        having dist < 2000
        order by dist
        limit 0, 10;
        */

        //dump($aeroports);
        // On doit en premier lieu, récupérer les coordonnées géographiques de la ville.

        /*
        // Fonctionne très bien !
        // Pour tester un retour d'aéroport, je vais tester sans utiliser les termes de la requete
        $aeroports = Aeroport::where ("municipalite", "LIKE", "%nanc%")->where('iso_country', '=', 'FR')->limit(5)->get();
        return AeroportResource::collection ( $aeroports );
        */

        return AeroportResource::collection ( $aeroports );

    }

    /**
     * On recherche les 5 aéroports les plus plébicités
     * 
     * Cette méthode sera appellée automatiquement au lancement de la age contenant le moteur de recherche.
     */
    public function searchMostWanted ( Request $request )
    {
        // Nous recherchons les 5 aéroports les plus populaires pour Private Flying.
        // On attend les précisions, pour l'instant je mets de manière arbitraire le champ nb_reservation.

        $aeroports = Aeroport::select ('name', 'iso_country', 'municipalite')
                                ->limit ( 5 )
                                ->orderBy ( 'nb_reservation', 'DESC')
                                ->get () ;

        // foreach ( $aeroports as $aeroport )
        // {
        //     echo  $aeroport->name . "-" . $aeroport->iso_country . "-" . $aeroport->municipalite . "<br/>";
        // }

        return AeroportResource::collection ( $aeroports );
    }


    /**
     * On recherche les aéroports les plus proche de la ville.
     * On récupère en paramètre : 
     * lang : fr/en
     * city : geonameid
     */
    public function searchNearCityV1 ( Request $request )
    {
        $geonameid = $request->city;
        $lang = $request->lang;
        
        //dump($geonameid);
        // On doit en premier lieu, récupérer les coordonnées géographiques de la ville.

        /*
        // Fonctionne très bien !
        // Pour tester un retour d'aéroport, je vais tester sans utiliser les termes de la requete
        $aeroports = Aeroport::where ("municipalite", "LIKE", "%nanc%")->where('iso_country', '=', 'FR')->limit(5)->get();
        return AeroportResource::collection ( $aeroports );
        */
    }

     

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aeroport  $aeroport
     * @return \Illuminate\Http\Response
     */
    public function show(Aeroport $aeroport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aeroport  $aeroport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aeroport $aeroport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aeroport  $aeroport
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aeroport $aeroport)
    {
        //
    }
}
