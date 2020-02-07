<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Table1Controller extends Controller
{
    public function index()
    {
       echo "<a href='".route('backend.table1')."'>Page 3</a>";
    }
}
