<?php

declare(strict_types=1);

namespace App\Entity;

use App\Exception\InvalidFirstnameException;
use App\ValueObject\PersonName;
use App\ValueObject\Surname;

class Lecturer
{
    private $lecturerName;
    private $office;
    private $phone;

    public function __construct(Surname $surname, string $firstName, string $office = '', string $phone = '')
    {
        if (strlen($firstName) < 1) {
            throw new InvalidFirstnameException();
        }
        $this->lecturerName = new PersonName($surname, $firstName);
        $this->office = $office;
        $this->phone = $phone;
    }

    public function getName() : string
    {
        return strtoupper($this->lecturerName->getValue());
    }

    public function getOffice()
    {
        return $this->office;
    }

    public function getPhone()
    {
        return $this->phone;
    }
}
