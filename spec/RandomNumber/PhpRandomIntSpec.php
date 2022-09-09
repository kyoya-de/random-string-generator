<?php

namespace spec\KyoyaDe\Generator\RandomString\RandomNumber;

use KyoyaDe\Generator\RandomString\RandomNumber\PhpRandomInt;
use PhpSpec\ObjectBehavior;

class PhpRandomIntSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(PhpRandomInt::class);
    }

    function it_returns_a_random_number(PhpRandomInt $phpRandomInt)
    {
        $this->generate(0, 12)->shouldBeInteger();
    }
}
