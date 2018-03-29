<?php

declare(strict_types=1);

namespace App\Exception;

use DomainException;

class InvalidSurnameException extends DomainException
{
    public function __construct()
    {
        parent::__construct('Invalid surname');
    }
}

