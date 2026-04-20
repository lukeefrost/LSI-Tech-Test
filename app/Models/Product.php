<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    /**
     * Generates the slug for the new product before it is saved to the database
     * @return void
     */
    protected static function booted(): void
    {
        static::creating(function (Product $product) {
            if (empty($product->slug)) {
                $product->slug = Str::slug($product->name);
            }
        });
    }

    /**
     * Defines the route key name for model binding to use the 'slug' column.
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
