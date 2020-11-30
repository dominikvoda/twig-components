<?php declare(strict_types = 1);

namespace DV\TwigComponents\Components\Html;

use DV\TwigComponents\Components\Body\BodyComponent;
use DV\TwigComponents\Components\Component;
use DV\TwigComponents\Components\Head\HeadComponent;

final class HtmlComponent implements Component
{
    /**
     * @var HeadComponent
     */
    private $head;

    /**
     * @var BodyComponent
     */
    private $body;


    public function __construct(HeadComponent $head, BodyComponent $body)
    {
        $this->head = $head;
        $this->body = $body;
    }


    public function getTemplate(): string
    {
        return __DIR__ . '/html.twig';
    }


    public function getVariables(): array
    {
        return [
            'head' => $this->head,
            'body' => $this->body,
        ];
    }
}
