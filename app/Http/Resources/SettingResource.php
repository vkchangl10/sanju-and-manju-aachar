<?php

namespace App\Http\Resources;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SettingResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'key' => $this->key,
            'value' => Setting::getValue($this->key),
            'type' => $this->type,
            'group' => $this->group,
            'label' => $this->label,
        ];
    }

    public static function collection($resource)
    {
        if (is_array($resource)) {
            return collect($resource)->mapWithKeys(fn ($value, $key) => [$key => $value]);
        }
        return parent::collection($resource);
    }
}
