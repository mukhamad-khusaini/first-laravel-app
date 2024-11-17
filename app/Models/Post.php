<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    protected static $data = [
        [
            "slug" => "cara-cepat-kaya",
            'title' => "Cara Cepat Kaya",
            "author" => "Mukhamad Khusaini",
            "tag" => "Strategy",
            "content" => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit consectetur maiores iure, ipsa et architecto dolore reprehenderit aliquid ducimus molestias vero eaque ad omnis voluptates aut, earum quasi consequatur ex?Tempora iusto, cumque deserunt voluptates reiciendis, saepe et illo necessitatibus, maxime quibusdam ratione est? Et, voluptas voluptatem? Excepturi eius aut eveniet, nesciunt quod quaerat doloribus enim quisquam placeat modi at? "
        ],
        [
            "slug" => "cara-membuat-uang",
            'title' => "Cara Membuat Uang",
            "author" => "Mukhamad Khusaini",
            "tag" => "Strategy",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit consectetur maiores iure, ipsa et architecto dolore reprehenderit aliquid ducimus molestias vero eaque ad omnis voluptates aut, earum quasi consequatur ex?Tempora iusto, cumque deserunt voluptates reiciendis, saepe et illo necessitatibus, maxime quibusdam ratione est? Et, voluptas voluptatem? Excepturi eius aut eveniet, nesciunt quod quaerat doloribus enim quisquam placeat modi at? "
        ]
    ];
    public static function all(): array
    {
        return static::$data;
    }

    public static function one($slug = ''): array
    {
        return Arr::first(static::$data, fn($i) => $i['slug'] == $slug);
    }
}
