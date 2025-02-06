<?php

namespace App\Models;
use App\Models\SubUser;
use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    protected $table = "student_info";

    public function subUser()
    {
        return $this->hasOne(SubUser::class);
    }
}
