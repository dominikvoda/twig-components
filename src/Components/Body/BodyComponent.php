<?php declare(strict_types = 1);

namespace DV\TwigComponents\Components\Body;

use DV\TwigComponents\Components\Component;
use DV\TwigComponents\Components\Composite\CompositeComponent;

final class BodyComponent implements Component
{
    /**
     * @var CompositeComponent
     */
    private $compositeComponent;


    public function __construct(CompositeComponent $compositeComponent)
    {
        $this->compositeComponent = $compositeComponent;
    }


    public function getTemplate(): string
    {
        return __DIR__ . '/body.twig';
    }


    public function getVariables(): array
    {
        return [
            'component' => $this->compositeComponent,
        ];
    }
}
