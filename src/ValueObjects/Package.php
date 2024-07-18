<?php

declare(strict_types=1);

namespace Sonnenglas\MyDHL\ValueObjects;

class Package
{
    public function __construct(
         float $weight,
         int $height,
         int $length,
         int $width
    ) {
        $this->weight = $weight;
        $this->height = $height;
        $this->length = $length;
        $this->width = $width;
    }

    public function getWeight(): float
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
