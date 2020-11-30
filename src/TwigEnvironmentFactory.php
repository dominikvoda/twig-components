<?php declare(strict_types = 1);

namespace DV\TwigComponents;

use Twig\Environment;

final class TwigEnvironmentFactory
{
    public function create(): Environment
    {
        $environment = new Environment(new TemplateLoader());

        $environment->addGlobal('placekittenUrl', 'https://placekitten.com');

        return $environment;
    }
}
