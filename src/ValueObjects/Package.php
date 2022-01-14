<?php

declare(strict_types=1);

namespace Sonnenglas\MyDHL\ValueObjects;

class Package
{
    public function __construct(
        private int $weight,
        private int $height,
        private int $length,
        private int $width,
    ) {
    }

    public function getWeight(): int
    {
        return $this->weight;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getLength(): int
    {
        return $this->length;
    }

    public function getWidth(): int
    {
        return $this->width;
    }
}