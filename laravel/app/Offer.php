<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $table = 'tbl_offers';

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }


}
