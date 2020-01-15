<?php

namespace Maatwebsite\Excel\Concerns;

use Laravel\Scout\Builder;

interface FromScout
{
    /**
     * @return Builder
     */
    public function scout();

    /**
     * @param iterable $chunk
     *
     * @return iterable
     */
    public function interactWithChunk($chunk);
}
