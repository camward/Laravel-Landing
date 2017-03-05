<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    // поля, с которыми можно работать
    protected $fillable = ['name', 'text', 'alias', 'images'];
}
