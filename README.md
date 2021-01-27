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

collect([1, 2, 3])->add(4)->all();

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

Returns the collection array

```php
<?php

collect([1, 2, 3, 4, 5, 6, 7, 8])->chunk(4);

// [[1, 2, 3, 4], [5, 6, 7, 8]]
```
