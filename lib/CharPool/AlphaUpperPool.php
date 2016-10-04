<?php

namespace KyoyaDe\Generator\RandomString\CharPool;

class AlphaUpperPool implements CharacterPoolInterface
{
    private $pool;

    public function getCharacters()
    {
        if (null === $this->pool) {
            $this->pool = range('A', 'Z');
        }

        return $this->pool;
    }
}