<?php
class MapNode
{
    public string $key;
    public mixed $value;
    public ?MapNode $next = null;

    public function __construct(string $key, mixed $value)
    {
        $this->key = $key;
        $this->value = $value;
    }
}
