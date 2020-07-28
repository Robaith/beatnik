<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
            'news_title', 'news_details'
        ];
}
