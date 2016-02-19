<?php

namespace laravel_essencial;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{

    protected $fillable = ['nome', 'email'];

}
