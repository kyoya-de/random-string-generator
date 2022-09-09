<?php

declare(strict_types=1);

namespace KyoyaDe\Generator\RandomString\CharPool;

class AlphaUpperPool implements CharacterPoolInterface
{
    /**
     * @var array<string>|null
     */
    private static ?array $pool = null;

    /**
     * Returns an array of lowercase letters.
     *
     * @return array<string>
     */
    public function getCharacters(): array
    {
        if (null === static::$pool) {
            static::$pool = range('A', 'Z');
        }

        return static::$pool;
    }
}
