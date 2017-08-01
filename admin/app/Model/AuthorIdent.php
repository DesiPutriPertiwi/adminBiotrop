<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuthorIdent extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'author_identification';


    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded = [];
}
