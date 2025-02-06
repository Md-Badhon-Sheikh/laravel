<?php

namespace App\Models;
use App\Models\StudentModel;

use Illuminate\Database\Eloquent\Model;

class SubUser extends Model
{
    public function student()
    {
        return $this->belongsTo(StudentModel::class);
    }
}
