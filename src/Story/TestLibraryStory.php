<?php

namespace App\Story;

use App\Factory\AuthorFactory;
use App\Factory\BookFactory;
use App\Factory\LibraryFactory;
use Zenstruck\Foundry\Story;

final class TestLibraryStory extends Story
{
    public function build(): void
    {
        LibraryFactory::createOne([
            'name' => 'Library thematic'
        ]);

        AuthorFactory::createOne([
            'firstName' => 'Stephen',
            'lastName' => 'King',
        ]);

        AuthorFactory::createOne([
            'firstName' => 'Lisa',
            'lastName' => 'Gardner',
        ]);

        BookFactory::createOne([
            'name' => 'Shinning',
            'authors' => [AuthorFactory::find(['firstName' => 'Stephen', 'lastName' => 'King'])],
        ]);

        BookFactory::createOne([
            'name' => 'When you see me',
            'authors' => [AuthorFactory::find(['firstName' => 'Lisa', 'lastName' => 'Gardner'])],
        ]);
    }
}
