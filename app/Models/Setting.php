<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'value',
        'type',
        'group',
        'label',
        'description',
    ];

    public const CACHE_KEY = 'sanjumanju_settings';
    public const CACHE_TTL = 3600;

    public static function allSettings(): array
    {
        return Cache::remember(self::CACHE_KEY, self::CACHE_TTL, function () {
            return self::all()->mapWithKeys(function ($setting) {
                return [$setting->key => self::castValue($setting->value, $setting->type)];
            })->toArray();
        });
    }

    public static function getValue(string $key, mixed $default = null): mixed
    {
        $settings = self::allSettings();
        return $settings[$key] ?? $default;
    }

    private static function castValue(?string $value, string $type): mixed
    {
        return match ($type) {
            'boolean' => (bool) $value,
            'number' => is_numeric($value) ? (str_contains($value, '.') ? (float) $value : (int) $value) : 0,
            'json' => json_decode($value ?? '[]', true),
            default => $value,
        };
    }

    protected static function booted(): void
    {
        static::saved(fn () => Cache::forget(self::CACHE_KEY));
        static::deleted(fn () => Cache::forget(self::CACHE_KEY));
    }
}
