<?php

namespace Maatwebsite\Excel\Concerns;

use Laravel\Scout\Builder;

interface FromScout
{
    /**
     * @return Builder
     */
    public function scout();
}
