<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'contents',
        'image1',
        'image2',
        'image3',
    ];
}
