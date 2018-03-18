<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Product extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'            =>      $this->id,
            'code'          =>      $this->code,
            'name'          =>      $this->name,
            'barcode'       =>      $this->barcode,
            'created_at'    =>      $this->created_at,
            'updated_at'    =>      $this->updated_at
        ];
    }
}
