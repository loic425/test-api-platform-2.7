<?php

namespace App\Story;

use App\Factory\AuthorFactory;
use App\Factory\BookFactory;
use Zenstruck\Foundry\Story;

final class DefaultLibraryStory extends Story
{
    public function build(): void
    {
        AuthorFactory::createMany(20);

        BookFactory::createMany(100);
    }
}
