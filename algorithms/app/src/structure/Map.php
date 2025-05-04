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

class MyMap
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

$map = new MyMap();
$map->put('name', 'Maria');
$map->put('age', 19);

echo $map->get('name') . PHP_EOL;
echo $map->get('age') . PHP_EOL;

$map->put('name', 'Ivan');
echo $map->get('name') . PHP_EOL;

$map->remove('age');
var_dump($map->has('age'));
