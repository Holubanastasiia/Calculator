<?php

namespace Anastasiia\Calculator;
use Anastasiia\Calculator\Exceptions\DivideByZeroException;

class Calculator
{
    public function add($a, $b)
    {
        return $a + $b;
    }

    public function subtract($a, $b)
    {
        return $a - $b;
    }

    public function divide($a, $b)
    {
        if ($b == 0) {
            throw new DivideByZeroException("Cannot divide by zero.");
        }

        return $a / $b;
    }

    public function multiply($a, $b)
    {
        return $a * $b;
    }

}