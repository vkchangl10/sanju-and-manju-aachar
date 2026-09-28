<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'short_description' => $this->short_description,
            'description' => $this->when($request->routeIs('*.products.show'), $this->description),
            'taste_profile' => $this->taste_profile,
            'spice_level' => $this->spice_level,
            'storage_information' => $this->when($request->routeIs('*.products.show'), $this->storage_information),
            'availability' => $this->availability,
            'featured' => (bool) $this->featured,
            'category' => new CategoryResource($this->whenLoaded('category')),
            'primary_image' => new ProductImageResource($this->whenLoaded('primaryImage')),
            'images' => ProductImageResource::collection($this->whenLoaded('images')),
            'sizes' => ProductSizeResource::collection($this->whenLoaded('sizes')),
            'ingredients' => IngredientResource::collection($this->whenLoaded('ingredients')),
            'meta' => [
                'title' => $this->when($request->routeIs('*.products.show'), $this->meta_title),
                'description' => $this->when($request->routeIs('*.products.show'), $this->meta_description),
            ],
            'created_at' => $this->created_at?->toIso8601String(),
            'updated_at' => $this->updated_at?->toIso8601String(),
        ];
    }
}
