<?php
namespace KyoyaDe\Generator\RandomString;

use KyoyaDe\Generator\RandomString\CharPool\CharacterPoolInterface;

class Generator
{
    /**
     * @var CharacterPoolInterface[]
     */
    private $characterPools = [];

    /**
     * Adds one character pool, used to create the random string;
     *
     * @param CharacterPoolInterface $pool Character pool to add.
     *
     * @return $this
     */
    public function addCharacterPool(CharacterPoolInterface $pool)
    {
        $this->characterPools[] = $pool;

        return $this;
    }

    /**
     * Adds multiple character pools.
     *
     * @param CharacterPoolInterface[] $pools Array of character pools to add.
     *
     * @return $this
     */
    public function addCharacterPools($pools)
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
     */
    public function generate($length)
    {
        $realPool = $this->mergePools($this->characterPools);
        $max = (count($realPool) - 1);
        mt_srand();

        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $realPool[mt_rand(0, $max)];
        }

        return $randomString;
    }

    /**
     * Merges all characters from the registered pools into one array.
     *
     * @param CharacterPoolInterface[] $pools
     *
     * @return array
     */
    protected function mergePools($pools)
    {
        $mergedPool = [];

        foreach ($pools as $pool) {
            foreach ($pool->getCharacters() as $character) {
                $mergedPool[] = $character;
            }
        }

        return $mergedPool;
    }
}