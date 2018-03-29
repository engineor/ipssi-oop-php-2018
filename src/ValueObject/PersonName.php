<?php

declare(strict_types=1);

namespace App\ValueObject;

class PersonName
{
    private $surname;
    private $firstName;

    public function __construct(Surname $surname, string $firstName)
    {
        $this->surname = $surname;
        $this->firstName = $firstName;
    }

    public function getValue() : string
    {
        return "{$this->firstName} {$this->surname->getValue()}";
    }
}
