<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Resources\CityResource;

class CityController extends Controller
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
     * La recherche des villes se fait par autocomplétion, dès que l'on a tapé 3 lettres.
     * 
     * Par défaut, on va chercher dans tous les pays de la base. 
     * le champ de recherche va être asciiname
     * Au fur et à mesure que le nombre de lettre de la recherche augmente, la recherche va s'affiner.
     * 
     * Il faut mettre un poids aux villes choisies
     * 
     * 
     */
    public function searchByText ( Request $request /*, $lang, $query*/ )
    {
        $lang = $request->lang;
        $search = $request->search;

        $cities = City::where('asciiname', 'LIKE', $search.'%')->limit(5)->get();
        
        return CityResource::collection ( $cities );
    }

    
/*
public function scopeCloseTo(Builder $query, $latitude, $longitude)
{
    return $query->whereRaw("
       ST_Distance_Sphere(
            point(longitude, latitude),
            point(?, ?)
        ) * .000621371192 < delivery_max_range
    ", [
        $longitude,
        $latitude,
    ]);
}
 
// Using the scope:
return Restaurant::closeTo($myLatitude, $myLongitude);


SELECT ...,
            ST_Distance_Sphere(center_point, item_point) AS meters
         FROM table
         WHERE ... (any filtering)
           AND MBRContains(GeomFromText(Polygon(...)),  -- The bounding box is encoded as a 'square'
                           sp_point)
         HAVING meters <= ...
         ORDER BY distance ASC, id ASC
         LIMIT ...
*/


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
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        //
    }

    /**
     * Devra permettre de mettre à jour le poids de la ville dès qu'elle a été chioisie, on pourra peut-être la prioriser.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, City $city)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        //
    }
}
