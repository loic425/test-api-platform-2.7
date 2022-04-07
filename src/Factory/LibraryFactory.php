<?php

namespace App\Factory;

use App\Entity\Library;
use App\Repository\LibraryRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @extends ModelFactory<Library>
 *
 * @method static Library|Proxy createOne(array $attributes = [])
 * @method static Library[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Library|Proxy find(object|array|mixed $criteria)
 * @method static Library|Proxy findOrCreate(array $attributes)
 * @method static Library|Proxy first(string $sortedField = 'id')
 * @method static Library|Proxy last(string $sortedField = 'id')
 * @method static Library|Proxy random(array $attributes = [])
 * @method static Library|Proxy randomOrCreate(array $attributes = [])
 * @method static Library[]|Proxy[] all()
 * @method static Library[]|Proxy[] findBy(array $attributes)
 * @method static Library[]|Proxy[] randomSet(int $number, array $attributes = [])
 * @method static Library[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static LibraryRepository|RepositoryProxy repository()
 * @method Library|Proxy create(array|callable $attributes = [])
 */
final class LibraryFactory extends ModelFactory
{
    public function __construct()
    {
        parent::__construct();

        // TODO inject services if required (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services)
    }

    protected function getDefaults(): array
    {
        return [
            // TODO add your default values here (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories)
            'name' => self::faker()->text(),
        ];
    }

    protected function initialize(): self
    {
        // see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
        return $this
            // ->afterInstantiate(function(Library $library): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Library::class;
    }
}
