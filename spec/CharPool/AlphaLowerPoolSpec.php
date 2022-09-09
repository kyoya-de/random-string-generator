<?php

namespace spec\KyoyaDe\Generator\RandomString\CharPool;

use KyoyaDe\Generator\RandomString\CharPool\AlphaLowerPool;
use PhpSpec\ObjectBehavior;

class AlphaLowerPoolSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(AlphaLowerPool::class);
    }

    function it_returns_an_array_with_lowercase_letters()
    {
        $this->getCharacters()->shouldBeArray();
        $this->getCharacters()->shouldBe(range('a', 'z'));
    }
}
