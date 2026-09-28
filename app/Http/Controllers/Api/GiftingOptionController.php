<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\GiftingOptionResource;
use App\Models\GiftingOption;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\Cache;

class GiftingOptionController extends Controller
{
    public const CACHE_TTL = 3600;

    public function index(Request $request): AnonymousResourceCollection
    {
        $cacheKey = 'gifting_options:index';

        $options = Cache::remember($cacheKey, self::CACHE_TTL, function () {
            return GiftingOption::active()->ordered()->get();
        });

        return GiftingOptionResource::collection($options);
    }
}
