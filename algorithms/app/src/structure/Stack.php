<?php

declare(strict_types=1);

function stack($str)
{
    $stack = new SplStack();
    for ($i = 0; $i < mb_strlen($str); $i++) {
        $stack->push(mb_substr($str, $i, 1));
    }
    for ($i = 0; $i < mb_strlen($str); $i++) {
        echo $stack->pop();
    }
}
