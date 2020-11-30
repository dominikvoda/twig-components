<?php declare(strict_types = 1);

require_once __DIR__ . '/vendor/autoload.php';

$twigEnvironmentFactory = new \DV\TwigComponents\TwigEnvironmentFactory();

$environment = $twigEnvironmentFactory->create();

$renderer = new \DV\TwigComponents\Renderer($environment);

$environment->addExtension(new \DV\TwigComponents\Components\ComponentRendererExtension($renderer));

$head = new \DV\TwigComponents\Components\Head\HeadComponent('100 Cute kittens');

$kittens = array_map(
    static function (int $width): \DV\TwigComponents\Components\Image\Placekitten\PlacekittenImageComponent {
        return new \DV\TwigComponents\Components\Image\Placekitten\PlacekittenImageComponent($width, 300);
    },
    range(200, 300)
);

$bodyComposite = new \DV\TwigComponents\Components\Composite\CompositeComponent($kittens);

$body = new \DV\TwigComponents\Components\Body\BodyComponent($bodyComposite);

$html = new \DV\TwigComponents\Components\Html\HtmlComponent($head, $body);

file_put_contents('test.html', $renderer->render($html));
