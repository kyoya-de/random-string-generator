<?php

declare(strict_types=1);

namespace KyoyaDe\Generator\RandomString\CharPool;

class AlphaLowerPool implements CharacterPoolInterface
{
    /**
     * @var array<string>|null
     */
    private static ?array $pool = null;

    /**
     * Returns an array of uppercase letters.
     *
     * @return array<string>
     */
    public function getCharacters(): array
    {
        if (null === static::$pool) {
            static::$pool = range('a', 'z');
        }

        return static::$pool;
    }
}
