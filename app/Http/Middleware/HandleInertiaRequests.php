<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    protected $rootView = 'app';

    public function version(Request $request): ?string
    {
        return parent::version($request) ?? '1.0.0';
    }


    public function share(Request $request): array
    {
        return array_merge(parent::share($request), [
            'assets' => [
                'logo'    => asset('assets/logo.jpeg'),
                'banner'  => asset('assets/banner.jpeg'),
                'banner2' => asset('assets/banner2.jpeg'),
            ],
            'appName' => config('app.name', 'Sanjumanju'),
        ]);
    }
}
