<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Donate extends Model
{
    protected $table = 'donates';
    use Translatable;
    protected $translatable = ['title', 'body', 'excerpt', 'slug', 'body_section', 'body_extra'];

}
