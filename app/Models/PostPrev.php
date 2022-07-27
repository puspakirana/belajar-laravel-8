<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "author" => "Puspakirana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, delectus, minima aliquam natus ratione ea at commodi excepturi assumenda blanditiis maxime impedit quia quo unde odit facilis! Necessitatibus atque adipisci repudiandae magni quas laborum eius recusandae deserunt deleniti aperiam! Rerum nihil exercitationem at dolores eaque, aliquam provident sunt dicta veniam repudiandae illum! Officia ipsum sed odit illum earum accusantium pariatur voluptatibus totam. Reprehenderit iusto iste eum cupiditate unde itaque quod temporibus blanditiis, quaerat ad! Totam doloremque architecto facere at nam?",
            "slug" => "judul-post-pertama"
        ],
        [
            "title" => "Judul Post Kedua",
            "author" => "Siapa",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis perferendis accusamus sed soluta maxime possimus atque ipsum adipisci iusto tenetur, deleniti libero, sint quo saepe, vitae illo! Laborum harum minus molestias aliquid modi libero, atque laboriosam itaque illum recusandae doloribus maiores porro quos accusamus eaque. Nisi repellat debitis qui incidunt ab cumque expedita nam atque provident quae, laborum dolores esse deleniti, eveniet autem blanditiis eos. Sapiente animi minima quae? Quia, doloremque soluta illum ex suscipit blanditiis harum dolores quisquam quis nobis cupiditate optio id, nam incidunt dicta temporibus totam repellat deserunt voluptas voluptatem necessitatibus? Eos debitis labore modi aspernatur ipsam.",
            "slug" => "judul-post-kedua"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {

        //pakai array biasa
        // $posts = self::$blog_posts;

        // $post = [];

        // foreach ($posts as $p) {
        //     if ($p['slug'] == $slug) {
        //         $post = $p;
        //     }
        //}

        //return $post;

        //pakai collection
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
