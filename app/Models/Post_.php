<?php

namespace App\Models;

class post 
{
    private static $blog_posts = [
        [
            "title" => "Judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "Agustino",
            "body" =>  "Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis commodi suscipit asperiores aut laboriosam unde, adipisci iusto laborum facere iure. Corporis officiis nostrum at, qui nisi quas inventore repellat error deleniti? Animi quibusdam pariatur, sit omnis explicabo, quis quia sunt facere laudantium aperiam expedita? Iure nesciunt, inventore rerum minus ratione similique voluptatum ullam iste? Illo placeat quaerat rerum, quisquam voluptates aspernatur distinctio fugit! Nesciunt, vitae laboriosam corporis sapiente neque, eaque voluptatum odio ipsam perferendis magnam facere officiis corrupti tenetur optio. "
        ],
    
        [
            "title" => "Judul post kedua",
            "slug" => "judul-post-kedua",
            "author" => "tio",
            "body" =>  "Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis commodi suscipit asperiores aut laboriosam unde, adipisci iusto laborum facere iure. Corporis officiis nostrum at, qui nisi quas inventore repellat error deleniti? Animi quibusdam pariatur, sit omnis explicabo, quis quia sunt facere laudantium aperiam expedita? Iure nesciunt, inventore rerum minus ratione similique voluptatum ullam iste? Illo placeat quaerat rerum, quisquam voluptates aspernatur distinctio fugit! Nesciunt, vitae laboriosam corporis sapiente neque, eaque voluptatum odio ipsam perferendis magnam facere officiis corrupti tenetur optio. "
        ]
        ];

        public static function all()
        {
            return collect(self::$blog_posts);
        }

        public static function find($slug)
        {
            $posts = static::all();

            return $posts->firstWhere('slug', $slug);
        }
}
