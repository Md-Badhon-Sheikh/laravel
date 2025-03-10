<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
