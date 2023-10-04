<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable=[
        "image",
        "title",
        "slug",
        "body",
        "date",
        "user_id",
    ];
}
