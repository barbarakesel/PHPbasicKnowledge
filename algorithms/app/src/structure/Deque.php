<?php

declare(strict_types=1);

require __DIR__.'/../structure/Node.php';
class Deque
{
    private ?Node $head = null;
    private ?Node $tail = null;

    public function pushFront(mixed $value): void
    {
        $node = new Node($value);
        if ($this->head === null) {
            $this->head = $this->tail = $node;
        } else {
            $node->next = $this->head;
            $this->head->prev = $node;
            $this->head = $node;
        }
    }

    public function pushBack(mixed $value): void
    {
        $node = new Node($value);
        if ($this->tail === null) {
            $this->head = $this->tail = $node;
        } else {
            $node->prev = $this->tail;
            $this->tail->next = $node;
            $this->tail = $node;
        }
    }

    public function popFront(): mixed
    {
        if ($this->head === null) {
            throw new UnderflowException('Deque is empty');
        }

        $value = $this->head->value;
        $this->head = $this->head->next;

        if ($this->head !== null) {
            $this->head->prev = null;
        } else {
            $this->tail = null;
        }

        return $value;
    }

    public function popBack(): mixed
    {
        if ($this->tail === null) {
            throw new UnderflowException('Deque is empty');
        }

        $value = $this->tail->value;
        $this->tail = $this->tail->prev;

        if ($this->tail !== null) {
            $this->tail->next = null;
        } else {
            $this->head = null;
        }

        return $value;
    }

    public function isEmpty(): bool
    {
        return $this->head === null;
    }
}



