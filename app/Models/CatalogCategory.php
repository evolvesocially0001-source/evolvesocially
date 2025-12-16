<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatalogCategory extends Model
{
    protected $fillable = [
        'title',
        'link',
        'image',
        'status',
    ];

    public function products()
    {
        return $this->hasMany(CatalogProduct::class, 'category_id');
    }
}