<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Gallery extends Model
{
    protected $fillable = ['user_id', 'gallery_title', 'gallery_description', 'gallery_image'];
}
