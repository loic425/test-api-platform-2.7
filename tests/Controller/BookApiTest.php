<?php

declare(strict_types=1);

namespace App\Tests\Controller;

use App\Factory\AuthorFactory;
use App\Factory\BookFactory;
use App\Factory\LibraryFactory;
use App\Story\TestLibraryStory;
use Zenstruck\Foundry\Test\Factories;

final class BookApiTest extends JsonApiTestCase
{
    use PurgeDatabaseTrait;
    use Factories;

    /** @test */
    public function it_allows_getting_a_single_book(): void
    {
        TestLibraryStory::load();

        $book = BookFactory::find(['name' => 'Shinning']);

        $this->client->request('GET', '/api/books/'.$book->getId());
        $response = $this->client->getResponse();
        $this->assertResponse($response, 'books/getting_single_book_response');
    }

    /** @test */
    public function it_allows_getting_books(): void
    {
        TestLibraryStory::load();

        $this->client->request('GET', '/api/books');
        $response = $this->client->getResponse();
        $this->assertResponse($response, 'books/getting_books_response');
    }

    /** @test */
    public function it_allows_getting_books_from_an_author(): void
    {
        TestLibraryStory::load();

        $author = AuthorFactory::find(['firstName' => 'Stephen', 'lastName' => 'King']);

        $this->client->request('GET', '/api/authors/'.$author->getId().'/books');
        $response = $this->client->getResponse();
        $this->assertResponse($response, 'books/getting_books_from_an_author_response');
    }

    /** @test */
    public function it_allows_getting_books_from_a_library(): void
    {
        TestLibraryStory::load();

        $library = LibraryFactory::find(['name' => 'Library thematic']);

        $this->client->request('GET', '/api/libraries/'.$library->getId().'/books');
        $response = $this->client->getResponse();
        $this->assertResponse($response, 'books/getting_books_from_a_library_response');
    }
}
