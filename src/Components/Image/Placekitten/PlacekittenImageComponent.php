<?php declare(strict_types = 1);

namespace DV\TwigComponents\Components\Image\Placekitten;

use DV\TwigComponents\Components\Component;

final class PlacekittenImageComponent implements Component
{
    /**
     * @var int
     */
    private $width;

    /**
     * @var int
     */
    private $height;


    public function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }


    public function getTemplate(): string
    {
        return __DIR__ . '/placekitten.twig';
    }


    public function getVariables(): array
    {
        return [
            'width' => $this->width,
            'height' => $this->height,
        ];
    }
}
