<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CountryRequest extends FormRequest
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
'iso'           => 'required',
'iso3'           => 'required',
'iso_numeric'           => 'required',
'fips'           => 'required',
'country'           => 'required',
'capital'           => 'required',
'continent'           => 'required',
'tld'           => 'required',
'currency'           => 'required',
'neighbours'           => 'required',
'nb_search'           => 'required',
'weight'           => 'required',

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
'iso.required'           => 'Vous devez renseigner le champ iso',
'iso3.required'           => 'Vous devez renseigner le champ iso3',
'iso_numeric.required'           => 'Vous devez renseigner le champ iso_numeric',
'fips.required'           => 'Vous devez renseigner le champ fips',
'country.required'           => 'Vous devez renseigner le champ country',
'capital.required'           => 'Vous devez renseigner le champ capital',
'continent.required'           => 'Vous devez renseigner le champ continent',
'tld.required'           => 'Vous devez renseigner le champ tld',
'currency.required'           => 'Vous devez renseigner le champ currency',
'neighbours.required'           => 'Vous devez renseigner le champ neighbours',
'nb_search.required'           => 'Vous devez renseigner le champ nb_search',
'weight.required'           => 'Vous devez renseigner le champ weight',

        ];
    }
}