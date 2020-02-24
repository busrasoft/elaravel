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

        // $blog=DB::table('blog')
        // ->where('blog_id',2)
        // ->first(); 
        // echo $blog->blog_title;
        // echo '<br>';
        // echo $blog->blog_content;
        
        $blog=DB::table('blog')
        ->where('blog_id',2) //blog id si 2 olanlari getir
        ->orwhere('blog_id',3) //blog id si 3 olanlari getir
        ->orwhere('blog_id',4) //blog id si 4 olanlari getir
        ->get(); // data get from Database
       dd($blog);
        
    }

    public function show(){
        echo "show metodu çalıştı";
    }
}
