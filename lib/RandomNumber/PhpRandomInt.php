<?php

declare(strict_types=1);

namespace KyoyaDe\Generator\RandomString\RandomNumber;

use Exception;

class PhpRandomInt implements GeneratorInterface
{
    /**
     * @param int $min
     * @param int $max
     *
     * @return int
     * @throws Exception
     */
    public function generate(int $min, int $max): int
    {
        return random_int($min, $max);
    }
}
