<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProcessStepResource;
use App\Models\ProcessStep;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\Cache;

class ProcessStepController extends Controller
{
    public const CACHE_TTL = 3600;

    public function index(Request $request): AnonymousResourceCollection
    {
        $cacheKey = 'process_steps:index';

        $steps = Cache::remember($cacheKey, self::CACHE_TTL, function () {
            return ProcessStep::active()->ordered()->get();
        });

        return ProcessStepResource::collection($steps);
    }
}
