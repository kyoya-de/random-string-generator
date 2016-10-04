<?php

namespace KyoyaDe\Generator\RandomString\CharPool;

class NumericPool implements CharacterPoolInterface
{
    private $pool;

    public function getCharacters()
    {
        if (null === $this->pool) {
            $this->pool = range(0, 9);
        }

        return $this->pool;
    }
}