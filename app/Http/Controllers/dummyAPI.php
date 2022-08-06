<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyAPI extends Controller
{
    
    function getData()
    {
        return ["name"=>"Dev","email"=>"dev@gmail.com","address"=>"Noida"];
    }
}
