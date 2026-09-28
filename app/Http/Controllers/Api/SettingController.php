<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class SettingController extends Controller
{
    public const CACHE_TTL = 3600;

    public function index(Request $request): JsonResponse
    {
        $cacheKey = 'settings:public';

        $settings = Cache::remember($cacheKey, self::CACHE_TTL, function () {
            $publicGroups = ['general', 'brand', 'contact', 'social', 'seo'];
            $settings = Setting::whereIn('group', $publicGroups)->get();
            $result = [];
            foreach ($settings as $setting) {
                $result[$setting->key] = Setting::getValue($setting->key);
            }

            if (empty($result['whatsapp_number'])) {
                $result['whatsapp_number'] = env('WHATSAPP_NUMBER');
            }
            if (empty($result['brand_phone'])) {
                $result['brand_phone'] = env('BRAND_PHONE');
            }
            if (empty($result['brand_email'])) {
                $result['brand_email'] = env('BRAND_EMAIL');
            }
            if (empty($result['brand_address'])) {
                $result['brand_address'] = env('BRAND_ADDRESS');
            }
            if (empty($result['instagram_url'])) {
                $result['instagram_url'] = env('INSTAGRAM_URL');
            }
            if (empty($result['facebook_url'])) {
                $result['facebook_url'] = env('FACEBOOK_URL');
            }

            return $result;
        });

        return response()->json([
            'data' => $settings,
        ]);
    }
}
