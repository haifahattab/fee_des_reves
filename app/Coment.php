<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coment extends Model
{
    protected $fillable = [
        'coment',
        'image',
        'sujet',
        'user_id',
    ];

    public function user()
    {
        return $this->belongs('App\User');
    }
}
