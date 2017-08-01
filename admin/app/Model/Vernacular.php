<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vernacular extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'vernacular';


    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded = [];
}
