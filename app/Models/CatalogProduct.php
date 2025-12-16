<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatalogProduct extends Model
{
    protected $fillable = [
        'category_id',
        'url',
        'image',
        'status',
    ];

    public function category()
    {
        return $this->belongsTo(CatalogCategory::class, 'category_id');
    }
}