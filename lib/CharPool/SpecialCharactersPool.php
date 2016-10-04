<?php

namespace KyoyaDe\Generator\RandomString\CharPool;

class SpecialCharactersPool implements CharacterPoolInterface
{
    private $pool = [];

    public function __construct()
    {
        $this->pool = array_merge($this->pool, range('!', '.'), range(':', '@'), range('[', '_'), range('{', '}'));
    }

    public function getCharacters()
    {
        return $this->pool;
    }
}