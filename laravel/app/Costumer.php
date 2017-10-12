<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Costumer extends Model
{
    protected $table = 'tbl_costumers';

    public function projects()
    {
        return $this->hasMany('App\Project');
    }

    public function invoices()
    {
        return $this->hasManyThrough('App\Invoice' , 'App\Project');
    }

    public function appointments()
    {
        return $this->hasMany('App\Appointment');
    }

    public function offers()
    {
        return $this->hasMany('App\Offer');
    }
}
