<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

Class PageController extends Controller
{
    public function index()
    {
        // $blog=DB::table('blog')->get(); //veri tabanindan verileri getirme
        // foreach ($blog as $key ) {
        //     echo $key->blog_title."<br>";
        // }

        $blog=DB::table('blog')
        ->where('blog_id',2)
        ->first(); // data get from Database
        echo $blog->blog_title;
        echo '<br>';
        echo $blog->blog_content;
        
    }

    public function show(){
        echo "show metodu çalıştı";
    }
}
