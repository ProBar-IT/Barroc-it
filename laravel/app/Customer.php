<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'tbl_customers';

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function invoices()
    {
        return $this->hasManyThrough(Invoice::class , Project::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }

    public function extraaddress()
    {
        return $this->hasOne(Extraaddress::class);
    }
}
