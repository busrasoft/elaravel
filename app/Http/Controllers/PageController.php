<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

Class PageController extends Controller
{
    public function index()
    {
        $blog=DB::table('blog')->get(); //veri tabanindan verileri getirme
        dd($blog);
    }

    public function show(){
        echo "show metodu çalıştı";
    }
}
