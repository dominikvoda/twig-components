<?php declare(strict_types = 1);

namespace DV\TwigComponents\Components\Composite;

use DV\TwigComponents\Components\Component;

final class CompositeComponent implements Component
{
    /**
     * @var array
     */
    private $components;


    public function __construct(array $components)
    {
        $this->components = $components;
    }


    public function getTemplate(): string
    {
        return __DIR__ . '/composite.twig';
    }


    public function getVariables(): array
    {
        return ['components' => $this->components];
    }
}
