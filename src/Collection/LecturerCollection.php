<?php

declare(strict_types=1);

namespace App\Collection;

use App\Entity\Lecturer;
use ArrayIterator;
use Iterator;
use IteratorAggregate;

class LecturerCollection implements IteratorAggregate
{
    private $lecturers;

    public function __construct(Lecturer ...$lecturers)
    {
        $this->lecturers = $lecturers;
    }

    public function getIterator() : Iterator
    {
        return new ArrayIterator($this->lecturers);
    }
}
