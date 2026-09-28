<?php

use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\EnquiryController;
use App\Http\Controllers\Api\GiftingOptionController;
use App\Http\Controllers\Api\IngredientController;
use App\Http\Controllers\Api\PairingController;
use App\Http\Controllers\Api\ProcessStepController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\SettingController;
use App\Http\Controllers\Api\TestimonialController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {

    Route::get('/settings', [SettingController::class, 'index'])->name('api.v1.settings.index');

    Route::get('/products', [ProductController::class, 'index'])->name('api.v1.products.index');
    Route::get('/products/{slug}', [ProductController::class, 'show'])->name('api.v1.products.show');

    Route::get('/ingredients', [IngredientController::class, 'index'])->name('api.v1.ingredients.index');

    Route::get('/process', [ProcessStepController::class, 'index'])->name('api.v1.process.index');

    Route::get('/pairings', [PairingController::class, 'index'])->name('api.v1.pairings.index');

    Route::get('/gifting', [GiftingOptionController::class, 'index'])->name('api.v1.gifting.index');

    Route::get('/testimonials', [TestimonialController::class, 'index'])->name('api.v1.testimonials.index');

    Route::post('/enquiries', [EnquiryController::class, 'store'])->name('api.v1.enquiries.store');

    Route::post('/contact', [ContactController::class, 'store'])->name('api.v1.contact.store');
});
