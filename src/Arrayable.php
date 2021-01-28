<?php

namespace Atomic\Support;

interface Arrayable
{
    /**
     * Get the collection of items as an array
     *
     * @return array
     */
    public function toArray(): array;
}
