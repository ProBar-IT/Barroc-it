<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Extraaddress extends Model
{
    protected $table = 'tbl_extra_address';
    public function costumer()
    {
        return $this->belongsTo('App\Customer');
    }
}
