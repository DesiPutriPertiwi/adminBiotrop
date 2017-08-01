<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Class extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'class';


    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded = [];
}
