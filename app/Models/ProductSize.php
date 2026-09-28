<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductSize extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'label',
        'weight_grams',
        'sku',
        'price',
        'sort_order',
        'status',
    ];

    protected $casts = [
        'weight_grams' => 'integer',
        'sort_order' => 'integer',
        'status' => 'boolean',
        'price' => 'decimal:2',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }
}
