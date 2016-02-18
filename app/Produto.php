<?php

namespace laravel_essencial;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected  $fillable = ['nome','descricao'];
}
