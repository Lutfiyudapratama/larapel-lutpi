<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListStudent extends Model
{
    protected $fillable = [
        "name",
        "classes",
        "jurusan",
        "birth_date",
        "photo_profile",
        "photo_profile_name",
    ];
}
