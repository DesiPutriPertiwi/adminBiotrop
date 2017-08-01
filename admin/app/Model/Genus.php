<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genus extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'genus';


    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded = [];
}
