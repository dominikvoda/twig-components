<?php declare(strict_types = 1);

namespace DV\TwigComponents\Components;

use DV\TwigComponents\Renderer;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

final class ComponentRendererExtension extends AbstractExtension
{
    /**
     * @var Renderer
     */
    private $renderer;


    public function __construct(Renderer $renderer)
    {
        $this->renderer = $renderer;
    }


    public function getFunctions()
    {
        return [
            new TwigFunction('render', [$this, 'render'], ['is_safe' => ['html']]),
        ];
    }


    public function render($component): string
    {
        if ($component instanceof Component) {
            return $this->renderer->render($component);
        }

        return $component;
    }
}
