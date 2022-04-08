<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Country extends Model
{
    use HasFactory, Sortable;

    protected $table = "countries";
    
    public $sortable = ['id', 'country'];

    protected $fillable = [
        "geonameid",
        "iso",
        "iso3",
        "iso_numeric",
        "fips",
        "country",
        "capital",
        "continent",
        "tld",
        "currency",
        "neighbours",
        "nb_search",
        "weight",
        "actif"

    ];
}
