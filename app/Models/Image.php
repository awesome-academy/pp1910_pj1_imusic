<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';
    protected function imageable()
    {
        return $this->morphTo();
    }
    //
}
