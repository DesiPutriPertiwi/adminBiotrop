<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Verified extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'verified';


    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded = [];
}
