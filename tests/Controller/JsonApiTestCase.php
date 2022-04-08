<?php

/*
 * This file is part of the Profeel project.
 *
 * (c) Mobizel
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace App\Tests\Controller;

/**
 * @internal
 * @coversNothing
 */
class JsonApiTestCase extends \ApiTestCase\JsonApiTestCase
{
    /**
     * @before
     */
    public function setUpClient(): void
    {
        $this->client = static::createClient([], ['HTTP_ACCEPT' => 'application/ld+json']);
    }
}
