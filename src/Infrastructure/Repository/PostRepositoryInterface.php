<?php

namespace Infrastructure\Repository;

use App\Entity\Post;

interface PostRepositoryInterface
{
    public function add(Post $entity, bool $flush = false): void;

    public function remove(Post $entity, bool $flush = false): void;
}