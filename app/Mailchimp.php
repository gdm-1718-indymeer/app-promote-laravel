<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;



class Mailchimp extends Model
{
    protected $table = 'mailchimp';
    use Translatable;
    protected $translatable = ['title', 'body'];
}
