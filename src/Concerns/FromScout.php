<?php

namespace Maatwebsite\Excel\Concerns;

use Illuminate\Database\Eloquent\Collection;
use Laravel\Scout\Builder;

interface FromScout
{
    /**
     * @return Builder
     */
    public function scout();

    /**
     * @param iterable $chunk
     * @return Collection
     */
    public function interactWithChunk($chunk);
}
