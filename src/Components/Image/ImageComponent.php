<?php declare(strict_types = 1);

namespace DV\TwigComponents\Components\Image;

use DV\TwigComponents\Components\Component;

final class ImageComponent implements Component
{
    /**
     * @var string
     */
    private $source;


    public function __construct(string $source)
    {
        $this->source = $source;
    }


    public function getTemplate(): string
    {
        return __DIR__ . '/image.twig';
    }


    public function getVariables(): array
    {
        return [
            'src' => $this->source,
        ];
    }
}
