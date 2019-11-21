<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = ['user_id', 'gallery_id', 'portfolio_title', 'portfolio_description', 'portfolio_image'];
}
