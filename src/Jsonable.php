<?php

namespace Atomic\Support;

interface Jsonable
{
    /**
     * Get the collection of items as JSON
     *
     * @param int $options
     * @return string
     */
    public function toJson(int $options = 0): string;
}
