<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AeroportResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request);

        return [
            "id"            =>  $this->id,
            "name"          =>  $this->name,
            "municipality"  =>  $this->municipalite,
            "iso_country"   =>  $this->iso_country,
            "ident"         =>  $this->ident,
            "iata_code"     =>  $this->iata_code,
            "dist"          =>  $this->dist
        ];
    }
}
