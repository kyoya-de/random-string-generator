<?php

declare(strict_types=1);

namespace KyoyaDe\Generator\RandomString\CharPool;

interface CharacterPoolInterface
{
    /**
     * Returns an array of characters used to generate a random string.
     *
     * @return array<string|int>
     */
    public function getCharacters(): array;
}
