<?php

namespace spec\KyoyaDe\Generator\RandomString\CharPool;

use KyoyaDe\Generator\RandomString\CharPool\NumericPool;
use PhpSpec\ObjectBehavior;

class NumericPoolSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(NumericPool::class);
    }

    function it_returns_an_array_with_numbers()
    {
        $this->getCharacters()->shouldBeArray();
        $this->getCharacters()->shouldBe(range(0, 9));
    }
}
