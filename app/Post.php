<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = [
        'title',
        'description',
        'bedrooms',
        'baths',
        'floors',
        'parking',
        'sqrm',
        'price',
        'full_price',
        'road',
        'no',
        'city',
        'relative_address',
        'postal_code',
        'image',
        'utilities'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
