<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CharacterSpecies extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'character_species';


    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded = [];
}
