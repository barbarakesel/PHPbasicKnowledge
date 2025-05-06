<?php

declare(strict_types=1);

class Map
{
    private ?MapNode $head = null;

    public function put(string $key, mixed $value): void
    {
        $node = $this->head;

        while ($node !== null) {
            if ($node->key === $key) {
                $node->value = $value;
                return;
            }
            $node = $node->next;
        }

        $newNode = new MapNode($key, $value);
        $newNode->next = $this->head;
        $this->head = $newNode;
    }

    public function get(string $key): mixed
    {
        $node = $this->head;

        while ($node !== null) {
            if ($node->key === $key) {
                return $node->value;
            }
            $node = $node->next;
        }

        throw new OutOfBoundsException("Key '$key' not found.");
    }
    
    private function findNodeByKey(string $key): ?object
    {
        $node = $this->head;
    
        while ($node !== null) {
            if ($node->key === $key) {
                return $node;
            }
            $node = $node->next;
        }
    
        return null;
    }

    public function remove(string $key): void
    {
        $prev = null;
        $node = $this->head;

        while ($node !== null) {
            if ($node->key === $key) {
                if ($prev === null) {
                    $this->head = $node->next;
                } else {
                    $prev->next = $node->next;
                }
                return;
            }
            $prev = $node;
            $node = $node->next;
        }

        throw new OutOfBoundsException("Key '$key' not found.");
    }

    public function has(string $key): bool
    {
        $node = $this->head;

        while ($node !== null) {
            if ($node->key === $key) {
                return true;
            }
            $node = $node->next;
        }

        return false;
    }
}
