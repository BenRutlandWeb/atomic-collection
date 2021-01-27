<?php

use Atomic\Support\Collection;

if (!function_exists('collect')) {
    /**
     * Create a collection from an array
     *
     * @param array $array
     * @return \Atomic\Support\Collection
     */
    function collect(array $array = []): Collection
    {
        return new Collection($array);
    }
}
