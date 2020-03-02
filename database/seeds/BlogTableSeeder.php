<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            ['blog_title'=> Str::random(10), // rastgele random veri atama
            'blog_content'=> 'Content 3' ],
            ['blog_title'=> Str::random(10),
            'blog_content'=> 'Content 2' ],
        ]);
    }
}
