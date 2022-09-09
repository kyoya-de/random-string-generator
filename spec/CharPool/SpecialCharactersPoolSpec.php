<?php

namespace spec\KyoyaDe\Generator\RandomString\CharPool;

use KyoyaDe\Generator\RandomString\CharPool\SpecialCharactersPool;
use PhpSpec\ObjectBehavior;

class SpecialCharactersPoolSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(SpecialCharactersPool::class);
    }

    function it_returns_an_array_with_special_characters()
    {
        $this->getCharacters()->shouldBeArray();
        $expected = [
            '!',
            '"',
            '#',
            '$',
            '%',
            '&',
            '\'',
            '(',
            ')',
            '*',
            '+',
            ',',
            '-',
            '.',
            ':',
            ';',
            '<',
            '=',
            '>',
            '?',
            '@',
            '[',
            '\\',
            ']',
            '^',
            '_',
            '{',
            '|',
            '}',
        ];
        $this->getCharacters()->shouldBe($expected);
    }
}
