<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Collector extends Model
{
    public $timestamps =false;
    protected $table = 'collector';

    protected $fillable =['name_collector', 'date_collection','number_collection'];
}
