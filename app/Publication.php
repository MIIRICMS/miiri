<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;

    protected $fillable=[
        "date",
        "title",
        "body",
        "slug",
        "file",
    ];
}
