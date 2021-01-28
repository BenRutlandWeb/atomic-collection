<?php

namespace Atomic\Support;

use ArrayAccess;
use Countable;
use IteratorAggregate;
use JsonSerializable;

interface CollectionInterface extends
    Arrayable,
    ArrayAccess,
    Countable,
    IteratorAggregate,
    Jsonable,
    JsonSerializable
{
    /**
     * Add an item to the collection.
     *
     * @param mixed $item
     * @return static
     */
    public function add($item);

    /**
     * Get the collection items
     *
     * @return array
     */
    public function all(): array;

    /**
     * Split a collection into chunks
     *
     * @param int $size
     * @return static
     */
    public function chunk(int $size);

    /**
     * Create a collection by using this collection for keys and another for its
     * values
     *
     * @param mixed $values
     * @return static
     */
    public function combine($values);

    /**
     * Get the items in the collection that are not present in the given items
     *
     * @param mixed $items
     * @return static
     */
    public function diff($items);

    /**
     * Execute a callback over each item
     *
     * @param callable $callback
     * @return static
     */
    public function each(callable $callback);

    /**
     * Get all items except for those with the specified keys.
     *
     * @param string,... $keys
     * @return static
     */
    public function except(string ...$keys);

    /**
     * Iterates over each item in the collection passing them to the callback
     * function
     *
     * @param callable|null $callback
     * @return static
     */
    public function filter(?callable $callback = null);

    /**
     * Gets the first item of the collection
     *
     * @return mixed
     */
    public function first();

    /**
     * Gets the first key of the collection
     *
     * @return string|int|null
     */
    public function firstKey();

    /**
     * Flatten a multi-dimensional array into a single level
     *
     * @return static
     */
    public function flatten();

    /**
     * Exchanges all keys with their associated values in a collection
     *
     * @return static
     */
    public function flip();

    /**
     * Unset an item in the collection
     *
     * @param string $key
     * @return static
     */
    public function forget(string $key);

    /**
     * Get an item from the collection
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public function get(string $key, $default);

    /**
     * Determine if an item in the collection exists
     *
     * @param string $key
     * @return bool
     */
    public function has(string $key): bool;

    /**
     * Determine if the given key or index exists in the collection
     *
     * @param string $key
     * @return bool
     */
    public function hasKey(string $key): bool;

    /**
     * Intersect the collection with the given items
     *
     * @param mixed $items
     * @return static
     */
    public function intersect($items);

    /**
     * Computes the intersection of the collection using keys for comparison
     *
     * @param mixed $items
     * @return static
     */
    public function intersectByKeys($items);

    /**
     * Determine if the collection is empty or not
     *
     * @return bool
     */
    public function isEmpty(): bool;

    /**
     * Determine if the collection is empty or not
     *
     * @return bool
     */
    public function isNotEmpty(): bool;

    /**
     * Join all items from the collection using a string.
     *
     * @param string $glue
     * @return string
     */
    public function join(string $glue): string;

    /**
     * Get the keys from the collection
     *
     * @return static
     */
    public function keys();

    /**
     * Gets the last item of the collection
     *
     * @return mixed
     */
    public function last();

    /**
     * Gets the last key of the collection
     *
     * @return string|int|null
     */
    public function lastKey();

    /**
     * Applies the callback to the elements of the collection
     *
     * @param callable $callback
     * @return static
     */
    public function map(callable $callback);

    /**
     * Merge the collection with the given items
     *
     * @param mixed $array
     * @return static
     */
    public function merge($array);

    /**
     * Recursively merge the collection with the given items
     *
     * @param mixed $array
     * @return static
     */
    public function mergeRecursive($array);

    /**
     * Get the items with the specified keys
     *
     * @param string,... $keys
     * @return static
     */
    public function only(string ...$keys);

    /**
     * Pass the collection to the given callback and return the result
     *
     * @param callable $callback
     * @return mixed
     */
    public function pipe(callable $callback);

    /**
     * Get and remove the last item from the collection
     *
     * @return mixed
     */
    public function pop();

    /**
     * Push an item onto the beginning of the collection
     *
     * @param mixed $value
     * @param string|int|null $key
     * @return static
     */
    public function prepend($value, $key = null);

    /**
     * Push elements onto the end of the collection
     *
     * @param mixed,... $values
     * @return static
     */
    public function push(...$values);

    /**
     * Push keyed elements onto the end of the collection
     *
     * @param string $key
     * @param mixed $value
     * @return static
     */
    public function put(string $key, $value);

    /**
     * Pick one or more random entries out of the collection
     *
     * @param int $number
     * @param bool $preserveKeys
     * @return mixed|static
     *
     * @throws \InvalidArgumentException
     */
    public function random(int $number = 1, bool $preserveKeys = false);

    /**
     * Reduce the collection to a single value
     *
     * @param callable $callback
     * @param mixed $initial
     * @return mixed
     */
    public function reduce(callable $callback, $initial = null);

    /**
     * Replace the collection items with the given items.
     *
     * @param mixed $items
     * @return static
     */
    public function replace($items);

    /**
     * Recursively replace the collection items with the given items.
     *
     * @param mixed $items
     * @return static
     */
    public function replaceRecursive($items);

    /**
     * Return a collection with elements in reverse order
     *
     * @return static
     */
    public function reverse();

    /**
     * Searches the collection for a given value and returns the corresponding
     * key if successful
     *
     * @param mixed $value
     * @param boolean $strict
     * @return int|string|false
     */
    public function search($value, bool $strict = false);

    /**
     * Shift an element off the beginning of the collection
     *
     * @return mixed
     */
    public function shift();

    /**
     * Shuffle the items in the collection
     *
     * @return static
     */
    public function shuffle();

    /**
     * Skip the first x number of items
     *
     * @param int $count
     * @return static
     */
    public function skip(int $count);

    /**
     * Extract a slice of the collection
     *
     * @param int $offset
     * @param int|null $length
     * @return static
     */
    public function slice(int $offset, ?int $length = null);

    /**
     * Take the first or last {$limit} items
     *
     * @param int $limit
     * @return static
     */
    public function take(int $limit);

    /**
     * Pass the collection to the given callback and then return it
     *
     * @param callable $callback
     * @return static
     */
    public function tap(callable $callback);

    /**
     * Return all the values of the collection
     *
     * @return static
     */
    public function values();

    /**
     * Dynamically get an item from the collection
     *
     * @param string $key
     * @return mixed
     */
    public function __get(string $key);

    /**
     * Dynamically set items in the collection
     *
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public function __set(string $key, $value): void;

    /**
     * Return the collection as a JSON string
     *
     * @return string
     */
    public function __toString();
}
