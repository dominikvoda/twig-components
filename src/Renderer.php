<?php declare(strict_types = 1);

namespace DV\TwigComponents;

use DV\TwigComponents\Components\Component;
use Twig\Environment;

final class Renderer
{
    /**
     * @var Environment
     */
    private $twig;


    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }


    public function render(Component $component): string
    {
        return $this->twig->render($component->getTemplate(), $component->getVariables());
    }
}
