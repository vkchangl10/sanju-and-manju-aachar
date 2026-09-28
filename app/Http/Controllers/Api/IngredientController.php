<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\IngredientResource;
use App\Models\Ingredient;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\Cache;

class IngredientController extends Controller
{
    public const CACHE_TTL = 3600;

    public function index(Request $request): AnonymousResourceCollection
    {
        $cacheKey = 'ingredients:index';

        $ingredients = Cache::remember($cacheKey, self::CACHE_TTL, function () {
            return Ingredient::active()->ordered()->get();
        });

        return IngredientResource::collection($ingredients);
    }
}
