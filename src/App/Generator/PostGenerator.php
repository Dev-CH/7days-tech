<?php

namespace App\Generator;

use App\Entity\Post;

interface PostGenerator
{
    public function generate(): Post;
}