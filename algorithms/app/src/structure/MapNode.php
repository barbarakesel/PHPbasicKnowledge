<?php

declare(strict_types=1);

class MapNode
{
    public ?MapNode $next = null;

    public function __construct(public string $key, public mixed $value)
    {
    }
}
