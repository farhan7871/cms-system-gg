<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HeroPage extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'image', 'title', 'imageHero'
    ];

    protected $hidden = [

    ];     


}
