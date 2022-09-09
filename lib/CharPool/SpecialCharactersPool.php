<?php

declare(strict_types=1);

namespace KyoyaDe\Generator\RandomString\CharPool;

class SpecialCharactersPool implements CharacterPoolInterface
{
    /**
     * @var array<string>|null
     */
    private static ?array $pool = null;

    /**
     * Returns an array of special characters.
     *
     * @return array<string>
     */
    public function getCharacters(): array
    {
        if (null === static::$pool) {
            static::$pool = array_merge(
                range('!', '.'),
                range(':', '@'),
                range('[', '_'),
                range('{', '}')
            );
        }

        return static::$pool;
    }
}
