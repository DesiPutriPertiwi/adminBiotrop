<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ControlIas extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'control_ias';


    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded = [];
}
