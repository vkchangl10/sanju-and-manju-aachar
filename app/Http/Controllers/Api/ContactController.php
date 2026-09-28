<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreContactRequest;
use App\Models\ContactSubmission;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;

class ContactController extends Controller
{
    public function store(StoreContactRequest $request): JsonResponse
    {
        $rateKey = 'contact|' . $request->ip();
        if (RateLimiter::tooManyAttempts($rateKey, 5, 3600)) {
            return response()->json([
                'message' => 'Too many contact submissions. Please try again later.',
                'errors' => ['rate_limit' => ['Maximum messages reached for this hour.']],
            ], 429);
        }
        RateLimiter::hit($rateKey, 3600);

        $validated = $request->validated();

        $submission = ContactSubmission::create([
            ...$validated,
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        return response()->json([
            'message' => 'Thank you for reaching out. We will get back to you soon.',
            'data' => [
                'id' => $submission->id,
                'name' => $submission->name,
                'email' => $submission->email,
                'created_at' => $submission->created_at?->toIso8601String() ?? now()->toIso8601String(),
            ],
        ], 201);
    }
}

