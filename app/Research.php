<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Research extends Model
{
    use HasFactory;

    protected $fillable = [
        "first_name",
        "last_name",
        "position",
        "title",
        "description",
        "date",
        "type",
        "image",
        "slug",
    ];
}
