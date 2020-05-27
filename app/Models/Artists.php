<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models;
class Artists extends Model
{
    protected $table = 'artistses';
    protected $fillable = [
        'name',
        'dob',
        'infomation',
        'avatar'
    ];

    public function songs()
    {
        return $this->morphToMany(Song::class, 'listable');
    }

    //
}
