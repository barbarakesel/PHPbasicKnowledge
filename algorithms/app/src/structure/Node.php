<?php

declare(strict_types=1);

class Node
{
    public ?Node $next = null;
    public ?Node $prev = null;

    public function __construct(mixed $value)
    {
    }
}
