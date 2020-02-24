<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

Class PageController extends Controller
{
    public function index()
    {
        $blog=DB::table('blog')->get(); //veri tabanindan verileri getirme
        foreach ($blog as $key ) {
            echo $key->blog_title."<br>";
        }
    }

    public function show(){
        echo "show metodu çalıştı";
    }
}
