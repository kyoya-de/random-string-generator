<?php

namespace KyoyaDe\Generator\RandomString\CharPool;

class AlphaLowerPool implements CharacterPoolInterface
{
    private $pool;

    public function getCharacters()
    {
        if (null === $this->pool) {
            $this->pool = range('a', 'z');
        }

        return $this->pool;
    }
}