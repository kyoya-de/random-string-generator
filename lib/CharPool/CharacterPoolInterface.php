<?php

namespace KyoyaDe\Generator\RandomString\CharPool;

interface CharacterPoolInterface
{
    /**
     * Returns an array of characters used to generate a random string.
     *
     * @return string[]
     */
    public function getCharacters();
}