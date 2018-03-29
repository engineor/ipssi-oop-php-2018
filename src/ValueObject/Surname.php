<?php

declare(strict_types=1);

namespace App\ValueObject;

class Surname
{
    private $surname;

    public function __construct(string $value)
    {
        if (strlen($value) < 1) {
            throw new InvalidSurnameException();
        }
        $this->surname = $value;
    }

    public function getValue() : string
    {
        return $this->surname;
    }
}
