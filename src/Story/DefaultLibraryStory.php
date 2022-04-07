<?php

namespace App\Story;

use App\Factory\AuthorFactory;
use App\Factory\BookFactory;
use App\Factory\LibraryFactory;
use Zenstruck\Foundry\Story;

final class DefaultLibraryStory extends Story
{
    public function build(): void
    {
        LibraryFactory::createMany(2);

        AuthorFactory::createMany(20);

        BookFactory::createMany(100);
    }
}
