<?php declare(strict_types = 1);

namespace DV\TwigComponents\Components;

interface Component
{
    public function getTemplate(): string;


    public function getVariables(): array;
}
