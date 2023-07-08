<?php declare(strict_types=1);

namespace App\exceptions;

class InvalidArgumentException extends \Exception
{
    public function __construct($input)
    {
        $message = 'Invalid input. Input was ' . $input . '. Only positive integers are allowed.';
        parent::__construct($message);
    }
}
