<?php declare(strict_types = 1);

namespace DV\TwigComponents;

use Twig\Loader\LoaderInterface;
use Twig\Source;
use function file_get_contents;
use function is_file;
use function md5;

final class TemplateLoader implements LoaderInterface
{
    public function getSourceContext(string $name): Source
    {
        return new Source(file_get_contents($name), $name, $name);
    }


    public function getCacheKey(string $name): string
    {
        return md5(time() . $name);
    }


    public function isFresh(string $name, int $time): bool
    {
        return false;
    }


    public function exists(string $name)
    {
        return is_file($name);
    }
}
