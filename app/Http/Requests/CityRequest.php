<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CityRequest extends FormRequest
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
            'geonameid'           => 'required',
'name'           => 'required',
'asciiname'           => 'required',
'alternatenames'           => 'required',
'latitude'           => 'required',
'longitude'           => 'required',
'geo_point'           => 'required',
'nb_search'           => 'required',
'weight'           => 'required',
'feature_class'           => 'required',
'feature_code'           => 'required',
'country_code'           => 'required',
'cc2'           => 'required',
'admin1_code'           => 'required',
'admin2_code'           => 'required',
'admin3_code'           => 'required',
'admin4_code'           => 'required',
'population'           => 'required',
'dem'           => 'required',
'timezone'           => 'required',

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
            'geonameid.required'           => 'Vous devez renseigner le champ geonameid',
'name.required'           => 'Vous devez renseigner le champ name',
'asciiname.required'           => 'Vous devez renseigner le champ asciiname',
'alternatenames.required'           => 'Vous devez renseigner le champ alternatenames',
'latitude.required'           => 'Vous devez renseigner le champ latitude',
'longitude.required'           => 'Vous devez renseigner le champ longitude',
'geo_point.required'           => 'Vous devez renseigner le champ geo_point',
'nb_search.required'           => 'Vous devez renseigner le champ nb_search',
'weight.required'           => 'Vous devez renseigner le champ weight',
'feature_class.required'           => 'Vous devez renseigner le champ feature_class',
'feature_code.required'           => 'Vous devez renseigner le champ feature_code',
'country_code.required'           => 'Vous devez renseigner le champ country_code',
'cc2.required'           => 'Vous devez renseigner le champ cc2',
'admin1_code.required'           => 'Vous devez renseigner le champ admin1_code',
'admin2_code.required'           => 'Vous devez renseigner le champ admin2_code',
'admin3_code.required'           => 'Vous devez renseigner le champ admin3_code',
'admin4_code.required'           => 'Vous devez renseigner le champ admin4_code',
'population.required'           => 'Vous devez renseigner le champ population',
'dem.required'           => 'Vous devez renseigner le champ dem',
'timezone.required'           => 'Vous devez renseigner le champ timezone',

        ];
    }
}