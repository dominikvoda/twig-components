<?php declare(strict_types = 1);

namespace DV\TwigComponents\Components\Head;

use DV\TwigComponents\Components\Component;

final class HeadComponent implements Component
{
    private $title;


    public function __construct(string $title)
    {
        $this->title = $title;
    }


    public function getTemplate(): string
    {
        return __DIR__ . '/head.twig';
    }


    public function getVariables(): array
    {
        return ['title' => $this->title];
    }
}
