<?php

namespace spec\KyoyaDe\Generator\RandomString\CharPool;

use KyoyaDe\Generator\RandomString\CharPool\AlphaUpperPool;
use PhpSpec\ObjectBehavior;

class AlphaUpperPoolSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(AlphaUpperPool::class);
    }

    function it_returns_an_array_with_uppercase_letters()
    {
        $this->getCharacters()->shouldBeArray();
        $this->getCharacters()->shouldBe(range('A', 'Z'));
    }
}
