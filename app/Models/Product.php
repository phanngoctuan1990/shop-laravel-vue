<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'details',
        'price',
        'image_id',
    ];

    /**
     * Product belongto image.
     *
     * @return mixed
     */
    public function image()
    {
        return $this->belongsTo(Image::class);
    }
}
