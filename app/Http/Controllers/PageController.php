<?php
namespace App\Http\Controllers;

Class PageController extends Controller
{
    public function index()
    {
        return "index methodu çalıştı";
    }

    public function show(){
        echo "show metodu çalıştı";
    }
}
