<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model

{
    public function posts()
    {
        return $this->hasManyThrough(Post::class, User::class);
    }
}
