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
        
    //     $blog=DB::table('blog')
    //     ->where('blog_id',2) //blog id si 2 olanlari getir
    //     ->orwhere('blog_id',3) //blog id si 3 olanlari getir
    //     ->orwhere('blog_id',4) //blog id si 4 olanlari getir
    //     ->get(); // data get from Database
    //    dd($blog);
       
//     $blog=DB::table('blog')
//     ->whereBetween('blog_id',[1,5]) //blog id si 1 ile 4 olanlari getir   
//     ->get(); // data get from Database
//    dd($blog);

// $blog=DB::table('blog')
//     ->whereNotBetween('blog_id',[4,7]) //blog id si 4 ile 7 arasinda olanmayanlari getir, yani 1,2,3,8 geldi
//     ->get(); // data get from Database
//    dd($blog);

// $blog=DB::table('blog')
//     ->whereIn('blog_id',[4,7]) //blog id si sadece 4 ile 7 olanlari getirir, yani 4 ve 7 geldi
//     ->get(); // data get from Database
//    dd($blog);

// $blog=DB::table('blog')
//     ->whereNotIn('blog_id',[4,7]) //blog id si sadece 4 ile 7 olanmayanlari getirir, yani 1,2,3,5,6,8 geldi
//     ->get(); // data get from Database
//    dd($blog);

// $blog=DB::table('blog')
//     ->whereNull('blog_title') //blog title kismi bos olanlari getirir, 
//     ->get(); // data get from Database
//    dd($blog);

// $blog=DB::table('blog')
//     ->whereNotNull('blog_title') //blog title kismi dolu olanlari getirir, 
//     ->get(); // data get from Database
//    dd($blog);

// $blog=DB::table('blog')
//     ->whereDate('blog_date','2020-01-24') //blog date kismi ayni olan tarihleri getirir, 
//     ->get(); // data get from Database
//    dd($blog);

$blog=DB::table('blog')
    ->whereMonth('blog_date','1') //blog date kismi 1. ay olan tarihlerdeki veriyi getirir, 
    ->get(); // data get from Database
   dd($blog);

    }

    public function show(){
        echo "show metodu çalıştı";
    }
}
