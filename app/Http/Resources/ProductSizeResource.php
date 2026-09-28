<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductSizeResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'label' => $this->label,
            'weight_grams' => $this->weight_grams,
            'sku' => $this->sku,
            'price' => $this->price ? (float) $this->price : null,
            'sort_order' => $this->sort_order,
        ];
    }
}
