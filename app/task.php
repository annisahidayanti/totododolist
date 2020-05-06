<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    protected $table = 'my_tasks' ;

    public $timestamps = false;

    protected $dateformat = 'u';

    protected $connection = 'connection-name';
}
