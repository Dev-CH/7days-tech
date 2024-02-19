<?php

namespace Infrastructure\Factory;

use App\Entity\Post;
use App\Generator\PostGenerator;
use Infrastructure\Generator\RandomPost;
use Infrastructure\Generator\SummaryPost;
use joshtronic\LoremIpsum;

class PostGeneratorFactory implements PostGenerator
{
    private LoremIpsum $loremIpsum;

    public function __construct(LoremIpsum $loremIpsum)
    {
        $this->loremIpsum = $loremIpsum;
    }

    public function generate(bool $summary = false): Post
    {
        if ($summary) {
            return SummaryPost::fromDate(
                new \DateTimeImmutable(),
                $this->loremIpsum->paragraphs(),
            );
        }

        return RandomPost::create(
            $this->loremIpsum->words(mt_rand(4, 6)),
            $this->loremIpsum->paragraphs(2)
        );
    }
}