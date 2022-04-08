<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AeroportRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */ 
    public function authorize()
    {
        return true;
    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'ident'           => 'required',
'type'           => 'required',
'name'           => 'required',
'name_bis'           => 'required',
'lat'           => 'required',
'lng'           => 'required',
'geo_point'           => 'required',
'elevation_ft'           => 'required',
'continent'           => 'required',
'iso_country'           => 'required',
'iso_region'           => 'required',
'municipalite'           => 'required',
'scheduled_service'           => 'required',
'gps_code'           => 'required',
'iata_code'           => 'required',
'local_code'           => 'required',
'nb_search'           => 'required',
'nb_reservation'           => 'required',

        ];
    }


    /**
     * Retourne la liste des messages relatifs aux erreurs de validation
     *
     * @return array
     */
    public function messages ()
    {
        return [
            'ident.required'           => 'Vous devez renseigner le champ ident',
'type.required'           => 'Vous devez renseigner le champ type',
'name.required'           => 'Vous devez renseigner le champ name',
'name_bis.required'           => 'Vous devez renseigner le champ name_bis',
'lat.required'           => 'Vous devez renseigner le champ lat',
'lng.required'           => 'Vous devez renseigner le champ lng',
'geo_point.required'           => 'Vous devez renseigner le champ geo_point',
'elevation_ft.required'           => 'Vous devez renseigner le champ elevation_ft',
'continent.required'           => 'Vous devez renseigner le champ continent',
'iso_country.required'           => 'Vous devez renseigner le champ iso_country',
'iso_region.required'           => 'Vous devez renseigner le champ iso_region',
'municipalite.required'           => 'Vous devez renseigner le champ municipalite',
'scheduled_service.required'           => 'Vous devez renseigner le champ scheduled_service',
'gps_code.required'           => 'Vous devez renseigner le champ gps_code',
'iata_code.required'           => 'Vous devez renseigner le champ iata_code',
'local_code.required'           => 'Vous devez renseigner le champ local_code',
'nb_search.required'           => 'Vous devez renseigner le champ nb_search',
'nb_reservation.required'           => 'Vous devez renseigner le champ nb_reservation',

        ];
    }
}