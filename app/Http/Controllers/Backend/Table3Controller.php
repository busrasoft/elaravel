<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Table3Controller extends Controller
{
    public function index($name=null, $lastname=null)
    {
        echo "burada parametre yok";   
        echo "Table3Controller index methodunda id çağırldı bu id : ".$name." ".$lastname;
      
    }
}
