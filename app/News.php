<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    protected $fillable=[
        "image",
        "title",
        "slug",
        "body",
        "date",
        "category_id",
        "user_id",
    ];
}
