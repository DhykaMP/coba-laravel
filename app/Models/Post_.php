<?php

namespace App\Models;

    class Post
    {
        private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Malware",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur qui esse optio est, distinctio placeat ullam accusamus quas ea. Provident repudiandae, aspernatur error repellat non dignissimos. Accusamus commodi consectetur quasi similique inventore quae placeat ipsam consequuntur quisquam nesciunt quos reprehenderit, animi nulla. Dolores nulla iste repellat est explicabo eius expedita, impedit fugiat tenetur id minima neque consequatur, necessitatibus voluptates ullam modi doloremque hic eaque enim vel! Cum distinctio, ratione nobis facere assumenda hic ea laborum autem, sint enim dolore dolorum laboriosam fugit, laudantium eum voluptas consectetur reprehenderit vel quos nihil nemo quis eligendi? Repellendus quae omnis, commodi nam aperiam voluptas."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Spyware",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur qui esse optio est, distinctio placeat ullam accusamus quas ea. Provident repudiandae, aspernatur error repellat non dignissimos. Accusamus commodi consectetur quasi similique inventore quae placeat ipsam consequuntur quisquam nesciunt quos reprehenderit, animi nulla. Dolores nulla iste repellat est explicabo eius expedita, impedit fugiat tenetur id minima neque consequatur, necessitatibus voluptates ullam modi doloremque hic eaque enim vel! Cum distinctio, ratione nobis facere assumenda hic ea laborum autem, sint enim dolore dolorum laboriosam fugit, laudantium ."
        ]
        // [
        //     "title" => "Judul Post Pertama"
        //     "author" => "Malware"
        //     "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur qui esse optio est, distinctio placeat ullam accusamus quas ea. Provident repudiandae, aspernatur error repellat non dignissimos. Accusamus commodi consectetur quasi similique inventore quae placeat ipsam consequuntur quisquam nesciunt quos reprehenderit, animi nulla. Dolores nulla iste repellat est explicabo eius expedita, impedit fugiat tenetur id minima neque consequatur, necessitatibus voluptates ullam modi doloremque hic eaque enim vel! Cum distinctio."
        // ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', '=', $slug);
    }

    };
