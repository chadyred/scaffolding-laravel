<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    public $table = 'emails';

    // Disable updated_at and create_at tables create by default
    public $timestamps = false;
}
