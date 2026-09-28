<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PairingResource;
use App\Models\Pairing;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\Cache;

class PairingController extends Controller
{
    public const CACHE_TTL = 3600;

    public function index(Request $request): AnonymousResourceCollection
    {
        $cacheKey = 'pairings:index';

        $pairings = Cache::remember($cacheKey, self::CACHE_TTL, function () {
            return Pairing::active()->ordered()->get();
        });

        return PairingResource::collection($pairings);
    }
}
