<?php

use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blog = new \App\Blog([
            'name' => 'Health',
            'content' => 'Thu 2 la ngay dau tuan',
            'date_submit' => '2017/07/08',
            'image' => 'abc.jpg',
        ]);
        $blog->save();
        $blog = new \App\Blog([
            'name' => 'Health',
            'content' => 'Thu 2 la ngay dau tuan',
            'date_submit' => '2017/07/08',
            'image' => 'abc.jpg',
        ]);
        $blog->save();
        $blog = new \App\Blog([
            'name' => 'Health',
            'content' => 'Thu 2 la ngay dau tuan',
            'date_submit' => '2017/07/08',
            'image' => 'abc.jpg',
        ]);
        $blog->save();
        $blog = new \App\Blog([
            'name' => 'Health',
            'content' => 'Thu 2 la ngay dau tuan',
            'date_submit' => '2017/07/08',
            'image' => 'abc.jpg',
        ]);
        $blog->save();
        $blog = new \App\Blog([
            'name' => 'Health',
            'content' => 'Thu 2 la ngay dau tuan',
            'date_submit' => '2017/07/08',
            'image' => 'abc.jpg',
        ]);
        $blog->save();
    }
}
