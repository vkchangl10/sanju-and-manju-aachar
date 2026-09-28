<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProcessStepResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'step_number' => $this->step_number,
            'description' => $this->description,
            'details' => $this->details,
            'image_path' => $this->image_path ? asset('storage/' . $this->image_path) : null,
            'sort_order' => $this->sort_order,
        ];
    }
}
