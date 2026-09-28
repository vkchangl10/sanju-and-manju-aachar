<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TestimonialResource;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\Cache;

class TestimonialController extends Controller
{
    public const CACHE_TTL = 1800;

    public function index(Request $request): AnonymousResourceCollection
    {
        $cacheKey = 'testimonials:index';

        $testimonials = Cache::remember($cacheKey, self::CACHE_TTL, function () {
            return Testimonial::approved()
                ->active()
                ->ordered()
                ->with(['product' => fn ($q) => $q->select('id', 'name', 'slug')])
                ->get();
        });

        return TestimonialResource::collection($testimonials);
    }
}
