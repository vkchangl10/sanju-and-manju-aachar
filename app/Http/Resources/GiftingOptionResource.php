<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GiftingOptionResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'tagline' => $this->tagline,
            'description' => $this->description,
            'includes' => $this->includes ? json_decode($this->includes, true) : null,
            'image_path' => $this->image_path ? asset('storage/' . $this->image_path) : null,
            'sort_order' => $this->sort_order,
        ];
    }
}
