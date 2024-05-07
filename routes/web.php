<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        [
            [
                'slug' => 'judul-artikel-1',
                'title' => 'Indonesia Lolos Olimpiade Paris 2024',
                'author' => 'Junika Rizki',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga obcaecati aliquid distinctio animi, fugiat laborum magni facilis quis laudantium nemo nostrum repudiandae cum, maxime veniam. Dolorem animi ducimus ea asperiores!'
            ],
            [
                'slug' => 'judul-artikel-2',
                'title' => 'Segini Kekuatan Indonesia di Olimpiade, Lawan Ketar-ketir',
                'author' => 'Junika Rizki',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In quisquam illo ipsam excepturi qui, quas numquam consequatur iusto enim itaque fugit. Eos omnis sint accusantium excepturi dolorem earum assumenda laborum!!'

            ]
        ];
    }
}

Route::get('/', function () {
    return view('home', ['title' => 'Level Up Timnas']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'Level Up Timnas', 'name' => 'Junika Rizki']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Level Up Timnas', 'posts' => Post::all()]);
});

Route::get('/posts/{$slug}', function ($slug) {
    $post = Arr::first(Post::all(), function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Level Up Timnas']);
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// });
