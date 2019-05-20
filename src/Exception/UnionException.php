<?php

namespace JingDongLeague\Exception;

class UnionException extends \Exception
{
    public function __construct(string $message = "", int $code = 400)
    {
        parent::__construct($message, $code);
    }
}