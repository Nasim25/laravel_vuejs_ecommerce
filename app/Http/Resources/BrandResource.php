<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BrandResource extends JsonResource
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
            "id"            => $this->id,
            "brand_name_en" => $this->brand_name_en,
            "brand_name_bn" => $this->brand_name_en,
            "brand_slug_en" => $this->brand_slug_en,
            "brand_image"   => $this->brand_image,
        ];
    }
}
