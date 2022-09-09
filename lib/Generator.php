<?php

declare(strict_types=1);

namespace KyoyaDe\Generator\RandomString;

use Exception;
use KyoyaDe\Generator\RandomString\CharPool\CharacterPoolInterface;
use KyoyaDe\Generator\RandomString\RandomNumber\GeneratorInterface;
use KyoyaDe\Generator\RandomString\RandomNumber\PhpRandomInt;

class Generator
{
    /**
     * @var array<CharacterPoolInterface>
     */
    private array $characterPools = [];

    /**
     * @param GeneratorInterface            $randomNumber
     * @param array<CharacterPoolInterface> $characterPools
     */
    public function __construct(private GeneratorInterface $randomNumber, array $characterPools = [])
    {
        $this->addCharacterPools($characterPools);
    }

    /**
     * Adds one character pool, used to create the random string;
     *
     * @param CharacterPoolInterface $pool Character pool to add.
     *
     * @return $this
     */
    public function addCharacterPool(CharacterPoolInterface $pool): Generator
    {
        $this->characterPools[] = $pool;

        return $this;
    }

    /**
     * Adds multiple character pools.
     *
     * @param array<CharacterPoolInterface> $pools Array of character pools to add.
     *
     * @return $this
     */
    public function addCharacterPools(array $pools): Generator
    {
        foreach ($pools as $pool) {
            $this->addCharacterPool($pool);
        }

        return $this;
    }

    /**
     * Generates a random string with the given length based on the character pools.
     *
     * @param int $length Length of the result string.
     *
     * @return string
     * @throws Exception
     */
    public function generate(int $length): string
    {
        $realPool = $this->mergePools();
        $max      = (count($realPool) - 1);

        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $realPool[$this->randomNumber->generate(0, $max)];
        }

        return $randomString;
    }

    /**
     * Merges all characters from the registered pools into one array.
     *
     * @return array<string|int>
     */
    protected function mergePools(): array
    {
        $pools = [];

        foreach ($this->characterPools as $pool) {
            $pools[] = $pool->getCharacters();
        }

        return array_merge(...$pools);
    }
}
