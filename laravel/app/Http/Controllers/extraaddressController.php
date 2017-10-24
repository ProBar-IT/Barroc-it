<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class extraaddressController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
}
