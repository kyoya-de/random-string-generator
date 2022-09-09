<?php

declare(strict_types=1);

namespace KyoyaDe\Generator\RandomString\CharPool;

class NumericPool implements CharacterPoolInterface
{
    /**
     * @var array<int>|null
     */
    private static ?array $pool = null;

    /**
     * Returns an array of numbers.
     *
     * @return array<int>
     */
    public function getCharacters(): array
    {
        if (null === static::$pool) {
            static::$pool = range(0, 9);
        }

        return static::$pool;
    }
}
