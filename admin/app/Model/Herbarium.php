<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Herbarium extends Model
{
    public $timestamps =false;
    protected $table = 'speciment_herbarium';
    protected $primaryKey = 'id_herbarium';
    public function collect()
    {
        return $this->belongsTo('App\Model\Collector', 'collector_id', 'id_collector');
    }

     public function species()
    {
        return $this->belongsTo('App\Model\Species', 'species_id', 'id_species');
    }

    public function duplicate()
    {
        return $this->belongsTo('App\Model\Duplicate', 'duplicate_id', 'id_dupt');
    }

    public function location()
    {
        return $this->belongsTo('App\Model\Location', 'location_id', 'id_location');
    }

    public function type()
    {
        return $this->belongsTo('App\Model\HerbariumType', 'type_herbarium', 'id_type');
    }

    public function verified()
    {
        return $this->belongsTo('App\Model\Verified', 'verifiedData_id', 'id_verified');
    }

     public function determine()
    {
        return $this->belongsTo('App\Model\AuthorIdent', 'authorIdentification_id', 'id_author');
    }
}
