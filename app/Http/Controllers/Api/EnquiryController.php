<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreEnquiryRequest;
use App\Models\Enquiry;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;

class EnquiryController extends Controller
{
    public function store(StoreEnquiryRequest $request): JsonResponse
    {
        $rateKey = 'enquiries|' . $request->ip();
        if (RateLimiter::tooManyAttempts($rateKey, 5, 3600)) {
            return response()->json([
                'message' => 'Too many enquiry attempts. Please try again later.',
                'errors' => ['rate_limit' => ['Maximum enquiries reached for this hour.']],
            ], 429);
        }
        RateLimiter::hit($rateKey, 3600);

        $validated = $request->validated();

        $enquiry = Enquiry::create([
            ...$validated,
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        return response()->json([
            'message' => 'Your enquiry has been submitted successfully. We will contact you shortly.',
            'data' => [
                'id' => $enquiry->id,
                'type' => $enquiry->type,
                'name' => $enquiry->name,
                'created_at' => $enquiry->created_at?->toIso8601String() ?? now()->toIso8601String(),
            ],
        ], 201);
    }
}

