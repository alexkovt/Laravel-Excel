<?php

namespace Maatwebsite\Excel\Concerns;

use Illuminate\Database\Eloquent\Collection;

interface WithChunkExport
{
    /**
     * @param iterable $chunk
     *
     * @return Collection
     */
    public function interactWithChunk($chunk);
}
