<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

Class PageController extends Controller
{
    public function show(){
        echo "show metodu çalıştı";
    } 

    public function index()
    {
        Schema::rename('course','new_course'); 
    }

        // if (Schema::hasTable('blogs')) {
        //     echo "bu tablonun varlik kontrolunu yap";
        // }

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
// //    dd($blog);

// $blog=DB::table('blog')
//     ->whereMonth('blog_date','1') //blog date kismi 1. ay olan tarihlerdeki veriyi getirir, 
//     ->get(); // data get from Database
//    dd($blog);

// $blog=DB::table('blog')
//     ->whereDay('blog_date','24') //blog date kismi gunleri 24. olan tarihlerdeki veriyi getirir, 
//     ->get(); // data get from Database
//    dd($blog);

// $blog=DB::table('blog')->find(5); // data find id 5 from Database
//    dd($blog);

// $blog=DB::table('blog')->pluck('blog_content'); // all datas bring the blog_content 
//    dd($blog);

// $blog=DB::table('blog')->count(); // data sayisini verir
//    echo $blog;

// $blog=DB::table('blog')->max('blog_must'); // max data degerini verir
//    echo $blog;

// $blog=DB::table('blog')->min('blog_must'); // max data degerini verir
//    echo $blog;

// $blog=DB::table('blog')
// ->where('id','5')
// ->exists(); // id degeri 5 olan data var mi yok mu  
//    echo $blog;

//    $blog=DB::table('blog')
//    ->where('id','5')
//    ->doesntExist(); // id degeri 5 olan data yok mu  var mi :)
//       dd($blog);

// $blog=DB::table('blog')
// ->select('id','blog_title')
// ->get(); // butun datalarin id ve blog title getirir
//    dd($blog);

// $blog=DB::table('blog')
// ->select('blog_title as baslik') // veritabanindan cekilen sutunun adini degistirir.
// ->get();
//    foreach ($blog as $key) {
//        echo $key->baslik."<br>";
//    }

// $blog=DB::table('user')
// ->join('blog','blog.user_id','=','user.id')    //iki tabloyu join islemi ile birlestirdik
// ->get();
// foreach ($blog as $key) {
//     echo $key->user_name.' => '.$key->blog_title.'<br>';
// }

// $blog=DB::table('user')
// ->join('blog','blog.user_id','=','user.id')    //iki tabloyu join islemi ile birlestirdik
// ->where('user.id',4)   //bunlarin icinde user_id si 4 olanlari sectik
// ->get();
// foreach ($blog as $key) {
//     echo $key->user_name.' => '.$key->blog_title.'<br>';
// }

// $blog=DB::table('user')
// ->orderBy('id', 'asc') //DESC tersten siralama ASC siralama
// ->get();
// foreach ($blog as $key) {
//     echo  $key->id.' - '. $key->user_name.'<br>';
//     }

// $blog=DB::table('user')
// ->inRandomOrder() //inRandomOrder restgele siralama 
// ->get();
// foreach ($blog as $key) {
//     echo  $key->id.' - '. $key->user_name.'<br>';
//     }

// $blog=DB::table('user')
// ->orderBy('id', 'DESC')
// ->offset(2) //buradaki sayi kadar kaydi GEC Atla
// ->limit(1) //buradaki sayi kadar kaydi getir
// ->get();
// dd($blog);
// }

// $blog=DB::table('blog')->insert(
//     [
//         [
//         'blog_title' => 'Blog Title 12',
//         'blog_content' => 'Blog Title 12',
//         'blog_must' => 12,
//         ],
//         [
//         'blog_title' => 'Blog Title 13',
//         'blog_content' => 'Blog Title 13',
//         'blog_must' => 13 ,
//         ]
//     ]
// );
// echo $blog;
// }
    
// $blog=DB::table('blog')->insertGetId(  //eklenen son degerin id verir
//     [
//     'blog_title' => 'Blog Title 14',
//     'blog_content' => 'Blog Title 14',
//     'blog_must' => 14,
//     ]
// );
// echo $blog;
// }

// $blog=DB::table('blog')
// ->where('id','9')
// ->update(  //eklenen son degerin id verir
//     [
//     'blog_title' => 'Busra Title 9',
//     'blog_content' => 'Busra content 9',
//     'blog_must' => 14,
//     ]
// );
// echo $blog;
// }

// $blog=DB::table('blog')
// ->updateOrInsert(  //eklenen son degerin id verir
//     [
//     'blog_title' => 'Busra Title 15',
//     'blog_content' => 'Busra Title 15',
//     'blog_must' => 14,
//     ]
// );
// echo $blog;
// }

// $blog=DB::table('blog')
// ->increment('blog_must','9');
// echo $blog;

// $blog=DB::table('blog')
// ->decrement('blog_must','9');
// echo $blog;

// $blog=DB::table('blog')
// ->where('id','15') //tek tek id ile silme
// ->delete();
// echo $blog;
// }

// $blog=DB::table('blog')
// ->truncate();
// echo $blog;
 }

