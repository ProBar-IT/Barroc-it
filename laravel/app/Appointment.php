<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'tbl_appointments';

    public function customer()
    {
        return $this->belongsTo('App\Costumer');
    }
}
