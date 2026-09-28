<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\Cache;

class ProductController extends Controller
{
    public const CACHE_TTL = 1800;

    public function index(Request $request): AnonymousResourceCollection
    {
        $cacheKey = 'products:index:' . md5(json_encode($request->query()));

        $products = Cache::remember($cacheKey, self::CACHE_TTL, function () use ($request) {
            $query = Product::active()->ordered()->with([
                'category',
                'primaryImage',
            ]);

            if ($request->boolean('featured')) {
                $query->featured();
            }

            if ($request->filled('category')) {
                $query->whereHas('category', fn ($q) => $q->where('slug', $request->input('category')));
            }

            return $query->get();
        });

        return ProductResource::collection($products);
    }

    public function show(string $slug): JsonResponse|ProductResource
    {
        $cacheKey = "products:show:{$slug}";

        $product = Cache::remember($cacheKey, self::CACHE_TTL, function () use ($slug) {
            return Product::active()
                ->bySlug($slug)
                ->with([
                    'category',
                    'images',
                    'sizes' => fn ($q) => $q->active(),
                    'ingredients',
                ])
                ->first();
        });

        if (!$product) {
            return response()->json([
                'message' => 'Product not found.',
                'errors' => ['slug' => ['The requested product does not exist.']],
            ], 404);
        }

        return new ProductResource($product);
    }
}
