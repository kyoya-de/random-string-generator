<?php

declare(strict_types=1);

namespace KyoyaDe\Generator\RandomString\RandomNumber;

interface GeneratorInterface
{
    /**
     * Returns a random number between $min and $max (inclusive).
     *
     * @param int $min
     * @param int $max
     *
     * @return int
     */
    public function generate(int $min, int $max): int;
}
