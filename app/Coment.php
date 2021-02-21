<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coment extends Model
{
    protected $fillable = [
        'coment',
        'image',
        'user_id',
    ];

    public function user()
    {
        return $this->belongs('App\User');
    }
}
