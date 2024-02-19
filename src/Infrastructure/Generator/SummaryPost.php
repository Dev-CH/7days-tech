<?php

namespace Infrastructure\Generator;

use App\Entity\Post;

class SummaryPost
{
    public static function fromDate(\DateTimeImmutable $date, string $content): Post
    {
        return Post::create(
            sprintf('Summary %s', $date->format('Y-m-d')),
            $content,
        );
    }
}