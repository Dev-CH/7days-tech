<?php

namespace Infrastructure\Generator;

use App\Entity\Post;

class RandomPost
{
    public static function create(string $title, string $content): Post
    {
        return Post::create(
            $title,
            $content,
        );
    }
}