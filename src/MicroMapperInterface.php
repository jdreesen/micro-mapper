<?php

/*
 * This file is part of the SymfonyCasts MicroMapper package.
 * Copyright (c) SymfonyCasts <https://symfonycasts.com/>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfonycasts\MicroMapper;

/**
 * Maps one object to another using the configured mappers.
 */
interface MicroMapperInterface
{
    public const MAX_DEPTH = 'max_depth';

    public function map(object $from, string $toClass, array $context = []): object;
}
