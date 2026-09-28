<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class IngredientResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
            'image_path' => $this->image_path ? asset('storage/' . $this->image_path) : null,
            'quantity' => $this->whenPivotLoaded('product_ingredients', fn () => $this->pivot->quantity),
            'sort_order' => $this->sort_order,
        ];
    }
}
