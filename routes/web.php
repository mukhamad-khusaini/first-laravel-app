<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    $data = [
        '0' => [
            "id" => 0,
            'title' => "Cara Cepat Kaya",
            "author" => "Mukhamad Khusaini",
            "tag" => "Strategy",
            "content" => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit consectetur maiores iure, ipsa et architecto dolore reprehenderit aliquid ducimus molestias vero eaque ad omnis voluptates aut, earum quasi consequatur ex?Tempora iusto, cumque deserunt voluptates reiciendis, saepe et illo necessitatibus, maxime quibusdam ratione est? Et, voluptas voluptatem? Excepturi eius aut eveniet, nesciunt quod quaerat doloribus enim quisquam placeat modi at? "
        ],
        '1' => [
            "id" => 1,
            'title' => "Cara Membuat Uang",
            "author" => "Mukhamad Khusaini",
            "tag" => "Strategy",
            "content" => "
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum harum dicta assumenda dignissimos
                    quae illum, cumque consequatur dolores labore architecto in consectetur, mollitia quo eum odit
                    facilis ratione. Pariatur, sunt!
                    Atque doloremque maiores mollitia ipsa vel aspernatur, neque facere quo eos eligendi inventore
                    voluptatum, optio quos minus unde. Ratione sapiente amet nisi iste accusantium consequatur, esse
                    deleniti ipsam quo temporibus?
                    Molestiae asperiores animi nobis libero aut autem iure, hic at et saepe magni soluta nam vero natus
                    nesciunt explicabo ex ipsam voluptatem repudiandae non ipsa itaque distinctio ratione a? Tenetur!
            "
        ]
    ];

    return view("blog", ["posts" => $data]);
});

Route::get('/blog/{id}', function ($id) {
    $data = [
        '0' => [
            "id" => 0,
            'title' => "Cara Cepat Kaya",
            "author" => "Mukhamad Khusaini",
            "tag" => "Strategy",
            "content" => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit consectetur maiores iure, ipsa et architecto dolore reprehenderit aliquid ducimus molestias vero eaque ad omnis voluptates aut, earum quasi consequatur ex?Tempora iusto, cumque deserunt voluptates reiciendis, saepe et illo necessitatibus, maxime quibusdam ratione est? Et, voluptas voluptatem? Excepturi eius aut eveniet, nesciunt quod quaerat doloribus enim quisquam placeat modi at? "
        ],
        '1' => [
            "id" => 1,
            'title' => "Cara Membuat Uang",
            "author" => "Mukhamad Khusaini",
            "tag" => "Strategy",
            "content" => "
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum harum dicta assumenda dignissimos
                    quae illum, cumque consequatur dolores labore architecto in consectetur, mollitia quo eum odit
                    facilis ratione. Pariatur, sunt!
                    Atque doloremque maiores mollitia ipsa vel aspernatur, neque facere quo eos eligendi inventore
                    voluptatum, optio quos minus unde. Ratione sapiente amet nisi iste accusantium consequatur, esse
                    deleniti ipsam quo temporibus?
                    Molestiae asperiores animi nobis libero aut autem iure, hic at et saepe magni soluta nam vero natus
                    nesciunt explicabo ex ipsam voluptatem repudiandae non ipsa itaque distinctio ratione a? Tenetur!
            "
        ]
    ];

    $post = $data[$id];

    return view("post", ['post' => $post]);
});
