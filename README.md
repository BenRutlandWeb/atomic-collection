# Atomic Collection

A Collection interface and implementation for the Atomic framework.

## About

Atomic Collection is an fluent wrapper around arrays, based on Laravel's
Collection. Atomic Collection implements a collection interface and has no
dependencies.

## Usage

```php
<?php

// create a new collection
$collection = new Atomic\Support\Collection([1, 2, 3]);

// or use the helper method
$collection = collect([1, 2, 3]);

```

## Methods

### add()

Adds a value to the collection

```php
<?php

$collection = collect([1, 2, 3])->add(4);

$collection->all();

// [1, 2, 3, 4]
```

### all()

Returns the collection array

```php
<?php

collect([1, 2, 3])->all();

// [1, 2, 3]
```

### chunk()

Returns a chunked array

```php
<?php

$chunks = collect([1, 2, 3, 4, 5, 6, 7, 8])->chunk(4);

$chunks->all();

// [[1, 2, 3, 4], [5, 6, 7, 8]]
```

### combine()

Combines the collection array as keys with another as values

```php
<?php

$collection = collect(['one', 'two', 'three']);

$combined = $collection->combine(['uno', 'dos', 'tres']);

$combined->all();

// ['one' => 'uno', 'two' => 'dos', 'three' => 'tres']
```

### diff()

Compares the collection with another returning the differing values from the
collection

```php
<?php

$collection = collect([1, 2, 3, 4, 5]);

$diff = $collection->diff([2, 4, 6, 8]);

$diff->all();

// [1, 3, 5]
```

### each()

### except()

### filter()

### first()

### firstKey()

### flatten()

### flip()

### forget()

### get()

### has()

### hasKey()

### intersect()

### intersectByKeys()

### isEmpty()

### isNotEmpty()

### join()

### keys()

### last()

### lastKey()

### map()

### merge()

### mergeRecursive()

### only()

### pipe()

### pop()

### prepend()

### push()

### put()

### random()

### reduce()

### replace()

### replaceRecursive()

### reverse()

### search()

### shift()

### shuffle()

### skip()

### slice()

### take()

### tap()

### toArray()

### toJson()

### values()

## TODO

- [ ] Document each Method
