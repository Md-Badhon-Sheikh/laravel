<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = ['name'];

    public function categories()
    {
        return $this->hasMany(Category::class, 'admin_id');
    }

    public function products()
    {
        return $this->hasManyThrough(Product::class, Category::class, 'admin_id', 'category_id');
    }
}
