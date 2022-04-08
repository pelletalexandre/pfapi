<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

use App\Models\City;

class Aeroport extends Model
{
    use HasFactory, Sortable;

    protected $table = "aeroports";

    public $sortable = [ 'local_code', 'iata_code', 'name', 'iso_country', 'continent', 'actif', 'nb_search', 'nb_reservation' ];

    protected $fillable = [
        'ident',
        'type',
        'name',
        'lat',
        'lng',
        'geo_point',
        'elevation_ft',
        'continent',
        'iso_country',
        'iso_region',
        'municipalite',
        'scheduled_service',
        'gps_code',
        'iata_code',
        'local_code',
        'nb_search',
        'nb_reservation',
        'actif'
    ];

    /*
    public function scopeCloseTo(Builder $query, $city_geonameid)
    {
        $city = City::where('geonameid', $city_geonameid)->first ();

        //* .000621371192 < delivery_max_range


        return $query->whereRaw("
        ST_Distance_Sphere(
                geo_point,
                ?
            ) / 1000
        ", [
            $city->geo_point
        ]);
    }*/

}
