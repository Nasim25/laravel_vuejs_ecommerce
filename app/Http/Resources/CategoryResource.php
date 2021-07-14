<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
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
            "id" => $this->id,
            "category_name_en" => $this->category_name_en,
            "category_name_bn" => $this->category_name_bn,
            "category_slug_en" => $this->category_slug_en,
            "category_slug_bn" => $this->category_slug_bn,
            "category_icon" => $this->category_icon,
            "category_image" => $this->category_image,
            "category_status" => $this->category_status,
        ];
    }
}
