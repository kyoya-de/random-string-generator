<?php

namespace spec\KyoyaDe\Generator\RandomString;

use KyoyaDe\Generator\RandomString\CharPool\CharacterPoolInterface;
use KyoyaDe\Generator\RandomString\Generator;
use KyoyaDe\Generator\RandomString\RandomNumber\GeneratorInterface;
use PhpSpec\ObjectBehavior;

class GeneratorSpec extends ObjectBehavior
{
    function it_is_initializable(GeneratorInterface $generator)
    {
        $this->beConstructedWith($generator);
        $this->shouldHaveType(Generator::class);
    }

    function it_takes_character_pools_in_constructor(CharacterPoolInterface $pool, GeneratorInterface $generator)
    {
        $generator->generate(0, 6)->willReturn(...range(0, 6));

        $pool->getCharacters()->willReturn(['a', 'A', '0', '!', ':', '[', '{']);

        $this->beConstructedWith($generator, [$pool]);

        $this->shouldHaveType(Generator::class);
        $this->generate(7)->shouldReturn('aA0!:[{');
    }
}
