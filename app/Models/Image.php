<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['file'];
    protected $uploads = '/images/';

    /**
     * Generate file path.
     *
     * @param string $photo file name
     *
     * @return string
     */
    public function getFileAttribute(string $photo): string
    {
        return self::$uploads . $photo;
    }
}
