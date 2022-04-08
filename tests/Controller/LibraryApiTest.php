<?php

declare(strict_types=1);

namespace App\Tests\Controller;

use App\Factory\BookFactory;
use App\Factory\LibraryFactory;
use App\Story\TestLibraryStory;
use Zenstruck\Foundry\Test\Factories;

final class LibraryApiTest extends JsonApiTestCase
{
    use PurgeDatabaseTrait;
    use Factories;

    /** @test */
    public function it_allows_getting_a_single_library(): void
    {
        TestLibraryStory::load();

        $library = LibraryFactory::find(['name' => 'Library thematic']);

        $this->client->request('GET', '/api/libraries/'.$library->getId());
        $response = $this->client->getResponse();
        $this->assertResponse($response, 'libraries/getting_single_library_response');
    }

    /** @test */
    public function it_allows_getting_libraries(): void
    {
        TestLibraryStory::load();

        $this->client->request('GET', '/api/libraries');
        $response = $this->client->getResponse();
        $this->assertResponse($response, 'libraries/getting_libraries_response');
    }

    /** @test */
    public function it_allows_getting_library_from_a_book(): void
    {
        TestLibraryStory::load();

        $book = BookFactory::find(['name' => 'Shinning']);

        $this->client->request('GET', '/api/books/'.$book->getId().'/library');
        $response = $this->client->getResponse();
        $this->assertResponse($response, 'libraries/getting_library_from_a_book_response');
    }
}
